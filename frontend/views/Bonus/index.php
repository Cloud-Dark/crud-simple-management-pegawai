<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Bonus;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BonusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bonuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bonus-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bonus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php
 $bulan =  date('m');
 if ($bulan == 01) {
   Yii::$app->db->createCommand()->truncateTable('bonus')->execute();
 }
 ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_bonus',
            'Emp_code',
            'Month',
            'Year',
            'Salary',
            //'Bonus',
            //'Total',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
