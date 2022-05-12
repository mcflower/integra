<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Progesterone */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="progesterone-form">

    <?php $form = ActiveForm::begin(); ?>

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

    <?= $form->field($model, 'q13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q16')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q17')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q18')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q19')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q20')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q21')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q22')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q23')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q24')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q25')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q26')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q27')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q28')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q29')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q30')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q31')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q32')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q33')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q34')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q35')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q36')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q37')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q38')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q39')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q40')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q41')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
