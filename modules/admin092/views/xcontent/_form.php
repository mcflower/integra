<?php

use dosamigos\tinymce\TinyMce;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Xcontent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="xcontent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'about')->textarea(['rows' => 6]) ?>
    
    <?php if($model->isNewRecord):?>
    <?= $form->field($model, 'string_day')->textInput() ?>
    <?php else: ?>
    <?= $form->field($model, 'string_day')->textInput(['value' => date('d.m.Y', $model->xdate)]) ?>
    <?php endif; ?>
    
    <?= $form->field($model, 'xtime')->textInput()->hint('Время московское') ?>

    <?= $form->field($model, 'description')->widget(TinyMce::className(), [
        'options' => ['rows' => 16],
        'language' => 'ru',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>

    <?//= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'img')->fileInput(['accept' => 'image/*'])->hint('Формат 1200х800 px.') ?>

    <?= $form->field($model, 'photo')->fileInput(['accept' => 'image/*'])->hint('Формат 300х300 px.') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
