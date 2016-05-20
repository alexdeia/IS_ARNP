<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Leadmagbak;

/**
 * LeadmagbakSearch represents the model behind the search form about `app\models\Leadmagbak`.
 */
class LeadmagbakSearch extends Leadmagbak
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kit11', 'kit21', 'p4243'], 'integer'],
            [['leader'], 'safe'],
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
        $query = Leadmagbak::find();

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
            'kit11' => $this->kit11,
            'kit21' => $this->kit21,
            'p4243' => $this->p4243,
        ]);

        $query->andFilterWhere(['like', 'leader', $this->leader]);

        return $dataProvider;
    }
}
