<?php

namespace app\models;

use Yii;
use \app\models\base\Peserta as BasePeserta;

/**
 * This is the model class for table "peserta".
 */
class Peserta extends BasePeserta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['NIK', 'NAMA', 'YAKES_AREA'], 'required'],
            [['TGL_LAHIR', 'TGL_PENSIUN', 'TGL_MENINGGAL'], 'safe'],
            [['YAKES_AREA'], 'integer'],
            [['NIK'], 'string', 'max' => 12],
            [['NAMA'], 'string', 'max' => 75],
            [['ALAMAT_RUMAH', 'KLAS_POSISI'], 'string', 'max' => 255],
            [['KOTA_RUMAH'], 'string', 'max' => 50],
            [['BAND_POSISI'], 'string', 'max' => 5],
            [['vDIVISI', 'LOKASI_KERJA'], 'string', 'max' => 45],
            [['PERSONALSUBAREA'], 'string', 'max' => 25]
        ]);
    }
	
}
