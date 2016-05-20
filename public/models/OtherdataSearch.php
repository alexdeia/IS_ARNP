<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Otherdata;

/**
 * OtherdataSearch represents the model behind the search form about `app\models\Otherdata`.
 */
class OtherdataSearch extends Otherdata
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'lead_aspir', 'all_kaf'], 'integer'],
            [['stavok'], 'number'],
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
        $query = Otherdata::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'lead_aspir' => $this->lead_aspir,
            'all_kaf' => $this->all_kaf,
            'stavok' => $this->stavok,
        ]);

        return $dataProvider;
    }
}
