<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use dmstr\widgets\Alert;

$this->title = "Регистрация в чат поддержки пациентов";
$form = ActiveForm::begin();
$r = array('да' => 'да', 'нет' => 'нет');
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
        <h1 style='text-align:center;font-size: 30px;'>Регистрация в чат поддержки для обладателей дисконта в моей структуре NSP</h1>
        <h2 style='font-size: 24px;'>Чат поддержки это:</h2>
        <ul>
            <li>доступ к профилактическим протоколам и учебным вебинарам;</li>
            <li>рекомендации качественных препаратов по запросу, зарегистрированных в том числе в РФ, и имеющих соответствующие сертификаты;</li>
        </ul>
        <?= $form->field($model, 'q1')->textInput(['maxlength' => true])->label('Ф.И.О. (полностью) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q2')->textInput(['maxlength' => true, 'placeholder' => 'ДД.ММ.ГГГГ'])->label('Дата рождения <span class="red">*</span>') ?>
        <?= $form->field($model, 'q3')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Номер телефон <span class="red">*</span>') ?>
        <?= $form->field($model, 'q4')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Электронная почта <span class="red">*</span>') ?>
        <?= $form->field($model, 'q5')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Город проживания/Область <span class="red">*</span>') ?>
        <?= $form->field($model, 'q6')->radioList($r)?>
        <?= $form->field($model, 'q7')->radioList($r)?>
        <?= $form->field($model, 'q8')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q9')->radioList($r)?>
        <?//= $form->field($model, 'q10')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?//= $form->field($model, 'q11')->radioList($r)?>
        <?= $form->field($model, 'agreement1')->checkbox([
            'label' => 'Хочу получать комментарии и ответы на мои вопросы в чате с Холодовой Анной Анатольевной',
            'labelOptions' => [
                'style' => 'padding-left:20px;'
            ]
        ]);?>
        <?= $form->field($model, 'q12')->radioList(['Max' => 'Max', 'СМС' => 'СМС', 'Email' => 'Электронная почта'])?>
        <?= $form->field($model, 'agreement3')->checkbox([
            'label' => 'Понимаю, что поддержка в чате не может быть приравнена к полноценной медицинской консультации',
            'labelOptions' => [
                'style' => 'padding-left:20px;'
            ]
        ]);?>
        <?= $form->field($model, 'agreement2')->checkbox([
            'label' => 'Я даю согласие на <a href="/files/consent.pdf" target="_blank" style="text-decoration: underline">Обработку персональных данных</a>',
            'labelOptions' => [
                'style' => 'padding-left:20px;'
            ]
        ]);?>
        <?= $form->field($model, 'reCaptcha')->widget(
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
