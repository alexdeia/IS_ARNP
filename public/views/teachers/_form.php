<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Teachers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'FIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'classes_subject')->textInput() ?>

    <?= $form->field($model, 'lead_practice')->textInput() ?>

    <?= $form->field($model, 'lead_krb')->textInput() ?>

    <?= $form->field($model, 'lead_magist')->textInput() ?>

    <?= $form->field($model, 'ped_practices')->textInput() ?>

    <?= $form->field($model, 'job_gak')->textInput() ?>

    <?= $form->field($model, 'jobs_zav_kaf')->textInput() ?>

    <?= $form->field($model, 'lead_aspir')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
