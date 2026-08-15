<?php

use dmstr\widgets\Alert;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "Опрос на выявление возможного дефицита прогестерона";
$form = ActiveForm::begin();
$r = array(0 => 'Нет', 1 => 'Да');
$r2 = array(0 => 'Нет', 2 => 'Да');
$r3 = array(0 => 'Нет', 3 => 'Да');
$r4 = array(0 => 'Нет', 4 => 'Да');
?>
<style>
    .field-surveys-page {
        display:none;
    }
</style>
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
        <h2 id="anketa-name">Опрос на выявление возможного дефицита прогестерона</h2>

        <?= $form->field($survey, 'name')->textInput(['maxlength' => true])->label('Ф.И.О. (полностью) <span class="red">*</span>') ?>
        <?= $form->field($survey, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Электронная почта <span class="red">*</span>') ?>
        <?= $form->field($model, 'q1')->radioList($r4)->label('Болезненость молочных желез <span class="red">*</span>') ?>
        <?= $form->field($model, 'q2')->radioList($r4)->label('Смена настроения перед менструацией <span class="red">*</span>') ?>
        <?= $form->field($model, 'q3')->radioList($r3)->label('Головная боль перед менструацией <span class="red">*</span>') ?>
        <?= $form->field($model, 'q4')->radioList($r3)->label('Мигренозные боли <span class="red">*</span>') ?>
        <?= $form->field($model, 'q5')->radioList($r4)->label('Болезненные менструации <span class="red">*</span>') ?>
        <?= $form->field($model, 'q6')->radioList($r3)->label('Обильные менструации <span class="red">*</span>') ?>
        <?= $form->field($model, 'q7')->radioList($r3)->label('Иногда/всегда задержка менструации <span class="red">*</span>') ?>
        <?= $form->field($model, 'q8')->radioList($r3)->label('У Вас есть миома матки? <span class="red">*</span>') ?>
        <?= $form->field($model, 'q9')->radioList($r3)->label('У Вас есть ФКМ (мастопатия) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q10')->radioList($r2)->label('У Вас есть эндометриоз/аденомиоз? <span class="red">*</span>') ?>
        <?= $form->field($model, 'q11')->radioList($r2)->label('У Вас было более 1 выкидыша <span class="red">*</span>') ?>
        <?= $form->field($model, 'q12')->radioList($r2)->label('Бесплодие в анамнезе <span class="red">*</span>') ?>
        <?= $form->field($model, 'q13')->radioList($r)->label('Боли в суставах <span class="red">*</span>') ?>
        <?= $form->field($model, 'q14')->radioList($r3)->label('У Вас снизилось либидо? <span class="red">*</span>') ?>
        <?= $form->field($model, 'q15')->radioList($r2)->label('У меня есть стремление изменить внешность <span class="red">*</span>') ?>
        <?= $form->field($model, 'q16')->radioList($r)->label('Плохо растут волосы <span class="red">*</span>') ?>
        <?= $form->field($model, 'q17')->radioList($r)->label('У меня приступы паники <span class="red">*</span>') ?>
        <?= $form->field($model, 'q18')->radioList($r3)->label('У меня есть раздражительность <span class="red">*</span>') ?>
        <?= $form->field($model, 'q19')->radioList($r4)->label('Я не люблю детей <span class="red">*</span>') ?>
        <?= $form->field($survey, 'page')->hiddenInput(['value' => 'Дефицит прогестерона'])->label(false) ?>
        <div class="form-group">
            Анкетирование является частью активного расспроса и не может являться единственным методом постановки диагноза.
        </div>

        <?= $form->field($survey, 'policy')->checkbox([
            'label' => 'Я даю согласие на <a href="/files/consent.pdf" target="_blank" style="text-decoration: underline">Обработку персональных данных</a>',
            'labelOptions' => [
                'style' => 'padding-left:20px;'
            ]
        ]);?>
        <?= $form->field($survey, 'reCaptcha')->widget(
            \himiklab\yii2\recaptcha\ReCaptcha::className(),
            ['siteKey' => '6LfAxCYaAAAAAHek6vUl-nnehdm1Q0UqBb1VaDBm', 'widgetOptions' => ['class' => '']]
        )->label(false) ?>

        <?=
        Html::submitButton('Отправить', ['class' => 'account_button', 'id' => 'save_button']);
        ?>

    </div>
</div>

<?
ActiveForm::end();
?>
