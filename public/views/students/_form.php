<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Students */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kurs1')->textInput() ?>

    <?= $form->field($model, 'kurs2')->textInput() ?>

    <?= $form->field($model, 'kurs3')->textInput() ?>

    <?= $form->field($model, 'kurs4')->textInput() ?>

    <?= $form->field($model, 'mag1')->textInput() ?>

    <?= $form->field($model, 'mag2')->textInput() ?>

    <?= $form->field($model, 'kurs_its4')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
