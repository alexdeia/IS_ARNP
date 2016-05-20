<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Leadmagbak */

$this->title = 'Редактировать руководителя: ' . $model->leader;
$this->params['breadcrumbs'][] = ['label' => 'Руководство магистрами', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->leader, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="leadmagbak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
