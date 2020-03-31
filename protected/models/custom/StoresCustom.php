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
            'code' => 'Code',
            'name' => 'Name',
            'alias' => 'Alias',
            'address' => 'Address',
            'supervisor_id' => 'Supervisor',
            'flag_delete' => 'Flag Delete',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'area' => 'Area',
        );
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('code, name, alias, address, flag_delete', 'required'),
            array('flag_delete', 'numerical', 'integerOnly'=>true),
            array('code, name, alias, address, supervisor_id', 'length', 'max'=>128),
            array('created_by, area', 'length', 'max'=>32),
            array('created_at, offer_id', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, code, name, alias, address, supervisor_id, flag_delete, created_by, created_at, area, offer_id', 'safe', 'on'=>'search'),
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

    public function searchForKabag() {
        $criteria = new CDbCriteria();
        $criteria->compare('area', Yii::app()->user->area);
        $criteria->compare('flag_delete', EFlag::FLAG_INACTIVE);
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria
        ));
    }

    public function searchForKabagDetail() {
        $criteria = new CDbCriteria();
        //$criteria->compare('area', Yii::app()->user->area);
        $criteria->compare('flag_delete', EFlag::FLAG_INACTIVE);
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'sort'=>array(
                'defaultOrder'=>'area ASC'
            ),
            'pagination'=>array(
                'pageSize'=>50
            ),
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
}