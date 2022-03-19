<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
