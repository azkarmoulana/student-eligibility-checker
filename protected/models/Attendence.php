<?php

/**
 * This is the model class for table "attendence".
 *
 * The followings are the available columns in table 'attendence':
 * @property integer $attendenceid
 * @property integer $sid
 * @property integer $moduleid
 * @property integer $semester
 * @property string $date
 * @property integer $attendence
 */
class Attendence extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'attendence';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sid, moduleid, semester, date, attendence', 'required'),
			array('sid, moduleid, semester, attendence', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('attendenceid, sid, moduleid, semester, date, attendence', 'safe', 'on'=>'search'),
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
			'attendenceid' => 'Attendenceid',
			'sid' => 'Student ID',
			'moduleid' => 'Module Code',
			'semester' => 'Semester',
			'date' => 'Date',
			'attendence' => 'Attendence',
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

		$criteria->compare('attendenceid',$this->attendenceid);
		$criteria->compare('sid',$this->sid);
		$criteria->compare('moduleid',$this->moduleid);
		$criteria->compare('semester',$this->semester);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('attendence',$this->attendence);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Attendence the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
