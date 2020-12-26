<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'Emp_name')->textInput(['maxlength' => true]) ?>

    <?=
   $form->field($model, 'Birth_Date')->widget(DatePicker::className(), [
    'language' => 'id',

      'clientOptions' => [

        'format' => 'yyyy-mm-dd',
        'disableEntry'=>true
      ],
    'options' => [
      'readonly' => true,
    ]
]); ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
