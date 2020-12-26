<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BonusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bonus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_bonus') ?>

    <?= $form->field($model, 'Emp_code') ?>

    <?= $form->field($model, 'Month') ?>

    <?= $form->field($model, 'Year') ?>

    <?= $form->field($model, 'Salary') ?>

    <?php // echo $form->field($model, 'Bonus') ?>

    <?php // echo $form->field($model, 'Total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
