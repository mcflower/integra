<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use dmstr\widgets\Alert;

$this->title = "Анкета «Здоровые сосуды»";
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
        <h2>Анкета «Здоровые сосуды»</h2>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Ф.И.О. (полностью) <span class="red">*</span>') ?>
        <?= $form->field($model, 'r1')->radioList(['женский' => 'Женский', 'мужской' => 'Мужской'])?>
        <?= $form->field($model, 'age')->textInput(['maxlength' => true, 'placeholder' => 'ДД.ММ.ГГГГ'])->label('Дата рождения <span class="red">*</span>') ?>
        <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Номер телефон <span class="red">*</span>') ?>
        <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Электронная почта <span class="red">*</span>') ?>
        <?= $form->field($model, 'address')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Адрес места жительства <span class="red">*</span>') ?>
        <?= $form->field($model, 'r2')->radioList($r)?>
        <?= $form->field($model, 'r3')->radioList($r)?>
        <?= $form->field($model, 'r4')->radioList($r)?>
        <?= $form->field($model, 'r5')->radioList($r)?>
        <?= $form->field($model, 'r6')->radioList($r)?>
        <?= $form->field($model, 'r7')->radioList($r)->label('Отеки нижних конечностей + одышка при подъеме на 1 этаж <span class="red">*</span>')?>
        <?= $form->field($model, 'r8')->radioList($r)?>
        <?= $form->field($model, 'r9')->radioList($r)?>
        <?= $form->field($model, 'r10')->radioList($r)?>
        <?= $form->field($model, 'r11')->radioList($r)?>
        <?= $form->field($model, 'r12')->radioList($r)->label('Запоры больше 3-х дней <span class="red">*</span>')?>
        <?= $form->field($model, 'r13')->radioList($r)?>
        <?= $form->field($model, 'r14')->radioList($r)?>
        <?= $form->field($model, 'r15')->radioList($r)?>
        <?= $form->field($model, 'r16')->radioList($r)?>
        <?= $form->field($model, 'r26')->radioList($r)?>
        <?= $form->field($model, 'r17')->radioList($r)?>
        <?= $form->field($model, 'q1')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'r18')->radioList($r)?>
        <?= $form->field($model, 'r19')->radioList($r)?>
        <?= $form->field($model, 'r20')->radioList($r)?>
        <?= $form->field($model, 'r21')->radioList($r)?>
        <?= $form->field($model, 'r22')->radioList($r)?>
        <?= $form->field($model, 'r23')->radioList($r)?>
        <?= $form->field($model, 'q2')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q3')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q4')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q5')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q6')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q7')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q8')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q9')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q10')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'recomended')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Фамилия врача/нутрициолога/друга, который посоветовал Вам заполнить анкету <span class="red">*</span>') ?>
        <?= $form->field($model, 'q11')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'r24')->radioList($r)?>
        <?= $form->field($model, 'q12')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'r25')->radioList($r)?>
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
        <?=
            Html::submitButton('Отправить', ['class' => 'account_button', 'id' => 'save_button']);
        ?>

    </div>
</div>

<?
ActiveForm::end();
?>
