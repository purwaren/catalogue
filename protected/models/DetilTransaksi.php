<?php

/**
 * This is the model class for table "detil_transaksi".
 *
 * The followings are the available columns in table 'detil_transaksi':
 * @property integer $id
 * @property integer $id_transaksi
 * @property string $koper
 * @property string $tipe
 * @property double $jumlah
 * @property double $saldo
 * @property string $keterangan
 *
 * The followings are the available model relations:
 * @property Perkiraan $koper0
 * @property Transaksi $idTransaksi
 */
class DetilTransaksi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detil_transaksi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_transaksi, koper, tipe, jumlah, saldo, keterangan', 'required'),
			array('id_transaksi', 'numerical', 'integerOnly'=>true),
			array('jumlah, saldo', 'numerical'),
			array('koper', 'length', 'max'=>32),
			array('tipe', 'length', 'max'=>1),
			array('keterangan', 'length', 'max'=>512),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_transaksi, koper, tipe, jumlah, saldo, keterangan', 'safe', 'on'=>'search'),
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
			'koper0' => array(self::BELONGS_TO, 'Perkiraan', 'koper'),
			'idTransaksi' => array(self::BELONGS_TO, 'Transaksi', 'id_transaksi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_transaksi' => 'Id Transaksi',
			'koper' => 'Koper',
			'tipe' => 'Tipe',
			'jumlah' => 'Jumlah',
			'saldo' => 'Saldo',
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
		$criteria->compare('id_transaksi',$this->id_transaksi);
		$criteria->compare('koper',$this->koper,true);
		$criteria->compare('tipe',$this->tipe,true);
		$criteria->compare('jumlah',$this->jumlah);
		$criteria->compare('saldo',$this->saldo);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetilTransaksi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
