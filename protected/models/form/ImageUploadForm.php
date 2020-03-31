<?php

/**
 * Class ImageUploadForm
 */
class ImageUploadForm extends CFormModel
{
    public $id;
    public $item_id;
    public $image;
    public $filename;
    public $location;

    public function rules()
    {
        return array(
            array('item_id', 'required'),
            array('item_id, image', 'safe')
        );
    }

    public function save() {
        $this->image = CUploadedFile::getInstanceByName('file_data');
        $this->filename = 'img_'.date('YmdHis').'_'.rand(100, 9999).'.'.$this->image->extensionName;
        $this->location = $this->getPath().'/'.$this->filename;
        $original_name = $this->image->name;
        if ($this->image->saveAs($this->location)) {
            $images = new Images();
            $images->item_id = $this->item_id;
            $images->filename = $original_name;
            $images->location = $this->location;
            $images->created_by = Yii::app()->user->getName();
            $images->created_at = new CDbExpression('NOW()');
            if ($images->save()) {
                $this->id = $images->id;
                return true;
            }
        }
    }

    private function getPath()
    {
        if (!is_dir(Yii::app()->params['imagePath'])) {
            mkdir(Yii::app()->params['imagePath'],'0777', true);
        }
        $path = Yii::app()->params['imagePath'].date('Y-m-d');
        if (!is_dir($path)) {
            mkdir($path, '0777', true);
        }
        return $path;
    }
}