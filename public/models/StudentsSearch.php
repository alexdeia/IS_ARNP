<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Students;

/**
 * StudentsSearch represents the model behind the search form about `app\models\Students`.
 */
class StudentsSearch extends Students
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kurs1', 'kurs2', 'kurs3', 'kurs4', 'mag1', 'mag2', 'kurs_its4'], 'integer'],
            [['group'], 'safe'],
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
        $query = Students::find();

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
            'kurs1' => $this->kurs1,
            'kurs2' => $this->kurs2,
            'kurs3' => $this->kurs3,
            'kurs4' => $this->kurs4,
            'mag1' => $this->mag1,
            'mag2' => $this->mag2,
            'kurs_its4' => $this->kurs_its4,
        ]);

        $query->andFilterWhere(['like', 'group', $this->group]);

        return $dataProvider;
    }
}
