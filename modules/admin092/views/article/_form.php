<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'release_date')->textInput(['maxlength' => true])->hint('Придерживайтесь общего формата. Например: Май 2020') ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <?= $form->field($model, 'url')->fileInput(['accept' => 'application/pdf'])->hint('Внимание! Только pdf-файлы.') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
