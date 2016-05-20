<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $model app\models\Otherdata */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ставки и нагрузка', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otherdata-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php echo Alert::widget([
        'options' => [
            'class' => 'alert-warning'
        ],
        'body' => '<b>Внимание!</b> Редактирование ставок и часов производить в созданной строке (с ID = 1). <br>
                Дробные числа записываются через <b>точку</b>.'
    ]); ?>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'lead_aspir',
            'all_kaf',
            'stavok',
        ],
    ]) ?>

</div>
