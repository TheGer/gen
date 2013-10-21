<?php

/**
 * This is the model class for table "opthalmologicaltonometrytest".
 *
 * The followings are the available columns in table 'opthalmologicaltonometrytest':
 * @property integer $id
 * @property integer $testid
 * @property string $eye
 * @property string $vocalaudiogram
 * @property double $vocalvpp40
 * @property double $vocalvmf40
 * @property double $vocalvff40
 * @property string $tonalaudiogram
 * @property double $tonal250
 * @property double $tonal500
 * @property double $tonal1000
 * @property double $tonal2000
 * @property double $tonal3000
 * @property double $tonal4000
 * @property double $tonal6000
 * @property double $tonal8000
 * @property string $otospontanic
 * @property string $otoprovoced
 * @property string $otodistortionproducts
 *
 * The followings are the available model relations:
 * @property Patientopthalmologicaldata $test
 */
class Opthalmologicaltonometrytest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opthalmologicaltonometrytest the static model class
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
		return 'opthalmologicaltonometrytest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('testid, eye', 'required'),
			array('testid', 'numerical', 'integerOnly'=>true),
			array('vocalvpp40, vocalvmf40, vocalvff40, tonal250, tonal500, tonal1000, tonal2000, tonal3000, tonal4000, tonal6000, tonal8000', 'numerical'),
			array('eye', 'length', 'max'=>5),
			array('vocalaudiogram, tonalaudiogram, otospontanic, otoprovoced, otodistortionproducts', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, testid, eye, vocalaudiogram, vocalvpp40, vocalvmf40, vocalvff40, tonalaudiogram, tonal250, tonal500, tonal1000, tonal2000, tonal3000, tonal4000, tonal6000, tonal8000, otospontanic, otoprovoced, otodistortionproducts', 'safe', 'on'=>'search'),
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
			'test' => array(self::BELONGS_TO, 'Patientopthalmologicaldata', 'testid'),
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
			'eye' => 'Eye',
			'vocalaudiogram' => 'Vocal audiogram',
			'vocalvpp40' => 'Vocalvpp40',
			'vocalvmf40' => 'Vocalvmf40',
			'vocalvff40' => 'Vocalvff40',
			'tonalaudiogram' => 'Tonal audiogram',
			'tonal250' => 'Tonal250',
			'tonal500' => 'Tonal500',
			'tonal1000' => 'Tonal1000',
			'tonal2000' => 'Tonal2000',
			'tonal3000' => 'Tonal3000',
			'tonal4000' => 'Tonal4000',
			'tonal6000' => 'Tonal6000',
			'tonal8000' => 'Tonal8000',
			'otospontanic' => 'Spontanic',
			'otoprovoced' => 'Provoced',
			'otodistortionproducts' => 'Distortion products',
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
		$criteria->compare('eye',$this->eye,true);
		$criteria->compare('vocalaudiogram',$this->vocalaudiogram,true);
		$criteria->compare('vocalvpp40',$this->vocalvpp40);
		$criteria->compare('vocalvmf40',$this->vocalvmf40);
		$criteria->compare('vocalvff40',$this->vocalvff40);
		$criteria->compare('tonalaudiogram',$this->tonalaudiogram,true);
		$criteria->compare('tonal250',$this->tonal250);
		$criteria->compare('tonal500',$this->tonal500);
		$criteria->compare('tonal1000',$this->tonal1000);
		$criteria->compare('tonal2000',$this->tonal2000);
		$criteria->compare('tonal3000',$this->tonal3000);
		$criteria->compare('tonal4000',$this->tonal4000);
		$criteria->compare('tonal6000',$this->tonal6000);
		$criteria->compare('tonal8000',$this->tonal8000);
		$criteria->compare('otospontanic',$this->otospontanic,true);
		$criteria->compare('otoprovoced',$this->otoprovoced,true);
		$criteria->compare('otodistortionproducts',$this->otodistortionproducts,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}