<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Salary */

$this->title = 'Update Salary: ' . $model->kd_salary;
$this->params['breadcrumbs'][] = ['label' => 'Salaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_salary, 'url' => ['view', 'id' => $model->kd_salary]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="salary-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
