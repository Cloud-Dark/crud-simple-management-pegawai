<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bonus;

/**
 * BonusSearch represents the model behind the search form of `app\models\Bonus`.
 */
class BonusSearch extends Bonus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_bonus', 'Month', 'Year', 'Salary', 'Bonus', 'Total'], 'integer'],
            [['Emp_code'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Bonus::find();

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
            'kd_bonus' => $this->kd_bonus,
            'Month' => $this->Month,
            'Year' => $this->Year,
            'Salary' => $this->Salary,
            'Bonus' => $this->Bonus,
            'Total' => $this->Total,
        ]);

        $query->andFilterWhere(['like', 'Emp_code', $this->Emp_code]);

        return $dataProvider;
    }
}
