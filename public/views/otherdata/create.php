<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Otherdata */

$this->title = 'Создать строку с данными';
$this->params['breadcrumbs'][] = ['label' => 'Ставки и нагрузка', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otherdata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
