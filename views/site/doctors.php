<?php


use dmstr\widgets\Alert;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "Группа врачей-нутрициологов";
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
        <h2 id="anketa-name">Группа врачей-нутрициологов</h2>

        <?= $form->field($model, 'q1')->textInput(['maxlength' => true])->label('Ф.И.О. (полностью) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q2')->radioList(['женский' => 'Женский', 'мужской' => 'Мужской'])?>
        <?= $form->field($model, 'q3')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Номер телефона <span class="red">*</span>') ?>
        <?= $form->field($model, 'q4')->textInput(['maxlength' => true, 'placeholder' => 'ДД.ММ.ГГГГ'])->label('Дата рождения <span class="red">*</span>') ?>
        <?= $form->field($model, 'q5')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Электронная почта <span class="red">*</span>') ?>
        <?= $form->field($model, 'q6')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Город и улица проживания <span class="red">*</span>') ?>
        <?= $form->field($model, 'q7')->radioList($r)?>
        <?= $form->field($model, 'q8')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])?>
        <?= $form->field($model, 'q9')->radioList($r)?>
        <?= $form->field($model, 'q10')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])?>
        <?= $form->field($model, 'q11')->radioList($r)?>
        <?//= $form->field($model, 'q12')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])?>
        <?= $form->field($model, 'q13')->radioList($r)?>
        <?= $form->field($model, 'policy')->checkbox([
            'label' => 'Подтверждаете согласие на обработку и хранение Персональных данных согласно Федерального закона "О персональных данных" от 27.07.2006 N 152-ФЗ , в т.ч. Вы выражаете согласие на совершение звонка на Ваш мобильный номер телефона и получение сообщений в мессенджеры в соответствии с ФЗ "О связи" от 07.07.2003 N 126-ФЗ.',
            'labelOptions' => [
                'style' => 'padding-left:20px;'
            ]
        ]); ?>
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
