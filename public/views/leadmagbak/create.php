<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Leadmagbak */

$this->title = 'Добавить руководителя';
$this->params['breadcrumbs'][] = ['label' => 'Руководство магистрами', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leadmagbak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
