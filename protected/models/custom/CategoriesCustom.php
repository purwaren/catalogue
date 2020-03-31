<?php
/**
 * Created by PhpStorm.
 * User: purwaren
 * Date: 12/25/18
 * Time: 8:11 AM
 */

class CategoriesCustom extends Categories {

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('code, name, created_by, created_at', 'required'),
            array('code', 'length', 'max'=>3),
            array('name', 'length', 'max'=>128),
            array('created_by', 'length', 'max'=>32),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, code, name, description, created_by, created_at', 'safe', 'on'=>'search'),
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
            'items' => array(self::HAS_MANY, 'Item', 'cat_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'code' => 'Kode',
            'name' => 'Nama',
            'description' => 'Keterangan',
            'created_by' => 'Dibuat Oleh',
            'created_at' => 'Dibuat Pada',
        );
    }

   public function tableName()
   {
       return parent::tableName(); // TODO: Change the autogenerated stub
   }

   public static function model($className = __CLASS__)
   {
       return parent::model($className); // TODO: Change the autogenerated stub
   }

   public static function getAllCategoryOptions() {
        $criteria = new CDbCriteria();
        $criteria->order = 'code ASC';

        $models = self::model()->findAll($criteria);
        $options = array();
        foreach ($models as $model) {
            $options[$model->code] = $model->code.' ('.strtoupper($model->name).')';
        }
        return $options;
   }
}