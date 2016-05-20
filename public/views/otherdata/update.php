<?php

use yii\helpers\Html;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $model app\models\Otherdata */

$this->title = 'Редактировать данные: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ставки и нагрузка', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="otherdata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php echo Alert::widget([
        'options' => [
            'class' => 'alert-warning'
        ],
        'body' => '<b>Внимание!</b> Редактирование ставок и часов производить в созданной строке (с ID = 1). <br>
                Дробные числа записываются через <b>точку</b>.'
    ]); ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
