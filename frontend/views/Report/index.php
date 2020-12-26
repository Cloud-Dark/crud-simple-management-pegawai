<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Report Gaji';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
      'dataProvider' => $dataProvider,
      'filterModel' => $searchModel,
      'responsiveWrap' => false,
      'hover' => true,
      // 'showPageSummary' => true,
      'pjax' => true,
      'striped' => true,
      'hover' => true,
      'panel' => ['type' => 'primary', 'heading' => 'Report Gaji'],
      'toggleDataContainer' => ['class' => 'btn-group mr-2'],
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            'Emp_code',
            [
                        'class' => 'kartik\grid\ActionColumn',
                        'header' => 'Pegawai',
                        'headerOptions' => ['style' => 'color:#337ab7'],
                        'template' => '{Selesai}{Belum_Selesai}{copy}',
                        'buttons' => [
                          'Selesai' => function ($url, $model) {
                            if($model->Month == '1'){
                              // $model->Bonus = $model->Salary*5/100;
                              // $model->Total = $model->Salary+$model->Bonus;
                              return $model->Emp_code;
                            }
                          },

                          'Belum_Selesai' => function ($url, $model) {
                            if($model->Month  != '1'){
                            return $model->Emp_code;

                            }
                          },
                        ],
                    ],
            'Month',
            'Year',
            'Salary',
            [
                        'class' => 'kartik\grid\ActionColumn',
                        'header' => 'Bonus',
                        'headerOptions' => ['style' => 'color:#337ab7'],
                        'template' => '{Selesai}{Belum_Selesai}{copy}',
                        'buttons' => [
                          'Selesai' => function ($url, $model) {
                            if($model->Month == '1'){
                              // $model->Bonus = $model->Salary*5/100;
                              // $model->Total = $model->Salary+$model->Bonus;
                              return '0';
                            }
                          },

                          'Belum_Selesai' => function ($url, $model) {
                            if($model->Month  != '1'){
                            return $model->Salary*5/100;

                            }
                          },
                        ],
                    ],
                    [
                                'class' => 'kartik\grid\ActionColumn',
                                'header' => 'Total',
                                'headerOptions' => ['style' => 'color:#337ab7'],
                                'template' => '{Selesai}{Belum_Selesai}{copy}',
                                'buttons' => [
                                  'Selesai' => function ($url, $model) {
                                    if($model->Month == '1'){
                                      // $model->Bonus = $model->Salary*5/100;
                                      // $model->Total = $model->Salary+$model->Bonus;
                                      return $model->Salary;
                                    }
                                  },

                                  'Belum_Selesai' => function ($url, $model) {
                                    if($model->Month  != '1'){
                                    return $model->Salary+$model->Bonus;

                                    }
                                  },
                                ],
                            ],
        ],
    ]); ?>


</div>
