<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Leadmagbak */

$this->title = $model->leader;
$this->params['breadcrumbs'][] = ['label' => 'Руководство магистрами', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leadmagbak-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'leader',
            'kit11',
            'kit21',
            'p4243',
        ],
    ]) ?>

</div>
