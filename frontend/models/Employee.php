<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property string $Emp_code
 * @property string $Emp_name
 * @property string $Birth_Date
 * @property string $Address
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Emp_name', 'Birth_Date', 'Address'], 'required'],
            [['Birth_Date'], 'safe'],
            [['Emp_code'], 'string', 'max' => 12],
            [['Emp_name'], 'string', 'max' => 40],
            [['Address'], 'string', 'max' => 240],
            [['Emp_code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Emp_code' => 'Emp Code',
            'Emp_name' => 'Emp Name',
            'Birth_Date' => 'Birth Date',
            'Address' => 'Address',
        ];
    }
}
