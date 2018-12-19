<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "peserta".
 *
 * @property integer $peserta_id
 * @property string $NIK
 * @property string $NAMA
 * @property string $TGL_LAHIR
 * @property string $ALAMAT_RUMAH
 * @property string $KOTA_RUMAH
 * @property string $TGL_PENSIUN
 * @property string $BAND_POSISI
 * @property string $KLAS_POSISI
 * @property string $vDIVISI
 * @property string $LOKASI_KERJA
 * @property string $PERSONALSUBAREA
 * @property integer $YAKES_AREA
 * @property string $TGL_MENINGGAL
 *
 * @property \app\models\Tanggungan $nIK
 * @property \app\models\Tanggungan[] $tanggungans
 */
class Peserta extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'nIK',
            'tanggungans'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peserta';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'peserta_id' => 'Peserta ID',
            'NIK' => 'Nik',
            'NAMA' => 'Nama',
            'TGL_LAHIR' => 'Tgl  Lahir',
            'ALAMAT_RUMAH' => 'Alamat  Rumah',
            'KOTA_RUMAH' => 'Kota  Rumah',
            'TGL_PENSIUN' => 'Tgl  Pensiun',
            'BAND_POSISI' => 'Band  Posisi',
            'KLAS_POSISI' => 'Klas  Posisi',
            'vDIVISI' => 'V Divisi',
            'LOKASI_KERJA' => 'Lokasi  Kerja',
            'PERSONALSUBAREA' => 'Personalsubarea',
            'YAKES_AREA' => 'Yakes  Area',
            'TGL_MENINGGAL' => 'Tgl  Meninggal',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNIK()
    {
        return $this->hasOne(\app\models\Tanggungan::className(), ['NIK_KK' => 'NIK']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTanggungans()
    {
        return $this->hasMany(\app\models\Tanggungan::className(), ['NIK_KK' => 'NIK']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\PesertaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PesertaQuery(get_called_class());
    }
}
