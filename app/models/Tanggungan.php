<?php

namespace app\models;

use Yii;
use \app\models\base\Tanggungan as BaseTanggungan;

/**
 * This is the model class for table "tanggungan".
 */
class Tanggungan extends BaseTanggungan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['KODE', 'NIK_PASANGAN', 'AREA'], 'required'],
            [['KODE', 'NIK_PASANGAN', 'AREA'], 'integer'],
            [['TGL_LAHIR', 'TANGGAL_AKHIR_TANGGUNGAN'], 'safe'],
            [['NIKKES', 'NIK_KK'], 'string', 'max' => 12],
            [['NAMA', 'TPK'], 'string', 'max' => 45],
            [['HUBUNGANKEL', 'NO_BPJS'], 'string', 'max' => 25]
        ]);
    }
	
}
