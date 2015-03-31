<?php

/**
 * This is the model class for table "currencies".
 *
 * The followings are the available columns in table 'currencies':
 * @property integer $id
 * @property string $chg_percent
 * @property string $change
 * @property string $name
 * @property string $price
 * @property string $symbol
 * @property string $ts
 * @property string $type
 * @property string $utctime
 * @property string $volume
 */
class Currencies extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'currencies';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('chg_percent, change, name, price, symbol, ts, type, utctime, volume', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, chg_percent, change, name, price, symbol, ts, type, utctime, volume', 'safe', 'on'=>'search'),
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
			'chg_percent' => 'Chg Percent',
			'change' => 'Change',
			'name' => 'Name',
			'price' => 'Price',
			'symbol' => 'Symbol',
			'ts' => 'Ts',
			'type' => 'Type',
			'utctime' => 'Utctime',
			'volume' => 'Volume',
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
		$criteria->compare('chg_percent',$this->chg_percent,true);
		$criteria->compare('change',$this->change,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('symbol',$this->symbol,true);
		$criteria->compare('ts',$this->ts,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('utctime',$this->utctime,true);
		$criteria->compare('volume',$this->volume,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Currencies the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
