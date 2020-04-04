<?php


class ItemForm extends CFormModel
{
    public $id;
    public $name;
    public $item_code;
    public $description;
    public $cat_code;
    public $sup_code;
    public $price;
    public $qty_stock;

    public function rules()
    {
        return array(
            array('item_code, name, description, cat_code, price, qty_stock', 'required'),
            array('sup_code, id', 'safe')
        );
    }

    public function attributeLabels()
    {
        return array(
            'item_code' => 'Kode Barcode',
            'name' => 'Nama Barang',
            'cat_code' => 'Kelompok Barang',
            'sup_code' => 'Supplier',
            'price' => 'Harga',
            'qty_stock' => 'Stok',
            'description' => 'Deskripsi'
        );
    }

    public function save()
    {
        $this->price = str_replace(',','',$this->price);
        if ($this->validate())
        {
            if (!empty($this->id)) {
                $item = ItemCustom::model()->findByPk($this->id);
                $item->attributes = $this->attributes;
                $item->updated_at = new CDbExpression('NOW()');
                $item->updated_by = Yii::app()->user->getName();
                if ($item->update(array('item_code','name','description','cat_code','price','qty_stock','updated_at','updated_by'))) {
                    return true;
                } else {
                    $this->addErrors($item->getErrors());
                }
            }
            else {
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
                    $this->addErrors($item->getErrors());
                }
            }

        }
        else {
            var_dump($this->getErrors());
        }
    }
}