<?php

/**
 * This is the model class for table "participants".
 *
 * The followings are the available columns in table 'participants':
 * @property string $participant_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $language
 * @property string $blacklisted
 * @property integer $owner_uid
 * @property integer $created_by
 * @property string $created
 * @property string $modified
 * @property string $dni
 * @property string $legajo
 * @property string $anio_ingreso
 * @property string $especialidad_plan
 * @property integer $carrera_id
 */
class Participants extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'participants';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('participant_id, blacklisted, owner_uid, created_by', 'required'),
			array('owner_uid, created_by, carrera_id', 'numerical', 'integerOnly'=>true),
			array('participant_id', 'length', 'max'=>50),
			array('firstname, lastname', 'length', 'max'=>150),
			array('language', 'length', 'max'=>40),
			array('blacklisted', 'length', 'max'=>1),
			array('dni, legajo, anio_ingreso, especialidad_plan', 'length', 'max'=>10),
			array('email, created, modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('participant_id, firstname, lastname, email, language, blacklisted, owner_uid, created_by, created, modified, dni, legajo, anio_ingreso, especialidad_plan, carrera_id', 'safe', 'on'=>'search'),
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
			'participant_id' => 'Participant',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'email' => 'Email',
			'language' => 'Language',
			'blacklisted' => 'Blacklisted',
			'owner_uid' => 'Owner Uid',
			'created_by' => 'Created By',
			'created' => 'Created',
			'modified' => 'Modified',
			'dni' => 'Dni',
			'legajo' => 'Legajo',
			'anio_ingreso' => 'Anio Ingreso',
			'especialidad_plan' => 'Especialidad Plan',
			'carrera_id' => 'Carrera',
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

		$criteria->compare('participant_id',$this->participant_id,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('blacklisted',$this->blacklisted,true);
		$criteria->compare('owner_uid',$this->owner_uid);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified',$this->modified,true);
		$criteria->compare('dni',$this->dni,true);
		$criteria->compare('legajo',$this->legajo,true);
		$criteria->compare('anio_ingreso',$this->anio_ingreso,true);
		$criteria->compare('especialidad_plan',$this->especialidad_plan,true);
		$criteria->compare('carrera_id',$this->carrera_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Participants the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
