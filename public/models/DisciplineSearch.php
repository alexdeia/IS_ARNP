<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Discipline;

/**
 * DisciplineSearch represents the model behind the search form about `app\models\Discipline`.
 */
class DisciplineSearch extends Discipline
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'teacher_id', 'lectures', 'groups_sem', 'hours_on_group_sem', 'groups_lr', 'hours_on_group_lr', 'cons_ekz', 'lead_krkp', 'dz_ref'], 'integer'],
            [['name'], 'safe'],
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
        $query = Discipline::find();

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
            'teacher_id' => $this->teacher_id,
            'lectures' => $this->lectures,
            'groups_sem' => $this->groups_sem,
            'hours_on_group_sem' => $this->hours_on_group_sem,
            'groups_lr' => $this->groups_lr,
            'hours_on_group_lr' => $this->hours_on_group_lr,
            'cons_ekz' => $this->cons_ekz,
            'lead_krkp' => $this->lead_krkp,
            'dz_ref' => $this->dz_ref,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
