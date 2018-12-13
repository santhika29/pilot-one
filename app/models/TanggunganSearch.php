<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tanggungan;

/**
 * app\models\TanggunganSearch represents the model behind the search form about `app\models\Tanggungan`.
 */
 class TanggunganSearch extends Tanggungan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tanggungan_id', 'KODE', 'NIK_PASANGAN', 'AREA'], 'integer'],
            [['NIKKES', 'NIK_KK', 'NAMA', 'TGL_LAHIR', 'TANGGAL_AKHIR_TANGGUNGAN', 'HUBUNGANKEL', 'TPK', 'NO_BPJS'], 'safe'],
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
        $query = Tanggungan::find();

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
            'tanggungan_id' => $this->tanggungan_id,
            'KODE' => $this->KODE,
            'TGL_LAHIR' => $this->TGL_LAHIR,
            'NIK_PASANGAN' => $this->NIK_PASANGAN,
            'TANGGAL_AKHIR_TANGGUNGAN' => $this->TANGGAL_AKHIR_TANGGUNGAN,
            'AREA' => $this->AREA,
        ]);

        $query->andFilterWhere(['like', 'NIKKES', $this->NIKKES])
            ->andFilterWhere(['like', 'NIK_KK', $this->NIK_KK])
            ->andFilterWhere(['like', 'NAMA', $this->NAMA])
            ->andFilterWhere(['like', 'HUBUNGANKEL', $this->HUBUNGANKEL])
            ->andFilterWhere(['like', 'TPK', $this->TPK])
            ->andFilterWhere(['like', 'NO_BPJS', $this->NO_BPJS]);

        return $dataProvider;
    }
}
