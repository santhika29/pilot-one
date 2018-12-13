<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "rekap_biaya".
 *
 * @property integer $rekap_biaya_id
 * @property string $Kode_Mitra
 * @property integer $NIK
 * @property string $Nama
 * @property string $Loker
 * @property string $Band
 * @property string $Nikkes
 * @property string $Nama_Pasien
 * @property integer $Dokter
 * @property string $Tgl_Masuk
 * @property string $Tgl_Keluar
 * @property string $ICDX
 * @property integer $Kode_Biaya
 * @property integer $Jasa_Dokter
 * @property integer $KB_KIA
 * @property integer $Jasa_Dokter_Gigi
 * @property integer $Jasa_Dokter_Spe
 * @property integer $UGD
 * @property integer $Tindakan_Medis
 * @property integer $Obat_Bhn_Obat
 * @property integer $Alkes
 * @property integer $Pem_Penunjang
 * @property integer $Kamar
 * @property integer $Kamar_Operasi
 * @property integer $Ruang_Perwtn_Khusus
 * @property integer $Kacamata_dan_Alat_Rehab
 * @property integer $Biaya_Adm_Lainnya
 * @property integer $PPH
 * @property integer $Kunj_UMUM
 * @property integer $Kunj_GIGI
 * @property integer $Kunj_KBKIA
 * @property integer $MATKES
 * @property integer $CS
 * @property integer $Total
 * @property string $bulan_tagihan
 * @property integer $tahun_tagihan
 * @property string $dx_group
 * @property string $top_six
 * @property string $kota_rawat
 * @property string $sakit
 * @property string $status
 * @property integer $bulan_rawat
 * @property integer $tahun_rawat
 * @property string $kode_rawat
 * @property integer $kunjungan
 */
class RekapBiaya extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            #''
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NIK', 'Dokter', 'Kode_Biaya', 'Jasa_Dokter', 'KB_KIA', 'Jasa_Dokter_Gigi', 'Jasa_Dokter_Spe', 'UGD', 'Tindakan_Medis', 'Obat_Bhn_Obat', 'Alkes', 'Pem_Penunjang', 'Kamar', 'Kamar_Operasi', 'Ruang_Perwtn_Khusus', 'Kacamata_dan_Alat_Rehab', 'Biaya_Adm_Lainnya', 'PPH', 'Kunj_UMUM', 'Kunj_GIGI', 'Kunj_KBKIA', 'MATKES', 'CS', 'Total', 'tahun_tagihan', 'bulan_rawat', 'tahun_rawat', 'kunjungan'], 'required'],
            [['NIK', 'Dokter', 'Kode_Biaya', 'Jasa_Dokter', 'KB_KIA', 'Jasa_Dokter_Gigi', 'Jasa_Dokter_Spe', 'UGD', 'Tindakan_Medis', 'Obat_Bhn_Obat', 'Alkes', 'Pem_Penunjang', 'Kamar', 'Kamar_Operasi', 'Ruang_Perwtn_Khusus', 'Kacamata_dan_Alat_Rehab', 'Biaya_Adm_Lainnya', 'PPH', 'Kunj_UMUM', 'Kunj_GIGI', 'Kunj_KBKIA', 'MATKES', 'CS', 'Total', 'tahun_tagihan', 'bulan_rawat', 'tahun_rawat', 'kunjungan'], 'integer'],
            [['Tgl_Masuk', 'Tgl_Keluar'], 'safe'],
            [['Kode_Mitra', 'Loker', 'Band', 'ICDX', 'bulan_tagihan', 'kota_rawat', 'sakit', 'status'], 'string', 'max' => 5],
            [['Nama', 'Nama_Pasien'], 'string', 'max' => 100],
            [['Nikkes', 'top_six', 'kode_rawat'], 'string', 'max' => 12],
            [['dx_group'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rekap_biaya';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rekap_biaya_id' => 'Rekap Biaya ID',
            'Kode_Mitra' => 'Kode  Mitra',
            'NIK' => 'Nik',
            'Nama' => 'Nama',
            'Loker' => 'Loker',
            'Band' => 'Band',
            'Nikkes' => 'Nikkes',
            'Nama_Pasien' => 'Nama  Pasien',
            'Dokter' => 'Dokter',
            'Tgl_Masuk' => 'Tgl  Masuk',
            'Tgl_Keluar' => 'Tgl  Keluar',
            'ICDX' => 'Icdx',
            'Kode_Biaya' => 'Kode  Biaya',
            'Jasa_Dokter' => 'Jasa  Dokter',
            'KB_KIA' => 'Kb  Kia',
            'Jasa_Dokter_Gigi' => 'Jasa  Dokter  Gigi',
            'Jasa_Dokter_Spe' => 'Jasa  Dokter  Spe',
            'UGD' => 'Ugd',
            'Tindakan_Medis' => 'Tindakan  Medis',
            'Obat_Bhn_Obat' => 'Obat  Bhn  Obat',
            'Alkes' => 'Alkes',
            'Pem_Penunjang' => 'Pem  Penunjang',
            'Kamar' => 'Kamar',
            'Kamar_Operasi' => 'Kamar  Operasi',
            'Ruang_Perwtn_Khusus' => 'Ruang  Perwtn  Khusus',
            'Kacamata_dan_Alat_Rehab' => 'Kacamata Dan  Alat  Rehab',
            'Biaya_Adm_Lainnya' => 'Biaya  Adm  Lainnya',
            'PPH' => 'Pph',
            'Kunj_UMUM' => 'Kunj  Umum',
            'Kunj_GIGI' => 'Kunj  Gigi',
            'Kunj_KBKIA' => 'Kunj  Kbkia',
            'MATKES' => 'Matkes',
            'CS' => 'Cs',
            'Total' => 'Total',
            'bulan_tagihan' => 'Bulan Tagihan',
            'tahun_tagihan' => 'Tahun Tagihan',
            'dx_group' => 'Dx Group',
            'top_six' => 'Top Six',
            'kota_rawat' => 'Kota Rawat',
            'sakit' => 'Sakit',
            'status' => 'Status',
            'bulan_rawat' => 'Bulan Rawat',
            'tahun_rawat' => 'Tahun Rawat',
            'kode_rawat' => 'Kode Rawat',
            'kunjungan' => 'Kunjungan',
        ];
    }


    /**
     * @inheritdoc
     * @return \app\models\RekapBiayaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\RekapBiayaQuery(get_called_class());
    }
}
