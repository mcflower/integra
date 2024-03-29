<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IntegraAnalysis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="integra-analysis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'art')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'hide')->dropDownList(array(0 => 'нет', 1 => 'да'), ['prompt' => 'Необходимо выбрать...']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
