<?php
/**
 * Created by PhpStorm.
 * User: purwaren
 * Date: 2019-03-24
 * Time: 17:56
 */

class CreateCategoryForm extends CFormModel
{
    public $id;
    public $cat_group;
    public $code;
    public $name;
    public $description;

    public function rules()
    {
        return array(
            array('code, name, cat_group', 'required'),
            array('code, name, description', 'safe')
        );
    }

    public function attributeLabels()
    {
        return array(
            'cat_group' => 'Group',
            'code' => 'Kode',
            'name' => 'Nama',
            'description' => 'Deskripsi'
        );
    }

    public function save()
    {
        if ($this->validate())
        {
            $model = new CategoriesCustom();
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

    public static function getAllGroupOptions() {
        return array(
            'A' => 'Pakaian Pria',
            'B' => 'Pakaian Wanita',
            'C' => 'Pakaian Anak-anak',
            'D' => 'Aksesoris',
            'E' => 'Dalaman dan Handuk'
        );
    }
}