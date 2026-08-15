<?php

use dmstr\widgets\Alert;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "Опрос на выявление возможного дефицита йода/гипотиреоз";
$form = ActiveForm::begin();
$r = array(0 => 'Нет', 1 => 'Да');
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
        <h2 id="anketa-name">Опрос на выявление возможного дефицита йода/гипотиреоз</h2>

        <?= $form->field($survey, 'name')->textInput(['maxlength' => true])->label('Ф.И.О. (полностью) <span class="red">*</span>') ?>
        <?= $form->field($survey, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Ваш ответ'])->label('Электронная почта <span class="red">*</span>') ?>
        <?= $form->field($model, 'q1')->radioList($r)->label('Слабость, усталость <span class="red">*</span>') ?>
        <?= $form->field($model, 'q2')->radioList($r)->label('Снижение либидо <span class="red">*</span>') ?>
        <?= $form->field($model, 'q3')->radioList($r)->label('Дневная сонливость <span class="red">*</span>') ?>
        <?= $form->field($model, 'q4')->radioList($r)->label('Снижение памяти, замедленная речь <span class="red">*</span>') ?>
        <?= $form->field($model, 'q5')->radioList($r)->label('У Вас есть онемение пальцев рук, скованность в руках по утрам, Вы можете отлежать руку во сне? <span class="red">*</span>') ?>
        <?= $form->field($model, 'q6')->radioList($r)->label('Низкая температура тела (35,0-36,0) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q7')->radioList($r)->label('Непероносимость холода <span class="red">*</span>') ?>
        <?= $form->field($model, 'q8')->radioList($r)->label('Запоры <span class="red">*</span>') ?>
        <?= $form->field($model, 'q9')->radioList($r)->label('Снижение слуха <span class="red">*</span>') ?>
        <?= $form->field($model, 'q10')->radioList($r)->label('Изменение (осиплость) голоса <span class="red">*</span>') ?>
        <?= $form->field($model, 'q11')->radioList($r)->label('Миалгия (боли в мышцах) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q12')->radioList($r)->label('Набор веса <span class="red">*</span>') ?>
        <?= $form->field($model, 'q13')->radioList($r)->label('Выпадение волос, в том числе поредение бровей и ресниц <span class="red">*</span>') ?>
        <?= $form->field($model, 'q14')->radioList($r)->label('Грубые, тонкие волосы <span class="red">*</span>') ?>
        <?= $form->field($model, 'q15')->radioList($r)->label('Отечность лица по утрам (при необходимости сравнить с фото) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q16')->radioList($r)->label('Сухая, грубая, бледная кожа, холодная кожа <span class="red">*</span>') ?>
        <?= $form->field($model, 'q17')->radioList($r)->label('Витилиго <span class="red">*</span>') ?>
        <?= $form->field($model, 'q18')->radioList($r)->label('Ломкость ногтей <span class="red">*</span>') ?>
        <?= $form->field($model, 'q19')->radioList($r)->label('Нарушение менструального цикла (для женщин) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q20')->radioList($r)->label('Нарушение потенции <span class="red">*</span>') ?>
        <?= $form->field($model, 'q21')->radioList($r)->label('Мои руки и ноги холодные (периодически, иногда или часто) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q22')->radioList($r)->label('Сниженное или повышенное АД <span class="red">*</span>') ?>
        <?= $form->field($model, 'q23')->radioList($r)->label('Получаете ли вы терапию препаратами: тирозол/мерказолил/пропицил/L-тироксин/Эутирокс <span class="red">*</span>') ?>
        <?= $form->field($survey, 'page')->hiddenInput(['value' => 'Дефицит йода'])->label(false) ?>
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
