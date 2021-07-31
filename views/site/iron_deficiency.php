<?php

use dmstr\widgets\Alert;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "Опрос на выявление возможного дефицита железа/гипоксии";
$form = ActiveForm::begin();
$r = array(0 => 'Нет', 1 => 'Редко/Слабо', 2 => 'Периодически/Терпимо', 3 => 'Часто/Умеренно', 4 => 'Постоянно/Выражено');
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

 
        <?= $form->field($model, 'q1')->radioList($r)->label('Слабость, повышенная утомляемость <span class="red">*</span>') ?>
        <?= $form->field($model, 'q2')->radioList($r)->label('Раздражительность, психологическая лабильность <span class="red">*</span>') ?>
        <?= $form->field($model, 'q3')->radioList($r)->label('Недостаточность концентрации внимания <span class="red">*</span>') ?>
        <?= $form->field($model, 'q4')->radioList($r)->label('Депрессивное настроение <span class="red">*</span>') ?>
        <?= $form->field($model, 'q5')->radioList($r)->label('Снижение трудоспособности, снижение переносимости физических нагрузок <span class="red">*</span>') ?>
        <?= $form->field($model, 'q6')->radioList($r)->label('Дневная сонливость <span class="red">*</span>') ?>
        <?= $form->field($model, 'q7')->radioList($r)->label('Головные боли по утрам <span class="red">*</span>') ?>
        <?= $form->field($model, 'q8')->radioList($r)->label('Гипотония, головокружение, шум в ушах, склонность к обморокам в душной обстановке <span class="red">*</span>') ?>
        <?= $form->field($model, 'q9')->radioList($r)->label('Пониженный аппетит <span class="red">*</span>') ?>
        <?= $form->field($model, 'q10')->radioList($r)->label('Отвращение к некоторым продуктам питания (мясо, шоколад, мёд, сладкое) и непещевым веществам (глина, шерсть) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q11')->radioList($r)->label('Извращение вкуса - непреодолимое желание есть что-либо необычное (зубной порошок, мел, глину, песок, фарш, крупу) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q12')->radioList($r)->label('Извращенное обоняние - пристрастия к запахам (бензин, керосин, ацетон, запах лаков, красок) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q13')->radioList($r)->label('Тяжесть/боли в пояснице в конце рабочего дня <span class="red">*</span>') ?>
        <?= $form->field($model, 'q14')->radioList($r)->label('Непроизвольное желание шевелить/двигать ногами перед засыпанием <span class="red">*</span>') ?>
        <?= $form->field($model, 'q15')->radioList($r)->label('Повышенная предрасположенность к инфекциям (герпес, частые ОРВИ, ИППП, фурункулез, ОРЗ) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q16')->radioList($r)->label('Обильные менструальные кровопотери <span class="red">*</span>') ?>
        <?= $form->field($model, 'q17')->radioList($r)->label('Отдышка и сердцебиение при обычных физических нагрузках <span class="red">*</span>') ?>
        <?= $form->field($model, 'q18')->radioList($r)->label('Зябкость рук и ног, немотивированный субфебрилитет (подъем температуры до 36,9 - 37,3 без объективных причин на Ваш взгляд <span class="red">*</span>') ?>
        <?= $form->field($model, 'q19')->radioList($r)->label('Сухость кожи, шелушение, сухие локти, трещины кожи пяток <span class="red">*</span>') ?>
        <?= $form->field($model, 'q20')->radioList($r)->label('Локализованный или генерализованный зуд кожи <span class="red">*</span>') ?>
        <?= $form->field($model, 'q21')->radioList($r)->label('Коричневые пятна на тыльной поверхности кистей и лица <span class="red">*</span>') ?>
        <?= $form->field($model, 'q22')->radioList($r)->label('Стоматит - трещины, «заезды» в уголках рта, кариес <span class="red">*</span>') ?>
        <?= $form->field($model, 'q23')->radioList($r)->label('Ломкость, тусклость, истончение и исчерченность ногтей, ложкообразная вогнутость ногтей <span class="red">*</span>') ?>
        <?= $form->field($model, 'q24')->radioList($r)->label('Тусклость, ломкость, выпадение волос, ранняя седина <span class="red">*</span>') ?>
        <?= $form->field($model, 'q25')->radioList($r)->label('Голубоватый оттенок склер <span class="red">*</span>') ?>
        <?= $form->field($model, 'q26')->radioList($r)->label('Снижение остроты зрения в темноте <span class="red">*</span>') ?>
        <?= $form->field($model, 'q27')->radioList($r)->label('Трудность при проглатывании твёрдой пищи, таблеток, капсул <span class="red">*</span>') ?>
        <?= $form->field($model, 'q28')->radioList($r)->label('Снижение мышечного тонуса, силы мышц <span class="red">*</span>') ?>
        <?= $form->field($model, 'q29')->radioList($r)->label('Императивные позывы к мочеиспусканию, недержание мочи при смехе, чихании, ночные позывы к мочеиспусканию <span class="red">*</span>') ?>
        <?= $form->field($model, 'q30')->radioList($r)->label('Неустойчивый стул, запоры, снижение желудочной секреции, атрофический гастрит <span class="red">*</span>') ?>
        <?= $form->field($model, 'q31')->radioList($r)->label('Привычные «малые» кровопотери десневы (сплевываете розовую слюну при чистке зубов, геморроидальные, трещина анального отверстия) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q32')->radioList($r)->label('Донорство (т.е. Вы сдаете кровь) <span class="red">*</span>') ?>
        <?= $form->field($model, 'q33')->radioList($r)->label('Имеете физические нагрузки <span class="red">*</span>') ?>
        
        <div class="form-group">
            Анкетирование является частью активного расспроса и не может являться единственным методом постановки диагноза.
        </div>
        
        <?=
        Html::submitButton('Отправить', ['class' => 'account_button', 'id' => 'save_button']);
        ?>

    </div>
</div>

<?
ActiveForm::end();
?>
