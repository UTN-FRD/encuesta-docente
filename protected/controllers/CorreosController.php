<?php

class CorreosController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all authenticated users to access basic functions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated users to create and update
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin users to perform all admin actions
				'actions'=>array('admin','delete','estadisticas','reenviar'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->isAdmin() || !Yii::app()->user->isGuest',
			),
			array('allow', // allow debug action for authenticated users (temporal)
				'actions'=>array('debugUser'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Correos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Correos']))
		{
			$model->attributes=$_POST['Correos'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Correos']))
		{
			$model->attributes=$_POST['Correos'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Correos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Correos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Correos']))
			$model->attributes=$_GET['Correos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Correos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Correos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Correos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='correos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	/**
	 * Acción para reenviar un correo que falló
	 * @param integer $id el ID del correo a reenviar
	 */
	public function actionReenviar($id)
	{
		$model = $this->loadModel($id);
		
		if ($model->estado_envio === Correos::ESTADO_ENVIADO) {
			Yii::app()->user->setFlash('error', 'Este correo ya fue enviado exitosamente.');
			$this->redirect(array('view', 'id' => $id));
		}

		// Intentar reenviar
		$headers = "From: " . Yii::app()->params['adminEmail'] . "\r\n";
		$headers .= "Reply-To: " . Yii::app()->params['adminEmail'] . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

		$emailSent = mail($model->destinatario_email, $model->asunto, $model->mensaje, $headers);

		if ($emailSent) {
			$model->marcarComoEnviado();
			Yii::app()->user->setFlash('success', 'Correo reenviado exitosamente.');
		} else {
			$model->marcarComoError('Error en reenvío manual');
			Yii::app()->user->setFlash('error', 'Error al reenviar el correo.');
		}

		$this->redirect(array('view', 'id' => $id));
	}

	/**
	 * Estadísticas de correos enviados
	 */
	public function actionEstadisticas()
	{
		// Debug: verificar si el usuario es admin
		if (!Yii::app()->user->isAdmin()) {
			throw new CHttpException(403, 'Acceso denegado. Usuario no es administrador.');
		}

		$criteriaTotal = new CDbCriteria();
		$total = Correos::model()->count($criteriaTotal);

		$criteriaEnviados = new CDbCriteria();
		$criteriaEnviados->condition = 'estado_envio = :estado';
		$criteriaEnviados->params = array(':estado' => Correos::ESTADO_ENVIADO);
		$enviados = Correos::model()->count($criteriaEnviados);

		$criteriaError = new CDbCriteria();
		$criteriaError->condition = 'estado_envio = :estado';
		$criteriaError->params = array(':estado' => Correos::ESTADO_ERROR);
		$errores = Correos::model()->count($criteriaError);

		$criteriaPendientes = new CDbCriteria();
		$criteriaPendientes->condition = 'estado_envio = :estado';
		$criteriaPendientes->params = array(':estado' => Correos::ESTADO_PENDIENTE);
		$pendientes = Correos::model()->count($criteriaPendientes);

		// Estadísticas por tipo
		$tipoStats = Yii::app()->db->createCommand()
			->select('tipo_correo, COUNT(*) as cantidad')
			->from('correos')
			->group('tipo_correo')
			->queryAll();

		$this->render('estadisticas', array(
			'total' => $total,
			'enviados' => $enviados,
			'errores' => $errores,
			'pendientes' => $pendientes,
			'tipoStats' => $tipoStats,
		));
	}

	/**
	 * Acción temporal para debug - verificar estado del usuario
	 */
	public function actionDebugUser()
	{
		$user = Yii::app()->user;
		$userModel = Users::model()->findByPk($user->id);
		
		echo "<h3>Debug Usuario</h3>";
		echo "User ID: " . $user->id . "<br>";
		echo "User Name: " . $user->name . "<br>";
		echo "Is Guest: " . ($user->isGuest ? 'Yes' : 'No') . "<br>";
		echo "Is Admin: " . ($user->isAdmin() ? 'Yes' : 'No') . "<br>";
		echo "Is Director: " . ($user->isDirector() ? 'Yes' : 'No') . "<br>";
		
		if ($userModel) {
			echo "Parent ID: " . $userModel->parent_id . "<br>";
			echo "Username: " . $userModel->users_name . "<br>";
			echo "Full Name: " . $userModel->full_name . "<br>";
			echo "LevelLookUp::MEMBER: " . LevelLookUp::MEMBER . "<br>";
		}
		
		Yii::app()->end();
	}
}