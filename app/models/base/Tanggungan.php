<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "tanggungan".
 *
 * @property integer $tanggungan_id
 * @property integer $KODE
 * @property string $NIKKES
 * @property string $NIK_KK
 * @property string $NAMA
 * @property string $TGL_LAHIR
 * @property integer $NIK_PASANGAN
 * @property string $TANGGAL_AKHIR_TANGGUNGAN
 * @property string $HUBUNGANKEL
 * @property string $TPK
 * @property integer $AREA
 * @property string $NO_BPJS
 *
 * @property \app\models\Peserta $nIKKK
 */
class Tanggungan extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'nIKKK'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['KODE', 'NIK_PASANGAN', 'AREA'], 'required'],
            [['KODE', 'NIK_PASANGAN', 'AREA'], 'integer'],
            [['TGL_LAHIR', 'TANGGAL_AKHIR_TANGGUNGAN'], 'safe'],
            [['NIKKES', 'NIK_KK'], 'string', 'max' => 12],
            [['NAMA', 'TPK'], 'string', 'max' => 45],
            [['HUBUNGANKEL', 'NO_BPJS'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tanggungan';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tanggungan_id' => 'Tanggungan ID',
            'KODE' => 'Kode',
            'NIKKES' => 'Nikkes',
            'NIK_KK' => 'Nik  Kk',
            'NAMA' => 'Nama',
            'TGL_LAHIR' => 'Tgl  Lahir',
            'NIK_PASANGAN' => 'Nik  Pasangan',
            'TANGGAL_AKHIR_TANGGUNGAN' => 'Tanggal  Akhir  Tanggungan',
            'HUBUNGANKEL' => 'Hubungankel',
            'TPK' => 'Tpk',
            'AREA' => 'Area',
            'NO_BPJS' => 'No  Bpjs',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNIKKK()
    {
        return $this->hasOne(\app\models\Peserta::className(), ['NIK' => 'NIK_KK']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\TanggunganQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\TanggunganQuery(get_called_class());
    }
}
