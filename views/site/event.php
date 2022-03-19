<?php


use dmstr\widgets\Alert;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "Форма регистрации на конференцию";
$form = ActiveForm::begin();
$r = array('да' => 'да', 'нет' => 'нет');
?>
<style>
    .field-event-activity {
        display: none;
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
        <h2 id="anketa-name">Форма регистрации на конференцию</h2>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'birthday')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'address')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q1')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'r1')->radioList($r)?>
        <?= $form->field($model, 'r2')->radioList($r)?>
        <?= $form->field($model, 'q2')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'r3')->radioList($r)?>
        <?= $form->field($model, 'q3')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'r4')->radioList($r)?>
        <?= $form->field($model, 'r5')->radioList($r)?>
        <?= $form->field($model, 'q4')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'r6')->radioList($r)?>
        <?= $form->field($model, 'r7')->radioList($r)?>
        <?= $form->field($model, 'r8')->radioList($r)?>
        <?= $form->field($model, 'r9')->radioList(['очно' => 'Очно', 'онлайн' => 'Оналйн'])?>
        <?= $form->field($model, 'activity')->hiddenInput(['value' => 'activity1'])->label(false)?>
        <?= $form->field($model, 'reCaptcha')->widget(
            \himiklab\yii2\recaptcha\ReCaptcha::className(),
            ['siteKey' => '6LfAxCYaAAAAAHek6vUl-nnehdm1Q0UqBb1VaDBm', 'widgetOptions' => ['class' => '']]
        )->label(false) ?>

        <div class="form-group">
            <?=
            Html::submitButton('Отправить', ['class' => 'account_button', 'id' => 'save_button']);
            ?>
        </div>


    </div>
</div>

<?
ActiveForm::end();
?>
