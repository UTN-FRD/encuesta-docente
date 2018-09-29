<?php

/**
 * This is the model class for table "tokens_164846".
 *
 * The followings are the available columns in table 'tokens_164846':
 * @property integer $tid
 * @property string $participant_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $emailstatus
 * @property string $token
 * @property string $language
 * @property string $blacklisted
 * @property string $sent
 * @property string $remindersent
 * @property integer $remindercount
 * @property string $completed
 * @property integer $usesleft
 * @property string $validfrom
 * @property string $validuntil
 * @property integer $mpid
 */
class Tokens extends CActiveRecord
{
	public $helperVar;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tokens_' . $this->helperVar;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('remindercount, usesleft, mpid', 'numerical', 'integerOnly'=>true),
			array('participant_id', 'length', 'max'=>50),
			array('firstname, lastname', 'length', 'max'=>150),
			array('token', 'length', 'max'=>35),
			array('language', 'length', 'max'=>25),
			array('blacklisted, sent, remindersent, completed', 'length', 'max'=>17),
			array('email, emailstatus, validfrom, validuntil', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tid, participant_id, firstname, lastname, email, emailstatus, token, language, blacklisted, sent, remindersent, remindercount, completed, usesleft, validfrom, validuntil, mpid', 'safe', 'on'=>'search'),
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
			'tid' => 'Tid',
			'participant_id' => 'Participant',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'email' => 'Email',
			'emailstatus' => 'Emailstatus',
			'token' => 'Token',
			'language' => 'Language',
			'blacklisted' => 'Blacklisted',
			'sent' => 'Sent',
			'remindersent' => 'Remindersent',
			'remindercount' => 'Remindercount',
			'completed' => 'Completed',
			'usesleft' => 'Usesleft',
			'validfrom' => 'Validfrom',
			'validuntil' => 'Validuntil',
			'mpid' => 'Mpid',
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

		$criteria->compare('tid',$this->tid);
		$criteria->compare('participant_id',$this->participant_id,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('emailstatus',$this->emailstatus,true);
		$criteria->compare('token',$this->token,true);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('blacklisted',$this->blacklisted,true);
		$criteria->compare('sent',$this->sent,true);
		$criteria->compare('remindersent',$this->remindersent,true);
		$criteria->compare('remindercount',$this->remindercount);
		$criteria->compare('completed',$this->completed,true);
		$criteria->compare('usesleft',$this->usesleft);
		$criteria->compare('validfrom',$this->validfrom,true);
		$criteria->compare('validuntil',$this->validuntil,true);
		$criteria->compare('mpid',$this->mpid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tokens the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
