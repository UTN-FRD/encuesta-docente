<?php

/**
 * This is the model class for table "correos".
 *
 * The followings are the available columns in table 'correos':
 * @property integer $id
 * @property integer $usuario_id
 * @property string $usuario_dni
 * @property string $destinatario_email
 * @property string $destinatario_nombre
 * @property string $asunto
 * @property string $mensaje
 * @property string $tipo_correo
 * @property string $estado_envio
 * @property string $fecha_creacion
 * @property string $fecha_envio
 * @property string $error_mensaje
 * @property string $ip_origen
 * @property string $user_agent
 *
 * The followings are the available model relations:
 * @property Users $usuario
 */
class Correos extends CActiveRecord
{
	// Constantes para tipos de correo
	const TIPO_RECUPERACION_PASSWORD = 'recuperacion_password';
	const TIPO_BIENVENIDA = 'bienvenida';
	const TIPO_NOTIFICACION = 'notificacion';
	const TIPO_ENCUESTA = 'encuesta';

	// Constantes para estados de envío
	const ESTADO_PENDIENTE = 'pendiente';
	const ESTADO_ENVIADO = 'enviado';
	const ESTADO_ERROR = 'error';

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'correos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('destinatario_email, asunto, mensaje', 'required'),
			array('usuario_id', 'numerical', 'integerOnly'=>true),
			array('usuario_dni', 'length', 'max'=>64),
			array('destinatario_email', 'length', 'max'=>192),
			array('destinatario_email', 'email'),
			array('destinatario_nombre', 'length', 'max'=>100),
			array('asunto', 'length', 'max'=>255),
			array('tipo_correo', 'length', 'max'=>50),
			array('estado_envio', 'in', 'range'=>array(self::ESTADO_PENDIENTE, self::ESTADO_ENVIADO, self::ESTADO_ERROR)),
			array('ip_origen', 'length', 'max'=>45),
			array('mensaje, error_mensaje, user_agent, fecha_creacion, fecha_envio', 'safe'),
			// The following rule is used by search().
			array('id, usuario_id, usuario_dni, destinatario_email, destinatario_nombre, asunto, tipo_correo, estado_envio, fecha_creacion, fecha_envio', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'usuario' => array(self::BELONGS_TO, 'Users', 'usuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'usuario_id' => 'Usuario ID',
			'usuario_dni' => 'DNI Usuario',
			'destinatario_email' => 'Email Destinatario',
			'destinatario_nombre' => 'Nombre Destinatario',
			'asunto' => 'Asunto',
			'mensaje' => 'Mensaje',
			'tipo_correo' => 'Tipo de Correo',
			'estado_envio' => 'Estado de Envío',
			'fecha_creacion' => 'Fecha Creación',
			'fecha_envio' => 'Fecha Envío',
			'error_mensaje' => 'Mensaje de Error',
			'ip_origen' => 'IP Origen',
			'user_agent' => 'User Agent',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('usuario_id',$this->usuario_id);
		$criteria->compare('usuario_dni',$this->usuario_dni,true);
		$criteria->compare('destinatario_email',$this->destinatario_email,true);
		$criteria->compare('destinatario_nombre',$this->destinatario_nombre,true);
		$criteria->compare('asunto',$this->asunto,true);
		$criteria->compare('tipo_correo',$this->tipo_correo,true);
		$criteria->compare('estado_envio',$this->estado_envio,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_envio',$this->fecha_envio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>'fecha_creacion DESC',
			),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Correos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * Método para crear y registrar un nuevo correo antes de enviarlo
	 * @param array $datos array con los datos del correo
	 * @return Correos|false el modelo creado o false si falla
	 */
	public static function crearCorreo($datos)
	{
		$correo = new Correos();
		$correo->usuario_id = isset($datos['usuario_id']) ? $datos['usuario_id'] : null;
		$correo->usuario_dni = isset($datos['usuario_dni']) ? $datos['usuario_dni'] : null;
		$correo->destinatario_email = $datos['destinatario_email'];
		$correo->destinatario_nombre = isset($datos['destinatario_nombre']) ? $datos['destinatario_nombre'] : null;
		$correo->asunto = $datos['asunto'];
		$correo->mensaje = $datos['mensaje'];
		$correo->tipo_correo = isset($datos['tipo_correo']) ? $datos['tipo_correo'] : self::TIPO_RECUPERACION_PASSWORD;
		$correo->estado_envio = self::ESTADO_PENDIENTE;
		$correo->ip_origen = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
		$correo->user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null;

		if ($correo->save()) {
			return $correo;
		}
		return false;
	}

	/**
	 * Marca el correo como enviado exitosamente
	 * @return boolean
	 */
	public function marcarComoEnviado()
	{
		$this->estado_envio = self::ESTADO_ENVIADO;
		$this->fecha_envio = new CDbExpression('NOW()');
		return $this->save();
	}

	/**
	 * Marca el correo como error y guarda el mensaje de error
	 * @param string $errorMensaje mensaje de error
	 * @return boolean
	 */
	public function marcarComoError($errorMensaje = null)
	{
		$this->estado_envio = self::ESTADO_ERROR;
		$this->error_mensaje = $errorMensaje;
		$this->fecha_envio = new CDbExpression('NOW()');
		return $this->save();
	}

	/**
	 * Obtiene los tipos de correo disponibles
	 * @return array
	 */
	public static function getTiposCorreo()
	{
		return array(
			self::TIPO_RECUPERACION_PASSWORD => 'Recuperación de Contraseña',
			self::TIPO_BIENVENIDA => 'Bienvenida',
			self::TIPO_NOTIFICACION => 'Notificación',
			self::TIPO_ENCUESTA => 'Encuesta',
		);
	}

	/**
	 * Obtiene los estados de envío disponibles
	 * @return array
	 */
	public static function getEstadosEnvio()
	{
		return array(
			self::ESTADO_PENDIENTE => 'Pendiente',
			self::ESTADO_ENVIADO => 'Enviado',
			self::ESTADO_ERROR => 'Error',
		);
	}
}