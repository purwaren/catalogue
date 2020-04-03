<?php
/**
 * Created by PhpStorm.
 * User: purwaren
 * Date: 2019-03-24
 * Time: 18:01
 */

class CreateSupplierForm extends CFormModel
{
    public $id;
    public $code;
    public $name;
    public $address;
    public $type;
    public $phone;

    public function rules()
    {
        return array(
            array('code, name, type', 'required'),
            array('code, name, address, type, phone', 'safe')
        );
    }

    public function attributeLabels()
    {
        return array(
            'code' => 'Kode',
            'name' => 'Nama',
            'address' => 'Alamat',
            'type' => 'Tipe',
            'phone' => 'No. Telepon'
        );
    }

    public function save()
    {
        if ($this->validate())
        {
            $model = new SuppliersCustom();
            $model->attributes = $this->attributes;
            $model->created_by = Yii::app()->user->getName();
            $model->created_at = new CDbExpression('NOW()');
            if ($model->save()) {
                $this->id = $model->id;
                return true;
            }
            else {
                $this->addErrors($model->getErrors());
            }
        }
    }

    public static function getAllTypeOptions() {
        return array(
            'mean'=>'Medan',
            'luar medan'=> 'Luar Medan'
        );
    }
}