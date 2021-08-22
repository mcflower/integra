<?php

use dmstr\widgets\Alert;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "Опрос на выявление возможного дефицита железа/гипоксии";
$form = ActiveForm::begin();
?>
<div class="hld-header">
    <div class="hld-header-container">
        <a href="/" class="hld-header-link">
            <img src="/img/logo.png" class="image">
        </a>
    </div>
</div>
<div class="anketa-content">
    <div class="anketa-form">
        <?= Alert::widget() ?>
        <h2 id="anketa-name">Опрос на выявление возможного дефицита железа/гипоксии</h2>


        <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Имя <span class="red">*</span>') ?>
        <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label('E-mail <span class="red">*</span>') ?>
        <?= $form->field($model, 'activity')->hiddenInput(['value' => 'someGuide'])->label(false) ?>

        <?=
        Html::submitButton('Отправить', ['class' => 'account_button', 'id' => 'save_button']);
        ?>

    </div>
</div>

<?
ActiveForm::end();
?>
