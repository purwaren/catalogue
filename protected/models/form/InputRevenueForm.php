<?php

/**
 * Created by PhpStorm.
 * User: purwa
 * Date: 04/09/16
 * Time: 19:26
 */
class InputRevenueForm extends CFormModel
{
    public $tgl_bon;
    public $koper;
    public $keterangan;
    public $nominal;

    public function rules()
    {
        return array(
            array('tgl_bon,koper,keterangan,nominal','required')
        );
    }

    public function attributeLabels()
    {
        return array(
            'tgl_bon' => 'Tanggal Bon',
            'koper' => 'Kode Perkiraan',
            'keterangan' => 'Keterangan',
            'nominal' => 'Nominal'
        );
    }
}