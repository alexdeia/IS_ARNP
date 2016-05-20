<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DisciplineSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="discipline-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'teacher_id') ?>

    <?= $form->field($model, 'lectures') ?>

    <?= $form->field($model, 'groups_sem') ?>

    <?php // echo $form->field($model, 'hours_on_group_sem') ?>

    <?php // echo $form->field($model, 'groups_lr') ?>

    <?php // echo $form->field($model, 'hours_on_group_lr') ?>

    <?php // echo $form->field($model, 'cons_ekz') ?>

    <?php // echo $form->field($model, 'lead_krkp') ?>

    <?php // echo $form->field($model, 'dz_ref') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
