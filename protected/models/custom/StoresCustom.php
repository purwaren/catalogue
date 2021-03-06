<?php
/**
 * Created by PhpStorm.
 * User: purwaren
 * Date: 12/25/18
 * Time: 8:08 AM
 */
class StoresCustom extends Stores {

    public $qty;
    public $offer_id;

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'code' => 'Kode',
            'name' => 'Nama',
            'alias' => 'Alias',
            'address' => 'Alamat',
            'supervisor_id' => 'Supervisor',
            'flag_delete' => 'Flag Delete',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'ig_account' => 'Akun Instagram',
            'phone' => 'Whatsapp'
        );
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('code, name, alias, address, flag_delete', 'required'),
            array('flag_delete', 'numerical', 'integerOnly'=>true),
            array('code, name, alias, address, supervisor_id, ig_account', 'length', 'max'=>128),
            array('created_by, area, phone', 'length', 'max'=>32),
            array('created_at', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, code, name, alias, address, supervisor_id, flag_delete, created_by, created_at, area, phone, ig_account', 'safe', 'on'=>'search'),
        );
    }

    public function searchActiveStore() {
        $criteria=new CDbCriteria;

        $criteria->compare('flag_delete', EFlag::FLAG_INACTIVE);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>50
            ),
            'sort'=>array(
                'defaultOrder'=>'area ASC'
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

    public static function getAllStoreOptions() {
        $criteria = new CDbCriteria();
        $criteria->order = 'name';
        $model = self::model()->findAll($criteria);
        $options = array();
        if (!empty($model)) {
            foreach ($model as $row) {
                $options[$row->id] = $row->name;
            }
        }
        return $options;
    }
}