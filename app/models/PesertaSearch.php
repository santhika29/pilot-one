<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Peserta;

/**
 * app\models\PesertaSearch represents the model behind the search form about `app\models\Peserta`.
 */
 class PesertaSearch extends Peserta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['peserta_id', 'YAKES_AREA'], 'integer'],
            [['NIK', 'NAMA', 'TGL_LAHIR', 'ALAMAT_RUMAH', 'KOTA_RUMAH', 'TGL_PENSIUN', 'BAND_POSISI', 'KLAS_POSISI', 'vDIVISI', 'LOKASI_KERJA', 'PERSONALSUBAREA', 'TGL_MENINGGAL'], 'safe'],
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
        $query = Peserta::find();

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
            'peserta_id' => $this->peserta_id,
            'TGL_LAHIR' => $this->TGL_LAHIR,
            'TGL_PENSIUN' => $this->TGL_PENSIUN,
            'YAKES_AREA' => $this->YAKES_AREA,
            'TGL_MENINGGAL' => $this->TGL_MENINGGAL,
        ]);

        $query->andFilterWhere(['like', 'NIK', $this->NIK])
            ->andFilterWhere(['like', 'NAMA', $this->NAMA])
            ->andFilterWhere(['like', 'ALAMAT_RUMAH', $this->ALAMAT_RUMAH])
            ->andFilterWhere(['like', 'KOTA_RUMAH', $this->KOTA_RUMAH])
            ->andFilterWhere(['like', 'BAND_POSISI', $this->BAND_POSISI])
            ->andFilterWhere(['like', 'KLAS_POSISI', $this->KLAS_POSISI])
            ->andFilterWhere(['like', 'vDIVISI', $this->vDIVISI])
            ->andFilterWhere(['like', 'LOKASI_KERJA', $this->LOKASI_KERJA])
            ->andFilterWhere(['like', 'PERSONALSUBAREA', $this->PERSONALSUBAREA]);

        return $dataProvider;
    }
}
