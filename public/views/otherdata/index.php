<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Alert;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OtherdataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ставки и нагрузка';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otherdata-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php echo Alert::widget([
    'options' => [
    'class' => 'alert-warning'
    ],
    'body' => '<b>Внимание!</b> Редактирование ставок и часов производить в созданной строке (с ID = 1). <br>
                Дробные числа записываются через <b>точку</b>.'
    ]); ?>

    <p>
        <?= Html::a('Создать строку с данными', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'lead_aspir',
            'all_kaf',
            'stavok',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
