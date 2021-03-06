<?php

/**
 * This is the model class for table "opthfundusphotographytestfile".
 *
 * The followings are the available columns in table 'opthfundusphotographytestfile':
 * @property integer $id
 * @property integer $testid
 * @property string $area
 * @property string $path
 * @property string $comment
 *
 * The followings are the available model relations:
 * @property Opthfundusphotographytest $test
 */
class Opthfundusphotographytestfile extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opthfundusphotographytestfile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'opthfundusphotographytestfile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('testid, area, path', 'required'),
			array('testid', 'numerical', 'integerOnly'=>true),
			array('area', 'length', 'max'=>8),
			array('path', 'length', 'max'=>50),
			array('comment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, testid, area, path, comment', 'safe', 'on'=>'search'),
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
			'test' => array(self::BELONGS_TO, 'Opthfundusphotographytest', 'testid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'testid' => 'Testid',
			'area' => 'Area',
			'path' => 'Path',
			'comment' => 'Comment',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('testid',$this->testid);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}