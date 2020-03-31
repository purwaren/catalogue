<?php

/**
 * This is the model class for table "stores".
 *
 * The followings are the available columns in table 'stores':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $alias
 * @property string $address
 * @property string $supervisor_id
 * @property integer $flag_delete
 * @property string $created_by
 * @property string $created_at
 * @property string $area
 */
class Stores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name, alias, address, flag_delete', 'required'),
			array('flag_delete', 'numerical', 'integerOnly'=>true),
			array('code, name, alias, address, supervisor_id', 'length', 'max'=>128),
			array('created_by, area', 'length', 'max'=>32),
			array('created_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, code, name, alias, address, supervisor_id, flag_delete, created_by, created_at, area', 'safe', 'on'=>'search'),
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
			'code' => 'Code',
			'name' => 'Name',
			'alias' => 'Alias',
			'address' => 'Address',
			'supervisor_id' => 'Supervisor',
			'flag_delete' => 'Flag Delete',
			'created_by' => 'Created By',
			'created_at' => 'Created At',
			'area' => 'Area',
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('supervisor_id',$this->supervisor_id,true);
		$criteria->compare('flag_delete',$this->flag_delete);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('area',$this->area,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>array(
                'defaultOrder'=>'alias'
            )
		));
	}


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Stores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
