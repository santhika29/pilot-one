<?php

namespace app\models;

use Yii;
use \app\models\base\RekapBiaya as BaseRekapBiaya;

/**
 * This is the model class for table "rekap_biaya".
 */
class RekapBiaya extends BaseRekapBiaya
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['NIK', 'Dokter', 'Kode_Biaya', 'Jasa_Dokter', 'KB_KIA', 'Jasa_Dokter_Gigi', 'Jasa_Dokter_Spe', 'UGD', 'Tindakan_Medis', 'Obat_Bhn_Obat', 'Alkes', 'Pem_Penunjang', 'Kamar', 'Kamar_Operasi', 'Ruang_Perwtn_Khusus', 'Kacamata_dan_Alat_Rehab', 'Biaya_Adm_Lainnya', 'PPH', 'Kunj_UMUM', 'Kunj_GIGI', 'Kunj_KBKIA', 'MATKES', 'CS', 'Total', 'tahun_tagihan', 'bulan_rawat', 'tahun_rawat', 'kunjungan'], 'required'],
            [['NIK', 'Dokter', 'Kode_Biaya', 'Jasa_Dokter', 'KB_KIA', 'Jasa_Dokter_Gigi', 'Jasa_Dokter_Spe', 'UGD', 'Tindakan_Medis', 'Obat_Bhn_Obat', 'Alkes', 'Pem_Penunjang', 'Kamar', 'Kamar_Operasi', 'Ruang_Perwtn_Khusus', 'Kacamata_dan_Alat_Rehab', 'Biaya_Adm_Lainnya', 'PPH', 'Kunj_UMUM', 'Kunj_GIGI', 'Kunj_KBKIA', 'MATKES', 'CS', 'Total', 'tahun_tagihan', 'bulan_rawat', 'tahun_rawat', 'kunjungan'], 'integer'],
            [['Tgl_Masuk', 'Tgl_Keluar'], 'safe'],
            [['Kode_Mitra', 'Loker', 'Band', 'ICDX', 'bulan_tagihan', 'kota_rawat', 'sakit', 'status'], 'string', 'max' => 5],
            [['Nama', 'Nama_Pasien'], 'string', 'max' => 100],
            [['Nikkes', 'top_six', 'kode_rawat'], 'string', 'max' => 12],
            [['dx_group'], 'string', 'max' => 255]
        ]);
    }
	
}
