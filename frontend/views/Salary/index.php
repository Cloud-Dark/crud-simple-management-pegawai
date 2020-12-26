<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SalarySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Salaries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="salary-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Salary', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_salary',
            'emp_code',
            'Month',
            'Year',
            'Sallary',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
