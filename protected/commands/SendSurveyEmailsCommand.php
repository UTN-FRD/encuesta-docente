<?php
// Asegurar que el autoloader de Composer esté disponible
require_once(dirname(dirname(dirname(__FILE__))) . '/vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

/**
 * Comando de consola para enviar correos de encuestas a alumnos pendientes.
 * Uso: php protected/yiic sendsurveyemails
 */
class SendSurveyEmailsCommand extends CConsoleCommand
{
    // Define el tamaño del bloque
    const BATCH_SIZE = 20; // Número de correos a enviar por ejecución
    const DELAY_BETWEEN_EMAILS = 60; // 60 segundos entre cada correo

    const SURVEY_URL_BASE = 'https://encuestasalumno.frd.utn.edu.ar/'; 
    const TIPO_CORREO_ENCUESTA = 'apertura_encuesta'; 

// -------------------------------------------------------------------------
//                          ACCIÓN PRINCIPAL
// -------------------------------------------------------------------------

    public function run($args)
    {
        echo "Iniciando el envío automático de correos...\n";
        Yii::log("Iniciando el envío automático de correos...", CLogger::LEVEL_INFO, 'application.command.sendsurveyemails');
        
        // 1. Obtener la lista de correos a enviar
        $emailsToProcess = $this->getPendingEmails();

        if (empty($emailsToProcess)) {
            echo "No se encontraron más correos pendientes.\n";
            return 0;
        }

        echo "Procesando " . count($emailsToProcess) . " correos...\n";
        
        $totalSent = 0;
        $emailCount = 0;
        
        // 2. Procesar cada email con delay
        foreach ($emailsToProcess as $row) {
            $email = $row['email'];
            $firstname = $row['firstname'];
            $cantidadMaterias = $row['cantidad_materias'];
            $emailCount++;
            
            // Extraer solo el primer nombre
            $primerNombre = $this->extraerPrimerNombre($firstname);
            
            echo "Enviando {$emailCount}/" . count($emailsToProcess) . ": {$email} ({$firstname})";
            
            // 3. Preparar los datos del correo
            $subject = "Encuesta de evaluación docente – UTN-FRD";
            $message = $this->buildEmailMessage($primerNombre, $cantidadMaterias);
            
            // 4. Enviar correo
            $emailSent = $this->sendEmail($email, $firstname, $subject, $message); 
                    
            // 5. Registrar el resultado
            if ($emailSent) {
                $totalSent++;
                echo " -> ENVIADO\n";
                $this->registrarCorreoEnviado($email, $subject, $message);
            } else {
                echo " -> ERROR\n";
                $this->registrarCorreoError($email, $subject, $message, "Error SMTP/PHPMailer");
            }
            
            // 6. DELAY entre correos (excepto en el último)
            if ($emailCount < count($emailsToProcess)) {
                echo "Esperando " . self::DELAY_BETWEEN_EMAILS . " segundos...\n";
                sleep(self::DELAY_BETWEEN_EMAILS);
            }
        }
        
        echo "Proceso finalizado. Total enviados: {$totalSent}\n";
        Yii::log("Proceso finalizado. Total enviados: {$totalSent}", CLogger::LEVEL_INFO, 'application.command.sendsurveyemails');
        return 0;
    }

// -------------------------------------------------------------------------
//                          MÉTODOS DE SOPORTE
// -------------------------------------------------------------------------

    /**
     * Obtiene los participantes pendientes de encuestar en el año académico especificado.
     */
    private function getPendingEmails()
    {
        $sql = "
            SELECT DISTINCT p.email, p.firstname, COUNT(i.id) as cantidad_materias
            FROM participants p
            JOIN incripciones i ON i.participant_id = p.participant_id
            WHERE i.anio_academico = YEAR(CURDATE())
            AND p.email IS NOT NULL
            AND p.email <> ''
            AND NOT EXISTS (
                SELECT 1 
                FROM correos c 
                WHERE c.destinatario_email = p.email 
                AND c.estado_envio IN ('enviado', 'pendiente')
                AND c.tipo_correo = :tipoCorreo
            )
            GROUP BY p.email, p.firstname
            ORDER BY p.email
            LIMIT :limit
        ";

        $db = Yii::app()->db;
        $command = $db->createCommand($sql);
        $command->bindValue(':tipoCorreo', self::TIPO_CORREO_ENCUESTA, PDO::PARAM_STR);
        $command->bindValue(':limit', self::BATCH_SIZE, PDO::PARAM_INT);

        return $command->queryAll();
    }

    /**
     * Extrae el primer nombre del campo firstname
     * Ejemplo: "Juan Carlos, María" -> "Juan"
     */
    private function extraerPrimerNombre($firstname)
    {
        if (empty($firstname)) {
            return 'Estimado/a estudiante';
        }
        
        // Dividir por coma primero
        $partes = explode(',', $firstname);
        $primeraParte = trim($partes[0]);
        
        // Luego dividir por espacios y tomar solo la primera palabra
        $nombres = explode(' ', $primeraParte);
        $primerNombre = trim($nombres[0]);
        
        return !empty($primerNombre) ? $primerNombre : 'Estimado/a estudiante';
    }

    private function sendEmail($email, $name, $subject, $message)
    {
        $mail = new PHPMailer(true);
        $emailSent = false;

        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Timeout = 60;
            $mail->CharSet = 'UTF-8';
			$mail->Host       = Yii::app()->params['smtpHost'];
			$mail->Username   = Yii::app()->params['emailSender'];
			$mail->Port       = Yii::app()->params['smtpPort'];

			if (Yii::app()->params['emailSenderPass'] == '') {
				$mail->SMTPAuth   = false;
			} else {
				$mail->SMTPAuth   = true;
				$mail->Password   = Yii::app()->params['emailSenderPass'];
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //'tls'; // PHPMailer::ENCRYPTION_SMTPS;

				$mail->SMTPOptions = array(
					'ssl' => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true,
						'crypto_method' => STREAM_CRYPTO_METHOD_TLS_CLIENT
					)
				);
			}

			// Destinatarios
			$mail->setFrom(Yii::app()->params['adminEmail'], 'Encuestas Alumnos UTN-FRD');
			$mail->addAddress($email, $name);

			// Contenidoh
			$mail->isHTML(false);
			$mail->Subject = $subject;
			$mail->Body    = $message;

			$emailSent = $mail->send();
            
        } catch (Exception $e) {
            Yii::log("PHPMailer Error para {$email}: " . $mail->ErrorInfo, CLogger::LEVEL_ERROR, 'application.command.sendsurveyemails');
            $emailSent = false;
        }
        
        return $emailSent;
    }

    private function buildEmailMessage($primerNombre, $cantidadMaterias)
    {
        $pluralMateria = $cantidadMaterias > 1 ? 'materias' : 'materia';
        
        return "Hola {$primerNombre},

Ya se encuentra disponible la encuesta a estudiantes para evaluar el desempeño de docentes y auxiliares.
La encuesta es anónima y obligatoria, y debe completarse antes del 22 de noviembre, fecha en que finaliza el cuatrimestre.
Te recordamos que no completarla puede afectar tu inscripción a los exámenes finales, por lo que te sugerimos realizarla con tiempo.

Esta instancia forma parte del Sistema de Evaluación para la Permanencia en la Carrera Académica de los docentes de la Universidad Tecnológica Nacional, conforme a la Ordenanza N.º 1182 del Consejo Superior Universitario.

El espacio es institucional y confidencial, destinado a expresar tu opinión con libertad y respeto hacia el cuerpo docente evaluado.

Tienes encuestas pendientes de responder para {$cantidadMaterias} {$pluralMateria}.

Para comenzar, ingresá en: https://encuestasalumno.frd.utn.edu.ar/ y seguí las instrucciones del sistema.

Si tenés dudas o necesitás asistencia, podés responder a este correo electrónico.

Tu participación es muy importante para mejorar la calidad educativa de la Facultad.

Saludos cordiales,
Área de Encuestas
UTN - Facultad Regional Delta

---
Si no desea recibir estos correos, responda a este mensaje con el asunto 'BAJA'.";
    }

    private function registrarCorreoEnviado($email, $asunto, $mensaje)
    {
        $sql = "INSERT INTO correos (destinatario_email, asunto, mensaje, tipo_correo, estado_envio, fecha_envio) 
                VALUES (:email, :asunto, :mensaje, :tipo, 'enviado', NOW())";
        
        $command = Yii::app()->db->createCommand($sql);
        $command->bindValue(':email', $email, PDO::PARAM_STR);
        $command->bindValue(':asunto', $asunto, PDO::PARAM_STR);
        $command->bindValue(':mensaje', $mensaje, PDO::PARAM_STR);
        $command->bindValue(':tipo', self::TIPO_CORREO_ENCUESTA, PDO::PARAM_STR);
        $command->execute();
    }

    private function registrarCorreoError($email, $asunto, $mensaje, $error)
    {
        $sql = "INSERT INTO correos (destinatario_email, asunto, mensaje, tipo_correo, estado_envio, error_mensaje, fecha_envio) 
                VALUES (:email, :asunto, :mensaje, :tipo, 'error', :error, NOW())";
        
        $command = Yii::app()->db->createCommand($sql);
        $command->bindValue(':email', $email, PDO::PARAM_STR);
        $command->bindValue(':asunto', $asunto, PDO::PARAM_STR);
        $command->bindValue(':mensaje', $mensaje, PDO::PARAM_STR);
        $command->bindValue(':tipo', self::TIPO_CORREO_ENCUESTA, PDO::PARAM_STR);
        $command->bindValue(':error', $error, PDO::PARAM_STR);
        $command->execute();
    }
}