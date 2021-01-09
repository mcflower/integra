<?php

use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "Анкета «Реабилитация после Covid-19»";
$form = ActiveForm::begin();
$r = array('да' => 'да', 'нет' => 'нет');
?>
<style>
    .navbar-inverse {
        background-color: #673ab7;
        border-color: #462879;
    }

    .navbar-inverse .navbar-brand {
        color: white;
    }

    h2 {
        font-family: 'Google Sans',Roboto,Arial,sans-serif;
        font-size: 32px;
        font-weight: 400;
        color: #202124;
        line-height: 135%;
        max-width: 100%;
        min-width: 0%;
        text-align: center;
    }

    .anketa-form {
        width: 100%;
        max-width: 640px;
        margin: 0 auto;
    }

    .form-group {
        transition: background-color 200ms cubic-bezier(0.0,0.0,0.2,1);
        background-color: #fff;
        border: 1px solid #dadce0;
        border-radius: 8px;
        margin-bottom: 12px;
        padding: 24px;
        page-break-inside: avoid;
        word-wrap: break-word;
    }

    .control-label {
        font-size: 16px;
        font-weight: 500;
        letter-spacing: .1px;
        line-height: 24px;
        color: #202124;
        font-weight: 400;
        width: 100%;
        word-break: break-word;
    }

    .radio {
        font-size: 14px;
        font-weight: 400;
        letter-spacing: .2px;
        line-height: 20px;
        color: #202124;
        min-width: 1px;
    }

    [type=text] {
        border-top: none;
        border-left: none;
        border-right: none;
        box-shadow: none !important;
        border-radius: 0;
    }

    .wrap {
        background: #f0ebf8;
    }

    button {
        background-color: rgb(103, 58, 183);
        border: none;
        color: white;
        font-weight: bold;
        padding: 0 24px;
        height: 36px;
        border-radius: 3px;
    }

    button:hover {
        box-shadow: 0px 2px 1px -1px rgba(103, 58, 183, 0.2), 0px 1px 1px 0px rgba(103, 58, 183, 0.14), 0px 1px 3px 0px rgba(103, 58, 183, 0.12);
    }

    .red {
        color: red;
    }
</style>
<div class="anketa-content">
    <div class="anketa-form">
        <h2>Анкета «ГИПОКСИИ.NET»</h2>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Ф.И.О. (полностью) <span class="red">*</span>') ?>
        <?= $form->field($model, 'r1')->radioList(['женский' => 'Женский', 'мужской' => 'Мужской'])?>
        <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Номер телефон <span class="red">*</span>') ?>
        <?= $form->field($model, 'address')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Город проживания <span class="red">*</span>') ?>
        <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Электронная почта <span class="red">*</span>') ?>
        <?= $form->field($model, 'birthday')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Дата рождения <span class="red">*</span>') ?>
        <?= $form->field($model, 'q1')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q2')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q3')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q4')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'r2')->radioList($r)?>
        <?= $form->field($model, 'r3')->radioList($r)?>
        <?= $form->field($model, 'r4')->radioList($r)?>
        <?= $form->field($model, 'r5')->radioList($r)?>
        <?= $form->field($model, 'r6')->radioList($r)?>
        <?= $form->field($model, 'r7')->radioList($r)?>
        <?= $form->field($model, 'r8')->radioList($r)?>
        <?= $form->field($model, 'r9')->radioList($r)?>
        <?= $form->field($model, 'r10')->radioList($r)?>
        <?= $form->field($model, 'r11')->radioList($r)?>
        <?= $form->field($model, 'r12')->radioList($r)?>
        <?= $form->field($model, 'r13')->radioList($r)?>
        <?= $form->field($model, 'r14')->radioList($r)?>
        <?= $form->field($model, 'r15')->radioList($r)?>
        <?= $form->field($model, 'r16')->radioList($r)?>
        <?= $form->field($model, 'r17')->radioList($r)?>
        <?= $form->field($model, 'q5')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q6')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q7')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q8')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q9')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q10')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q11')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q12')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q13')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q14')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q15')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q16')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q17')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'r18')->radioList($r)?>
        <?= $form->field($model, 'r19')->radioList($r)?>
        <?= $form->field($model, 'r20')->radioList($r)?>
        <?= $form->field($model, 'r21')->radioList($r)?>
        <?= $form->field($model, 'r22')->radioList($r)?>
        <?= $form->field($model, 'r23')->radioList($r)?>
        <?//= $form->field($model, 'r24')->radioList($r)?>


        <?//= $form->field($model, 'q11')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?//= $form->field($model, 'r36')->radioList($r)?>
        <?= $form->field($model, 'policy')->checkbox([
            'label' => 'Я хочу получить результат анализа моей ситуации! Ответом на этот вопрос, Вы подтверждаете согласие на обработку и хранение Персональных данных согласно Федерального закона "О персональных данных" от 27.07.2006 N 152-ФЗ , в т.ч. Вы выражаете согласие на совершение звонка на Ваш мобильный номер телефона и получение сообщений в мессенджеры в соответствии с ФЗ "О связи" от 07.07.2003 N 126-ФЗ.',
            'labelOptions' => [
                'style' => 'padding-left:20px;'
            ]
        ]);?>
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
