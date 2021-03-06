<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bonus */

$this->title = 'Update Bonus: ' . $model->kd_bonus;
$this->params['breadcrumbs'][] = ['label' => 'Bonuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_bonus, 'url' => ['view', 'id' => $model->kd_bonus]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bonus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
