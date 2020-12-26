<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "salary".
 *
 * @property int $emp_code
 * @property int $Month
 * @property int $Year
 * @property int $Sallary
 */
class Salary extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'salary';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['emp_code', 'Month', 'Year', 'Sallary'], 'required'],
            [['emp_code', 'Month', 'Year', 'Sallary'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'emp_code' => 'Emp Code',
            'Month' => 'Month',
            'Year' => 'Year',
            'Sallary' => 'Sallary',
        ];
    }
}
