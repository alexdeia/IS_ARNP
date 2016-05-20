<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Leadmagbak */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="leadmagbak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'leader')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kit11')->textInput() ?>

    <?= $form->field($model, 'kit21')->textInput() ?>

    <?= $form->field($model, 'p4243')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
