<?php


class ImagesCustom extends Images
{
    public function rules()
    {
        return parent::rules(); // TODO: Change the autogenerated stub
    }

    public function attributeLabels()
    {
        return parent::attributeLabels(); // TODO: Change the autogenerated stub
    }

    public function search()
    {
        return parent::search(); // TODO: Change the autogenerated stub
    }

    /**
     * @param string $className
     * @return ImagesCustom
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className); // TODO: Change the autogenerated stub
    }

    /**
     * @param $id
     * @return ImagesCustom[]
     */
    public function findAllByItemId($id) {
        $model = self::model()->findAllByAttributes(array('item_id'=>$id));
        $images = array();
        foreach ($model as $row)
        {
            $images[] = $row->attributes;
        }
        return $images;
    }
}