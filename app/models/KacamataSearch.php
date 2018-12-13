<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RekapBiaya;

/**
 * app\models\KacamataSearch represents the model behind the search form about `app\models\RekapBiaya`.
 */
 class KacamataSearch extends RekapBiaya
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
        
        //$query->leftJoin('employee','rekap_biaya.NIK=employee.nik');
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->leftJoin('mitra','rekap_biaya.Kode_Mitra = mitra.kode_mitra')
            ->where(['NOT LIKE','mitra.kode_lokasi' , 'X%']);
        $query->andFilterWhere([
            'rekap_biaya_id' => $this->rekap_biaya_id,
            'NIK' => $this->NIK,
        ]);

        $query->andFilterWhere(['like', 'Nikkes', $this->Nikkes])
            ->andFilterWhere(['like', 'Nama_Pasien', $this->Nama_Pasien]);

        $query->andWhere(['>','Kacamata_dan_Alat_Rehab','0'])
            ->andWhere(['or',['ICDX'=>'h52'],['ICDX'=>'h53']]);
        if ($params == null){$query->andWhere(['=','rekap_biaya_id','0']);}
        return $dataProvider;
    }
}
