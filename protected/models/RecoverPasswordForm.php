<?php

/**
 * RecoverPasswordForm class.
 * RecoverPasswordForm is the data structure for keeping
 * user recovery form data. It is used by the 'recoverPassword' action of 'SiteController'.
 */
// Usar PHPMailer en lugar de mail()
require_once './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class RecoverPasswordForm extends CFormModel
{
	public $username;
	public $email;

	/**
	 * Declares the validation rules.
	 * The rules state that username and email are required.
	 */
	public function rules()
	{
		return array(
			// username and email are required
			array('username, email', 'required'),
			array('email', 'email'),
			array('username, email', 'validateUser'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'username'=>'Número de DNI (Sin puntos ni espacios)',
			'email'=>'Correo Electrónico (CVG)',
		);
	}

	/**
	 * Validates that the username exists and handles email registration.
	 */
	public function validateUser($attribute, $params)
	{
		if (!$this->hasErrors()) {
			// Primero buscar solo por usuario
			$user = Users::model()->find('users_name=:username', array(
				':username' => $this->username,
			));

			if ($user === null) {
				$this->addError('username', 'El usuario no existe en el sistema.');
			} else {
				// Si el usuario existe, verificar el email
				if (!empty($user->email)) {
					// Si ya tiene email, debe coincidir
					if ($user->email !== $this->email) {
						$this->addError('email', 'El correo electrónico no coincide con el registrado para este usuario.');
					}
				}
				// Si no tiene email, se guardará el proporcionado
			}
		}
	}

	/**
	 * Generates a new password and sends it to the user's email.
	 * @return boolean whether password recovery is successful.
	 */
	public function recoverPassword()
	{
		if ($this->validate()) {
			$user = Users::model()->find('users_name=:username', array(
				':username' => $this->username,
			));

			if ($user !== null) {
				// Si el usuario no tenía email registrado, guardarlo
				$emailUpdated = false;
				if (empty($user->email)) {
					$user->email = $this->email;
					$emailUpdated = true;
				}

				// Generar nueva contraseña
				$newPassword = $this->generateRandomPassword();
				
				// Actualizar la contraseña en la base de datos
				$user->password = password_hash($newPassword, PASSWORD_DEFAULT);
				$user->modified = new CDbExpression('NOW()');
				
				if ($user->save()) {
					// Enviar correo electrónico
					$emailSent = $this->sendPasswordEmail($user, $newPassword, $emailUpdated);
					return $emailSent;
				}
			}
		}
		return false;
	}

	/**
	 * Generates a random password.
	 * @return string the generated password
	 */
	private function generateRandomPassword($length = 8)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomPassword = '';
		for ($i = 0; $i < $length; $i++) {
			$randomPassword .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomPassword;
	}

	/**
	 * Sends the new password to the user's email.
	 * @param Users $user the user model
	 * @param string $newPassword the new password
	 * @param boolean $emailUpdated whether the email was just registered
	 * @return boolean whether the email was sent successfully
	 */
	private function sendPasswordEmail($user, $newPassword, $emailUpdated = false)
	{
		$subject = 'Recuperación de Contraseña - Sistema de Encuestas UTN-FRD';
		$message = "Estimado/a {$user->full_name},\n\n";
		
		if ($emailUpdated) {
			$message .= "Se ha registrado su correo electrónico en el sistema y se ha generado una nueva contraseña.\n\n";
		} else {
			$message .= "Ha solicitado la recuperación de su contraseña para el Sistema de Encuestas Estudiantes.\n\n";
		}
		
		$message .= "Su nueva contraseña es: {$newPassword}\n\n";
		$message .= "Por motivos de seguridad, le recomendamos cambiar esta contraseña después de iniciar sesión.\n\n";
		
		if ($emailUpdated) {
			$message .= "Su correo electrónico ha sido guardado en el sistema para futuras comunicaciones.\n\n";
		}
		
		$message .= "Si no ha solicitado este cambio, por favor contacte al administrador del sistema.\n\n";
		$message .= "Saludos,\n";
		$message .= "Sistema de Encuestas UTN-FRD";

		// Crear registro en la tabla de correos antes de enviar
		$datosCorreo = array(
			'usuario_id' => $user->uid,
			'usuario_dni' => $user->users_name,
			'destinatario_email' => $user->email,
			'destinatario_nombre' => $user->full_name,
			'asunto' => $subject,
			'mensaje' => $message,
			'tipo_correo' => Correos::TIPO_RECUPERACION_PASSWORD,
		);

		$correoRegistro = Correos::crearCorreo($datosCorreo);
		
		if ($correoRegistro === false) {
			// Si no se puede crear el registro, no continuar
			return false;
		}

		// Configurar headers del correo
		$headers = "From: " . Yii::app()->params['adminEmail'] . "\r\n";
		$headers .= "Reply-To: " . Yii::app()->params['adminEmail'] . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";


		error_log("Preparando para enviar correo a: {$user->email}");
		// Intentar enviar el correo
		$emailSent = $this->sendEmail($user, $subject, $message);
		// $emailSent = mail($user->email, $subject, $message, $headers);
		
		// Actualizar el estado del registro según el resultado del envío
		if ($emailSent) {
			$correoRegistro->marcarComoEnviado();
		} else {
			$correoRegistro->marcarComoError('Error al enviar correo con función mail()');
		}

		return $emailSent;
	}

	private function sendEmail($user, $subject, $message)
	{

		$mail = new PHPMailer(true);

		try {
			// Configuración del servidor SMTP
			$mail->SMTPDebug = 0;
			$mail->isSMTP();
			$mail->Timeout    = 60;
			$mail->CharSet    = 'UTF-8';
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
			$mail->addAddress($user->email, $user->full_name);
			// Contenido
			$mail->isHTML(false);
			$mail->Subject = $subject;
			$mail->Body    = $message;

			$emailSent = $mail->send();
			error_log("Correo enviado exitosamente a: {$user->email}");
			
		} catch (Exception $e) {
			error_log("Error al enviar correo: {$mail->ErrorInfo}");
			$emailSent = false;
		}
		
		return $emailSent;
	}

}