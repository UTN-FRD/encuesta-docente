<?php

class IncripcionesController extends Controller
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
		$noAdmins = Users::model()->findAllByAttributes(array('parent_id'=>"9999"));
		$users = Users::model()->findAll();
		$noAdmins = array_column($noAdmins,'users_name');
		$users = array_column($users,'users_name');
		return array(
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('encuestas'),
				'users'=>$noAdmins,
			),
			array('deny',  // deny all users
				'users'=>$noAdmins,
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update','index','view','listarparticipants'),
				'users'=>$users,
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
		$model=new Incripciones;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Incripciones']))
		{
			$model->attributes=$_POST['Incripciones'];
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

		if(isset($_POST['Incripciones']))
		{
			$model->attributes=$_POST['Incripciones'];
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
		$dataProvider=new CActiveDataProvider('Incripciones');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}


	public function actionEncuestas()
	{
		$dataProvider=new CActiveDataProvider("AsignaturaProfesor");
		$this->render('encuestas',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		// $model2=new Participants('search');
		// $model2->unsetAttributes();
		// if(isset($_GET['Participants']))
		// 	$model2->attributes=$_GET['Participants'];

		$model=new Incripciones('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Incripciones']))
			$model->attributes=$_GET['Incripciones'];

		$this->render('admin',array(
			'model'=>$model
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Incripciones the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Incripciones::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Incripciones $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='incripciones-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionlistarparticipants($term)
 	{
 		$criteria = new CDbCriteria;
 		$criteria->condition = "LOWER(firstname) like LOWER(:term)";
		$criteria->params = array(':term'=> '%'.$_GET['term'].'%');
		$criteria->limit = 30;
		$models = Participants::model()->findAll($criteria);
		$arr = array();
		foreach($models as $model)
		{
			$arr[] = array(
				'label'=>($model->firstname), // label for dropdown list
				'value'=>($model->firstname), // value for input field
				'id'=>$model->participant_id, // return value from autocomplete
			);
		}
		echo CJSON::encode($arr);
	}
}
