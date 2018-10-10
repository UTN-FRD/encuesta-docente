<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $uid
 * @property string $users_name
 * @property string $password
 * @property string $full_name
 * @property integer $parent_id
 * @property string $lang
 * @property string $email
 * @property string $htmleditormode
 * @property string $templateeditormode
 * @property string $questionselectormode
 * @property string $one_time_pw
 * @property integer $dateformat
 * @property string $created
 * @property string $modified
 */
class Users extends CActiveRecord
{
	public $old_password;
	public $new_password;
	public $repeat_password;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('old_password, new_password, repeat_password', 'required', 'on' => 'changePwd'),
			array('old_password', 'findPasswords', 'on' => 'changePwd'),
			array('repeat_password', 'compare', 'compareAttribute'=>'new_password', 'on'=>'changePwd'),
			array('new_password, repeat_password', 'required', 'on' => 'changePwd2'),
			array('old_password', 'findPasswords2', 'on' => 'changePwd2'),
			array('repeat_password', 'compare', 'compareAttribute'=>'new_password', 'on'=>'changePwd2'),
			array('password, full_name, parent_id', 'required'),
			array('parent_id, dateformat', 'numerical', 'integerOnly'=>true),
			array('users_name', 'length', 'max'=>64),
			array('full_name', 'length', 'max'=>50),
			array('lang', 'length', 'max'=>20),
			array('email', 'length', 'max'=>192),
			array('htmleditormode, templateeditormode, questionselectormode', 'length', 'max'=>7),
			array('one_time_pw, created, modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('uid, users_name, password, full_name, parent_id, lang, email, htmleditormode, templateeditormode, questionselectormode, one_time_pw, dateformat, created, modified', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'uid' => 'Uid',
			'users_name' => 'Usuario',
			'password' => 'Contrase&ntilde;a',
			'full_name' => 'Nombre',
			'parent_id' => 'Parent',
			'lang' => 'Lang',
			'email' => 'Email',
			'htmleditormode' => 'Htmleditormode',
			'templateeditormode' => 'Templateeditormode',
			'questionselectormode' => 'Questionselectormode',
			'one_time_pw' => 'One Time Pw',
			'dateformat' => 'Dateformat',
			'created' => 'Created',
			'modified' => 'Modified',

			// Atributos para el cambio de contraseña
			'new_password' => 'Nueva Contraseña',
			'repeat_password' => 'Repetir Nueva Contraseña',
			'old_password' => 'Contraseña Actual'
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
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('uid',$this->uid);
		$criteria->compare('users_name',$this->users_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('htmleditormode',$this->htmleditormode,true);
		$criteria->compare('templateeditormode',$this->templateeditormode,true);
		$criteria->compare('questionselectormode',$this->questionselectormode,true);
		$criteria->compare('one_time_pw',$this->one_time_pw,true);
		$criteria->compare('dateformat',$this->dateformat);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified',$this->modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function findPasswords($attribute, $params)
	{
		$user = Users::model()->findByPk(Yii::app()->user->id);
		if (!password_verify($this->old_password,$user->password))
			$this->addError($attribute, 'Old password is incorrect.');
	}
	public function findPasswords2($attribute, $params)
	{
		$user = Users::model()->findByPk(Yii::app()->user->id);
	}
}
