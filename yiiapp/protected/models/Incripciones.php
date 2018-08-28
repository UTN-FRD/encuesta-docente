<?php

/**
 * This is the model class for table "incripciones".
 *
 * The followings are the available columns in table 'incripciones':
 * @property integer $id
 * @property string $participant_id
 * @property integer $asignatura_id
 * @property integer $anio_academico
 * @property string $comentarios
 */
class Incripciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'incripciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('participant_id, asignatura_id, anio_academico', 'required'),
			array('asignatura_id, anio_academico', 'numerical', 'integerOnly'=>true),
			array('participant_id', 'length', 'max'=>50),
			array('comentarios', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, participant_id, asignatura_id, anio_academico, comentarios', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'participant_id' => 'Participant',
			'asignatura_id' => 'Asignatura',
			'anio_academico' => 'Anio Academico',
			'comentarios' => 'Comentarios',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('participant_id',$this->participant_id,true);
		$criteria->compare('asignatura_id',$this->asignatura_id);
		$criteria->compare('anio_academico',$this->anio_academico);
		$criteria->compare('comentarios',$this->comentarios,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Incripciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
