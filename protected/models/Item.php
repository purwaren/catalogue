<?php

/**
 * This is the model class for table "item".
 *
 * The followings are the available columns in table 'item':
 * @property integer $id
 * @property string $item_code
 * @property string $name
 * @property string $description
 * @property string $cat_code
 * @property string $cat_name
 * @property string $sup_code
 * @property string $sup_name
 * @property string $price
 * @property integer $qty_stock
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 */
class Item extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_code, cat_code, price, qty_stock, created_by', 'required'),
			array('qty_stock', 'numerical', 'integerOnly'=>true),
			array('item_code', 'length', 'max'=>16),
			array('name, cat_name, sup_name', 'length', 'max'=>128),
			array('cat_code, sup_code', 'length', 'max'=>8),
			array('price', 'length', 'max'=>19),
			array('created_by, updated_by', 'length', 'max'=>32),
			array('description, created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, item_code, name, description, cat_code, cat_name, sup_code, sup_name, price, qty_stock, created_by, created_at, updated_by, updated_at', 'safe', 'on'=>'search'),
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
			'item_code' => 'Item Code',
			'name' => 'Name',
			'description' => 'Description',
			'cat_code' => 'Cat Code',
			'cat_name' => 'Cat Name',
			'sup_code' => 'Sup Code',
			'sup_name' => 'Sup Name',
			'price' => 'Price',
			'qty_stock' => 'Qty Stock',
			'created_by' => 'Created By',
			'created_at' => 'Created At',
			'updated_by' => 'Updated By',
			'updated_at' => 'Updated At',
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
		$criteria->compare('item_code',$this->item_code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('cat_code',$this->cat_code,true);
		$criteria->compare('cat_name',$this->cat_name,true);
		$criteria->compare('sup_code',$this->sup_code,true);
		$criteria->compare('sup_name',$this->sup_name,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('qty_stock',$this->qty_stock);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Item the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
