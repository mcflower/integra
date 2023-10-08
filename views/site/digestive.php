<?php

$this->title = "Курс «Здоровье пищеварительной системы»";

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<style>
    .speakers {
        display: flex;
        flex-direction: column;
        clear: both;
    }

    .sp-line {
        display: flex;
        flex-direction: row;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .sp-photo {
        margin-right: 20px;

    }

    .sp-photo img {
        width: 150px;
        height: 150px;
        border-radius: 75px;
    }

    .cwc-formgroup select {
        float: none;
        height: auto;
        padding-top: 8px;
        padding-right: 8px;
        padding-bottom: 8px;
        padding-left: 8px;
        font-size: 16px;
        display: block;
        width: 100%;
        font-family: 'Roboto Light';
        color: rgb(237, 195, 71);
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        border-top-width: 1px;
        border-right-width: 1px;
        border-bottom-width: 1px;
        border-left-width: 1px;
        border-top-color: rgb(111, 143, 116);
        border-right-color: rgb(111, 143, 116);
        border-bottom-color: rgb(111, 143, 116);
        border-left-color: rgb(111, 143, 116);
        border-top-style: solid;
        border-right-style: solid;
        border-bottom-style: solid;
        border-left-style: solid;
    }

    .woc-schedule-name {
        float: left;
        font-size: 28px;
        width: 100%;
        height: auto;
        text-align: left;
        font-weight: 600;
        line-height: 1em;
        margin: 0px;
        clear: none;
        min-height: 0px;
        font-family: Philosopher;
        color: rgb(141, 179, 147);
        display: block;
    }

    .woc-schedule-line {
        float: left;
        height: 3px;
        margin: 12px 0px;
        clear: both;
        width: 100px;
        display: block;
        background-color: rgb(141, 179, 147);
    }

    .woc-link-to-form {
        padding: 15px 20px;
        clear: both;
        background: rgb(237, 195, 71);
        color: white !important;
        border-radius: 23px;
        text-decoration: none !important;
        margin-top: 25px;
        display: inline-block;
    }

    .woc-link-to-form:hover {
        background: rgb(217, 174, 44);
    }

    .woc-link-to-form:active, .woc-link-to-form:visited  {
        text-decoration: none;
    }

    @media (max-width: 630px) {
        .sp-line {
            flex-direction: column;
            border-bottom: 2px dotted;
        }

        .sp-photo {
            margin-right: 0;
            margin-bottom: 10px;
            width: 100%;
        }

        .sp-photo img {
            margin: 0 auto;
            display: block;
        }

        .sp-text {
            margin-bottom: 15px;
        }
    }
</style>
<div class="wo-anons clearfix">
    <div class="wo-container clearfix">
        <div class="woc-preview clearfix" style="background-image:url('/img/digestive.jpg?i=1');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-intro">
                        Курс
                    </p>
                    <p class="woc-main-time">
                        25 июля - 3 августа 2023 г.
                    </p>
                    <p class="woc-main-name">
                        «Здоровье пищеварительной системы»
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        Пищеварительная система - основа здоровья. И поэтому так важно знать, что именно на это влияет.<br/><br/>
                        - Разоблачение мифов и ликвидация врачебных ошибок.<br/>
                        - Спорные вопросы о дефиците железа и проблемном кишечнике.<br/>
                        - Желчегонные: польза или непоправимый вред.<br/>
                    </p>
                </div>
            </div>
            <div style="text-align: center;">
                <a class="woc-link-to-form scrollto" href="#form-to-pay">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </div>
            <div class="woc-second">
                <p style="text-align: center; font-size: 28px; margin-bottom: 20px;">На курсе вас ожидает:</p>
                <p style="margin-bottom:20px;">• 5 семинаров<br/>• Общение в чате курса в формате «вопрос-ответ»<br/>• Подготовка индивидуальной программы реабилитации<br/><br/></p>
                <p style="text-align: center; font-size: 28px; margin-bottom: 20px;">Темы семинаров:</p>
                <p class="woc-schedule-name">
                    25 - 26 ИЮЛЯ
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec3.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Гердт Алевтина Михайловна</u> - к.м.н., терапевт, невролог, сомнолог, специалист в
                            области интегративной медицины и клинической нутрициологии
                            <br><br>
                            Тема: <b>«Роль желудочно-кишечного тракта в профилактике и лечении аутизма, синдрома дефицита внимания и гиперактивности, депрессии и деменции».</b>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    27 - 28 ИЮЛЯ
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec6.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Сухарева Ольга Владимировна </u> - Врач дерматолог, косметолог, трихолог, врач превентивной медицины
                            <br><br>
                            Тема: <b>«Проблемная кожа - это не только про больной кишечник. Находим истинную причину».</b>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                     29 - 30 ИЮЛЯ
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec13.jpg?i=1"/>
                        </div>
                        <div class="sp-text">
                            <u>Коваль Ольга Николаевна</u> - врач педиатр, специалист в области детской нутрициологии
                            <br><br>
                            Тема: <b>«Эволюция пищеварительной системы ребенка: от нездоровья в детстве к эффективной профилактике болезней у взрослого».</b>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    31 ИЮЛЯ - 1 АВГУСТА
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec2.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Холодова Анна Анатольевна</u> - врач эндокринолог, андролог, специалист в области интегративной и Превент-медицины, гл. врач Клиники Интегра, г. Тольятти
                            <br/><br/>
                            Тема: <b>«Печень и Кишечник - гормональный дуэт пищеварительной системы. Осваиваем безопасные навыки профилактики и лечения».</b>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    2 - 3 АВГУСТА
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec12.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Боцула Юлия Владимировна</u> - гинеколог-эндокринолог, специалист в области интегративной медицины и клинической нутрициологии, главный врач клиники «Превенция 5П»
                            <br/><br/>
                            Тема: <b>«Рецидивирующий кандидоз, бактериальный вагиноз, ВПЧ. Точки взаимодействия между здоровьем пищеварительной системой».</b>
                        </div>
                    </div>
                </div>
                <br><br>
                <p class="woc-schedule-name">
                    ВАЖНО:
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <ul>
                        <li>Все семинары будут проходить в телеграм-канале курса в 18:00 (МСК).</li>
                        <li>В рамках курса вы можете предоставить предложенный список анализов, для выбора индивидуальной тактики оздоровления и профилактики.</li>
                        <li>Все предоставленные данные обследований просматриваются врачами.</li>
                    </ul>
                    <p>Доступ к материалам курса до 1 сентября.</p>
                </div>
            </div>
            <div class="clearfix">
                <div id="form-to-pay" class="cwib-detail clearfix">
                    <?php if (false): ?>
                        <p style="color: rgb(237, 195, 71);font-family: Roboto;font-size: 20px;">
                            Курс состоится с 25 июля по 3 августа 2023г. После оплаты участия ассистент курса добавит вас в официальный телеграмм-канал «Здоровье пищеварительной системы»
                        </p>
                        <p class="cwib-textstatic">
                            Стоимость участия
                        </p>
                        <p class="cwib-price">
                            2 500 руб
                        </p>
                    <?php endif; ?>
                </div>
                <div class="cw-contact clearfix">

                    <?php
                    if (false) {
                        $form = ActiveForm::begin(['action' => '/registration', 'options' => ['class' => 'cwc-form wo-form']]);
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'name')->textInput(['placeholder' => 'Ф.И.О'])->label(false);
                        echo '</label>';
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'email')->textInput(['placeholder' => 'Эл. почта'])->label(false);
                        echo $form->field($model, 'activity')->hiddenInput(['value' => '5Phm6P6z4MIU'])->label(false);
                        echo '</label>';
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'phone')->textInput(['placeholder' => 'Телефон'])->label(false);
                        echo '</label>';
                        echo '<div class="policy-container clearfix">
                                <p class="cwc-line1">
                                    Нажимая кнопку "Оплатить участие" вы даете согласие на обработку персональных данных<br>
                                </p>
                                <a class="cwc-line2" href="/files/privacy_policy.pdf" target="_blank">
                                    Политика конфиденциальности<br>
                                </a>
                                <a class="cwc-line3" href="/files/user_agreement.pdf" target="_blank">
                                    Договор оферты<br>
                                </a>
                            </div>';
                        echo Html::submitButton("ОПЛАТИТЬ УЧАСТИЕ");

                        ActiveForm::end();
                    } else {
                        echo "<button class='wo-close'>КУРС ЗАКОНЧИЛСЯ</button>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
