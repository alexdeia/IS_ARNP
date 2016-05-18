<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Teachers;

/**
 * TeachersSearch represents the model behind the search form about `app\models\Teachers`.
 */
class TeachersSearch extends Teachers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'lead_krb', 'lead_magist', 'ped_practices', 'jobs_zav_kaf', 'lead_aspir'], 'integer'],
            [['FIO'], 'safe'],
            [['classes_subject', 'lead_practice', 'job_gak'], 'number'],
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
        $query = Teachers::find();

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
            'classes_subject' => $this->classes_subject,
            'lead_practice' => $this->lead_practice,
            'lead_krb' => $this->lead_krb,
            'lead_magist' => $this->lead_magist,
            'ped_practices' => $this->ped_practices,
            'job_gak' => $this->job_gak,
            'jobs_zav_kaf' => $this->jobs_zav_kaf,
            'lead_aspir' => $this->lead_aspir,
        ]);

        $query->andFilterWhere(['like', 'FIO', $this->FIO]);

        return $dataProvider;
    }
}
