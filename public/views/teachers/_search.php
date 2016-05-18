<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TeachersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'FIO') ?>

    <?= $form->field($model, 'classes_subject') ?>

    <?= $form->field($model, 'lead_practice') ?>

    <?= $form->field($model, 'lead_krb') ?>

    <?php // echo $form->field($model, 'lead_magist') ?>

    <?php // echo $form->field($model, 'ped_practices') ?>

    <?php // echo $form->field($model, 'job_gak') ?>

    <?php // echo $form->field($model, 'jobs_zav_kaf') ?>

    <?php // echo $form->field($model, 'lead_aspir') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
