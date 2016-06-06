<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TeachersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Редактирование данных преподавателей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить преподавателя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'FIO',
            //'classes_subject',
            'lead_practice',
            'lead_krb',
            'lead_magist',
            'ped_practices',
            'job_gak',
            'jobs_zav_kaf',
            'lead_aspir',
            'stavka',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
