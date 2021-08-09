<?php

use app\models\Guides;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Guser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guser-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php if($model->isNewRecord):?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'gcontent')->dropDownList(Guides::getGuidesHashArray(), ['prompt' => 'Необходимо выбрать...']) ?>

    <?php else: ?>
        <?= $form->field($model, 'status')->dropDownList(array(0 => 'нет', 1 => 'да'), ['prompt' => 'Необходимо выбрать...'])->hint('Не отправит письмо успешной оплаты!') ?>
    <?php endif;?>

    <?/*= $form->field($model, 'name')->textInput(['maxlength' => true]) */?><!--

    <?/*= $form->field($model, 'email')->textInput(['maxlength' => true]) */?>

    <?/*= $form->field($model, 'hash')->textInput(['maxlength' => true]) */?>

    <?/*= $form->field($model, 'gcontent')->textInput(['maxlength' => true]) */?>

    --><?/*= $form->field($model, 'status')->textInput() */?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
