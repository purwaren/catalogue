<?php

/**
 * This is the model class for table "perkiraan".
 *
 * The followings are the available columns in table 'perkiraan':
 * @property integer $id
 * @property string $nomor
 * @property double $saldo
 * @property string $nama
 * @property string $status
 * @property string $posisi
 * @property string $keterangan
 *
 * The followings are the available model relations:
 * @property DetilTransaksi[] $detilTransaksis
 */
class Perkiraan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'perkiraan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nomor, saldo, nama, status, posisi, keterangan', 'required'),
			array('saldo', 'numerical'),
			array('nomor', 'length', 'max'=>32),
			array('nama', 'length', 'max'=>128),
			array('status, posisi', 'length', 'max'=>1),
			array('keterangan', 'length', 'max'=>512),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nomor, saldo, nama, status, posisi, keterangan', 'safe', 'on'=>'search'),
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
			'detilTransaksis' => array(self::HAS_MANY, 'DetilTransaksi', 'koper'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nomor' => 'Nomor',
			'saldo' => 'Saldo',
			'nama' => 'Nama',
			'status' => 'Status',
			'posisi' => 'Posisi',
			'keterangan' => 'Keterangan',
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
		$criteria->compare('nomor',$this->nomor,true);
		$criteria->compare('saldo',$this->saldo);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('posisi',$this->posisi,true);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Perkiraan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
