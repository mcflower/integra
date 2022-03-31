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
        <h2>Регистрация в чат поддержки пациентов</h2>

        <?= $form->field($model, 'q1')->textInput(['maxlength' => true])->label('Ф.И.О. (полностью) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q2')->textInput(['maxlength' => true, 'placeholder' => 'ДД.ММ.ГГГГ'])->label('Дата рождения <span class="red">*</span>') ?>
        <?= $form->field($model, 'q3')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Номер телефон <span class="red">*</span>') ?>
        <?= $form->field($model, 'q4')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Электронная почта <span class="red">*</span>') ?>
        <?= $form->field($model, 'q5')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Город проживания/Область <span class="red">*</span>') ?>
        <?= $form->field($model, 'q6')->radioList($r)?>
        <?= $form->field($model, 'q7')->radioList($r)?>
        <?= $form->field($model, 'q8')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q9')->radioList($r)?>
        <?= $form->field($model, 'q10')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q11')->radioList($r)?>
        <?= $form->field($model, 'agreement1')->checkbox([
            'label' => 'Хочу получать поддержку в чате для пациентов с врачом Холодовой Анной Анатольевной',
            'labelOptions' => [
                'style' => 'padding-left:20px;'
            ]
        ]);?>
        <?= $form->field($model, 'agreement2')->checkbox([
            'label' => 'Соглашаюсь на рекомендации качественных препаратов по запросу, зарегистрированных в том числе в РФ, и имеющих соответствующие сертификаты качества',
            'labelOptions' => [
                'style' => 'padding-left:20px;'
            ]
        ]);?>
        <?= $form->field($model, 'agreement3')->checkbox([
            'label' => 'Понимаю, что поддержка в чате не может быть приравнена к полноценной медицинской консультации',
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
