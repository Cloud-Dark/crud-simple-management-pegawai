<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Employee;
use app\models\Salary;
use app\models\Bonus;

/**
 * ReportSearch represents the model behind the search form of `app\models\Employee`.
 */
class ReportSearch extends Employee
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Emp_code'], 'integer'],
            [['Emp_name', 'Birth_Date', 'Address'], 'safe'],
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
        $query = Employee::find();
        $query = Salary::find();
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
            'Emp_name' => $this->Emp_name,
            'Birth_Date' => $this->Birth_Date,
        ]);

        $query->andFilterWhere(['like', 'Emp_name', $this->Emp_name])
            ->andFilterWhere(['like', 'Address', $this->Address]);

        return $dataProvider;
    }
}
