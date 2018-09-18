<?php

/**
 * This is the model class for table "survey_164846".
 *
 * The followings are the available columns in table 'survey_164846':
 * @property integer $id
 * @property string $submitdate
 * @property integer $lastpage
 * @property string $startlanguage
 * @property string $seed
 * @property string $ipaddr
 * @property string $a
 * @property string $b
 * @property string $c
 * @property string $d
 * @property string $e
 * @property string $f
 * @property string $g
 * @property integer $asignatura_profesor_id
 */
class Survey164846 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'survey_164846';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('startlanguage', 'required'),
			array('lastpage, asignatura_profesor_id', 'numerical', 'integerOnly'=>true),
			array('startlanguage', 'length', 'max'=>20),
			array('seed', 'length', 'max'=>31),
			array('submitdate, ipaddr, a, b, c, d, e, f, g', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, submitdate, lastpage, startlanguage, seed, ipaddr, a, b, c, d, e, f, g, asignatura_profesor_id', 'safe', 'on'=>'search'),
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
			'submitdate' => 'Submitdate',
			'lastpage' => 'Lastpage',
			'startlanguage' => 'Startlanguage',
			'seed' => 'Seed',
			'ipaddr' => 'Ipaddr',
			'a' => 'A',
			'b' => 'B',
			'c' => 'C',
			'd' => 'D',
			'e' => 'E',
			'f' => 'F',
			'g' => 'G',
			'asignatura_profesor_id' => 'Asignatura Profesor',
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
		$criteria->compare('submitdate',$this->submitdate,true);
		$criteria->compare('lastpage',$this->lastpage);
		$criteria->compare('startlanguage',$this->startlanguage,true);
		$criteria->compare('seed',$this->seed,true);
		$criteria->compare('ipaddr',$this->ipaddr,true);
		$criteria->compare('a',$this->a,true);
		$criteria->compare('b',$this->b,true);
		$criteria->compare('c',$this->c,true);
		$criteria->compare('d',$this->d,true);
		$criteria->compare('e',$this->e,true);
		$criteria->compare('f',$this->f,true);
		$criteria->compare('g',$this->g,true);
		$criteria->compare('asignatura_profesor_id',$this->asignatura_profesor_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Survey164846 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
