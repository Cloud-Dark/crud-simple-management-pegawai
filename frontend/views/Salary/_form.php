<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Employee;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Salary */
/* @var $form yii\widgets\ActiveForm */
$tahun=date ("Y");
?>

<div class="salary-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'emp_code')->widget(Select2::classname(), [

      'data' => array(
    ArrayHelper::map(Employee::find()->all(),'Emp_code','Emp_name'),
    ),
    'language' => 'id',

    // 'options' => ['placeholder' => 'Tulis Hari Disini'],
    'pluginOptions' => [
    'allowClear' => true
    ],
    ]);?>



      <?= $form->field($model, 'Month')->widget(Select2::classname(), [

        'data' => array(

        '1' => 'Januari',
        '2' => 'Februari',
        '3' => 'Maret',
        '4' => 'April',
        '5' => 'Mei',
        '6' => 'Juni',
        '7' => 'Juli',
        '8' => 'Agustus',
        '9' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember',


     ),
      'language' => 'id',

      // 'options' => ['placeholder' => 'Tulis Hari Disini'],
      'pluginOptions' => [
      'allowClear' => true
      ],
      ]);?>

    <?=$form->field($model, 'Year')->textInput(['maxlength' => true, 'value' => $tahun]) ?>

    <?= $form->field($model, 'Sallary')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
