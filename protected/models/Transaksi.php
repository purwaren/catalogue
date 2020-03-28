<?php

/**
 * This is the model class for table "transaksi".
 *
 * The followings are the available columns in table 'transaksi':
 * @property integer $id
 * @property string $no_input
 * @property string $tgl_input
 * @property string $tgl_bon
 * @property string $status
 * @property integer $timestamp_db
 * @property integer $id_user
 * @property integer $status_dana
 *
 * The followings are the available model relations:
 * @property DetilTransaksi[] $detilTransaksis
 * @property Users $idUser
 */
class Transaksi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_input, tgl_input, tgl_bon, status', 'required'),
			array('timestamp_db, id_user, status_dana', 'numerical', 'integerOnly'=>true),
			array('no_input', 'length', 'max'=>16),
			array('status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, no_input, tgl_input, tgl_bon, status, timestamp_db, id_user, status_dana', 'safe', 'on'=>'search'),
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
			'detilTransaksis' => array(self::HAS_MANY, 'DetilTransaksi', 'id_transaksi'),
			'idUser' => array(self::BELONGS_TO, 'Users', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'no_input' => 'No Input',
			'tgl_input' => 'Tgl Input',
			'tgl_bon' => 'Tgl Bon',
			'status' => 'Status',
			'timestamp_db' => 'Timestamp Db',
			'id_user' => 'Id User',
			'status_dana' => 'Status Dana',
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
		$criteria->compare('no_input',$this->no_input,true);
		$criteria->compare('tgl_input',$this->tgl_input,true);
		$criteria->compare('tgl_bon',$this->tgl_bon,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('timestamp_db',$this->timestamp_db);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('status_dana',$this->status_dana);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transaksi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
