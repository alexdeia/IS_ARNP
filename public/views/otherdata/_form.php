<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Otherdata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="otherdata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lead_aspir')->textInput() ?>

    <?= $form->field($model, 'all_kaf')->textInput() ?>

    <?= $form->field($model, 'stavok')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
