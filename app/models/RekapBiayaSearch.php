<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RekapBiaya;

/**
 * app\models\RekapBiayaSearch represents the model behind the search form about `app\models\RekapBiaya`.
 */
 class RekapBiayaSearch extends RekapBiaya
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rekap_biaya_id', 'NIK', 'Dokter', 'Kode_Biaya', 'Jasa_Dokter', 'KB_KIA', 'Jasa_Dokter_Gigi', 'Jasa_Dokter_Spe', 'UGD', 'Tindakan_Medis', 'Obat_Bhn_Obat', 'Alkes', 'Pem_Penunjang', 'Kamar', 'Kamar_Operasi', 'Ruang_Perwtn_Khusus', 'Kacamata_dan_Alat_Rehab', 'Biaya_Adm_Lainnya', 'PPH', 'Kunj_UMUM', 'Kunj_GIGI', 'Kunj_KBKIA', 'MATKES', 'CS', 'Total', 'tahun_tagihan', 'bulan_rawat', 'tahun_rawat', 'kunjungan'], 'integer'],
            [['Kode_Mitra', 'Nama', 'Loker', 'Band', 'Nikkes', 'Nama_Pasien', 'Tgl_Masuk', 'Tgl_Keluar', 'ICDX', 'bulan_tagihan', 'dx_group', 'top_six', 'kota_rawat', 'sakit', 'status', 'kode_rawat'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = RekapBiaya::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'rekap_biaya_id' => $this->rekap_biaya_id,
            'NIK' => $this->NIK,
            'Dokter' => $this->Dokter,
            'Tgl_Masuk' => $this->Tgl_Masuk,
            'Tgl_Keluar' => $this->Tgl_Keluar,
            'Kode_Biaya' => $this->Kode_Biaya,
            'Jasa_Dokter' => $this->Jasa_Dokter,
            'KB_KIA' => $this->KB_KIA,
            'Jasa_Dokter_Gigi' => $this->Jasa_Dokter_Gigi,
            'Jasa_Dokter_Spe' => $this->Jasa_Dokter_Spe,
            'UGD' => $this->UGD,
            'Tindakan_Medis' => $this->Tindakan_Medis,
            'Obat_Bhn_Obat' => $this->Obat_Bhn_Obat,
            'Alkes' => $this->Alkes,
            'Pem_Penunjang' => $this->Pem_Penunjang,
            'Kamar' => $this->Kamar,
            'Kamar_Operasi' => $this->Kamar_Operasi,
            'Ruang_Perwtn_Khusus' => $this->Ruang_Perwtn_Khusus,
            'Kacamata_dan_Alat_Rehab' => $this->Kacamata_dan_Alat_Rehab,
            'Biaya_Adm_Lainnya' => $this->Biaya_Adm_Lainnya,
            'PPH' => $this->PPH,
            'Kunj_UMUM' => $this->Kunj_UMUM,
            'Kunj_GIGI' => $this->Kunj_GIGI,
            'Kunj_KBKIA' => $this->Kunj_KBKIA,
            'MATKES' => $this->MATKES,
            'CS' => $this->CS,
            'Total' => $this->Total,
            'tahun_tagihan' => $this->tahun_tagihan,
            'bulan_rawat' => $this->bulan_rawat,
            'tahun_rawat' => $this->tahun_rawat,
            'kunjungan' => $this->kunjungan,
        ]);

        $query->andFilterWhere(['like', 'Kode_Mitra', $this->Kode_Mitra])
            ->andFilterWhere(['like', 'Nama', $this->Nama])
            ->andFilterWhere(['like', 'Loker', $this->Loker])
            ->andFilterWhere(['like', 'Band', $this->Band])
            ->andFilterWhere(['like', 'Nikkes', $this->Nikkes])
            ->andFilterWhere(['like', 'Nama_Pasien', $this->Nama_Pasien])
            ->andFilterWhere(['like', 'ICDX', $this->ICDX])
            ->andFilterWhere(['like', 'bulan_tagihan', $this->bulan_tagihan])
            ->andFilterWhere(['like', 'dx_group', $this->dx_group])
            ->andFilterWhere(['like', 'top_six', $this->top_six])
            ->andFilterWhere(['like', 'kota_rawat', $this->kota_rawat])
            ->andFilterWhere(['like', 'sakit', $this->sakit])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'kode_rawat', $this->kode_rawat]);

        return $dataProvider;
    }
}
