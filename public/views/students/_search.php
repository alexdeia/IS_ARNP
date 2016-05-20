<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'group') ?>

    <?= $form->field($model, 'kurs1') ?>

    <?= $form->field($model, 'kurs2') ?>

    <?= $form->field($model, 'kurs3') ?>

    <?php // echo $form->field($model, 'kurs4') ?>

    <?php // echo $form->field($model, 'mag1') ?>

    <?php // echo $form->field($model, 'mag2') ?>

    <?php // echo $form->field($model, 'kurs_its4') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
