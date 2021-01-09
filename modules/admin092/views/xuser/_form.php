<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Xcontent;

/* @var $this yii\web\View */
/* @var $model app\models\Xuser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="xuser-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    
    <?php if($model->isNewRecord):?>
    
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'activity')->dropDownList(Xcontent::getXcontentActivityArray(), ['prompt' => 'Необходимо выбрать...']) ?>
    
    <?php else: ?>
    <?= $form->field($model, 'buy')->dropDownList(array(0 => 'нет', 1 => 'да'), ['prompt' => 'Необходимо выбрать...'])->hint('Не отправит письмо успешной оплаты!') ?>
    <?php endif;?>

    

    <?//= $form->field($model, 'hash')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'activity')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'buy')->textInput() ?>
    
    <?//= $form->field($model, 'wopen')->textInput() ?>

    <?//= $form->field($model, 'wstart')->textInput() ?>

    <?//= $form->field($model, 'wclose')->textInput() ?>

    <?//= $form->field($model, 'created_at')->textInput() ?>

    <?//= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
