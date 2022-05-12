<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use dmstr\widgets\Alert;

$this->title = "Анкета «2 фаза цикла»";
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
        <h2 id="anketa-name">Анкета «2 фаза цикла»</h2>
        <?= $form->field($model, 'q1')->textInput(['maxlength' => true])->label('Ф.И.О. (полностью) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q2')->textInput(['maxlength' => true, 'placeholder' => 'ДД.ММ.ГГГГ'])->label('Дата рождения <span class="red">*</span>') ?>
        <?= $form->field($model, 'q3')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Номер телефон <span class="red">*</span>') ?>
        <?= $form->field($model, 'q4')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Электронная почта <span class="red">*</span>') ?>
        <?= $form->field($model, 'q5')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Город проживания/Область <span class="red">*</span>') ?>
        <?= $form->field($model, 'q6')->radioList($r)?>
        <?= $form->field($model, 'q7')->radioList($r)?>
        <?= $form->field($model, 'q8')->radioList($r)?>
        <?= $form->field($model, 'q9')->radioList($r)?>
        <?= $form->field($model, 'q10')->radioList($r)?>
        <?= $form->field($model, 'q11')->radioList($r)?>
        <?= $form->field($model, 'q12')->radioList($r)?>
        <?= $form->field($model, 'q13')->radioList($r)?>
        <?= $form->field($model, 'q14')->radioList($r)?>
        <?= $form->field($model, 'q15')->radioList($r)?>
        <?= $form->field($model, 'q16')->radioList($r)?>
        <?= $form->field($model, 'q17')->radioList($r)?>
        <?= $form->field($model, 'q18')->radioList($r)?>
        <?= $form->field($model, 'q19')->radioList($r)?>
        <?= $form->field($model, 'q20')->radioList($r)?>
        <?= $form->field($model, 'q21')->radioList($r)?>
        <?= $form->field($model, 'q22')->radioList($r)?>
        <?= $form->field($model, 'q23')->radioList($r)?>
        <?= $form->field($model, 'q24')->radioList($r)?>
        <?= $form->field($model, 'q25')->radioList($r)?>
        <?= $form->field($model, 'q26')->radioList($r)?>
        <?= $form->field($model, 'q27')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q28')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q29')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q30')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q31')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q32')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q33')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q34')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q35')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q36')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q37')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q38')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q39')->textarea(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q40')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q41')->radioList($r)?>
        <?= $form->field($model, 'q42')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ']) ?>
        <?= $form->field($model, 'q43')->radioList($r)?>
        <?= $form->field($model, 'q44')->radioList($r)?>
        <?= $form->field($model, 'policy')->checkbox([
            'label' => 'Я хочу получить результат анализа моей ситуации! Ответом на этот вопрос, Вы подтверждаете согласие на обработку и хранение Персональных данных согласно Федерального закона "О персональных данных" от 27.07.2006 N 152-ФЗ , в т.ч. Вы выражаете согласие на совершение звонка на Ваш мобильный номер телефона и получение сообщений в мессенджеры в соответствии с ФЗ "О связи" от 07.07.2003 N 126-ФЗ.',
            'labelOptions' => [
                'style' => 'padding-left:20px;'
            ]
        ]); ?>
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
