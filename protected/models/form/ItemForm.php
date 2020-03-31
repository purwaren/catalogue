<?php


class ItemForm extends CFormModel
{
    public $id;
    public $item_code;
    public $description;
    public $cat_code;
    public $sup_code;
    public $price;
    public $qty_stock;

    public function rules()
    {
        return array(
            array('item_code, description, cat_code, price, qty_stock', 'required'),
            array('sup_code', 'safe')
        );
    }

    public function attributeLabels()
    {
        return array(
            'item_code' => 'Kode Barcode',
            'cat_code' => 'Kelompok Barang',
            'sup_code' => 'Supplier',
            'price' => 'Harga',
            'qty_stock' => 'Stok',
            'description' => 'Deskripsi'
        );
    }

    public function save()
    {
        if ($this->validate())
        {
            $item = new ItemCustom();
            $item->attributes = $this->attributes;
            $item->created_at = new CDbExpression('NOW()');
            $item->created_by = Yii::app()->user->getName();
            if ($item->save())
            {
                $this->id = $item->id;
                return true;
            }
            else
            {
                var_dump($item->getErrors());die();
                $this->addErrors($item->getErrors());
            }
        }
        else {
            var_dump($this->getErrors());
        }
    }
}