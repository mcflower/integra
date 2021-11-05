<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VesselAnketa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vessel-anketa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r16')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r17')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r18')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r19')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r20')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r21')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r22')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r23')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r24')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r25')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recomended')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
