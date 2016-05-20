<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Discipline */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="discipline-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_id')->textInput() ?>

    <?= $form->field($model, 'lectures')->textInput() ?>

    <?= $form->field($model, 'groups_sem')->textInput() ?>

    <?= $form->field($model, 'hours_on_group_sem')->textInput() ?>

    <?= $form->field($model, 'groups_lr')->textInput() ?>

    <?= $form->field($model, 'hours_on_group_lr')->textInput() ?>

    <?= $form->field($model, 'cons_ekz')->textInput() ?>

    <?= $form->field($model, 'lead_krkp')->textInput() ?>

    <?= $form->field($model, 'dz_ref')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
