<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Webinar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="webinar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true])->hint('Ссылка на видео на youtube канале') ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <?= $form->field($model, 'hide')->dropDownList(array(0 => 'нет', 1 => 'да'), ['prompt' => 'Необходимо выбрать...']) ?>
    
    <?= $form->field($model, 'img')->fileInput()->hint('Важно! Размер изображения 529x276. Соблюдайте пропорцию!') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
