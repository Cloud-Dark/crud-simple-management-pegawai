<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bonus".
 *
 * @property int $kd_bonus
 * @property string $Emp_code
 * @property int $Month
 * @property int $Year
 * @property int $Salary
 * @property int $Bonus
 * @property int $Total
 */
class Bonus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bonus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Emp_code', 'Month', 'Year', 'Salary'], 'required'],
            [['Month', 'Year', 'Salary', 'Bonus', 'Total'], 'integer'],
            [['Emp_code'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_bonus' => 'Kd Bonus',
            'Emp_code' => 'Emp Code',
            'Month' => 'Month',
            'Year' => 'Year',
            'Salary' => 'Salary',
            'Bonus' => 'Bonus',
            'Total' => 'Total',
        ];
    }
}
