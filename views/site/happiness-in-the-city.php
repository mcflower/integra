<?php

$this->title = "Конференция для жителей и гостей города «ЗДОРОВЬЕ И СЧАСТЬЕ В БОЛЬШОМ ГОРОДЕ»";

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
        border-bottom: 2px dotted;
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
        <div class="woc-preview clearfix" style="background-image:url('/img/health-in-the-city.png');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-intro">
                        Конференция для жителей и гостей города (ОЧНО)
                    </p>
                    <p class="woc-main-time">
                        17 марта 2024 г.
                    </p>
                    <p class="woc-main-name">
                         «ЗДОРОВЬЕ И СЧАСТЬЕ В БОЛЬШОМ ГОРОДЕ»
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        г. Тольятти, Платановая ул., д. 6, ресторан «Ренессанс»
                    </p>
                </div>
            </div>
            <div style="text-align: center;">
                <a class="woc-link-to-form scrollto" href="#form-to-pay">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </div>
            <div class="woc-second">
                <p style="text-align: center; font-size: 28px; margin-bottom: 20px;">ПРОГРАММА<sup>*</sup>:</p>
                <p class="woc-schedule-name">
                    13:00-13:30 Регистрация
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line"></div>

                </div>

                <p class="woc-schedule-name">
                    13:30-13:45 «Вступительное слово»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <u>Холодова Анна Анатольевна</u> - эндокринолог, андролог, основатель и гл. врач Клиники Интегра
                        </div>
                    </div>
                </div>

                <p class="woc-schedule-name">
                    13:45-14:15 Медицинский батл: «Паразиты. Нежелательные гости или ваша харизма?»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <!--<div class="sp-photo">
                            <img src="/img/spec3.jpg"/>
                        </div>-->
                        <div class="sp-text">
                            <ul>
                                <li>всё беды от глистов (мифы и правда)</li>
                                <li>методы диагностики и кому нельзя лечить паразитоз</li>
                            </ul>
                            <u>Холодова Анна Анатольевна</u> - эндокринолог, андролог, основатель и гл. врач Клиники Интегра<br/>
                            <u>Грачева Надежда Сергеевна</u> - специалист ВРТ диагностики и подбора стратегии
                        </div>
                    </div>
                </div>

                <p class="woc-schedule-name">
                    14:15-14:45 «Слышать своё сердце или как не пополнить печальную статистику»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <!--<div class="sp-photo">
                            <img src="/img/spec2.jpg"/>
                        </div>-->
                        <div class="sp-text">
                            <ul>
                                <li>скандальный Холестерин: друг или враг</li>
                                <li>современные методы диагностики здоровья сосудов и человека в целом</li>
                                <li>5 простых правил для здоровья сосудов и сердца о которых не говорят</li>
                            </ul>
                            <br>
                            <u>Бабенко Наталья Евгеньевна</u> - Кардиолог Клиники Интегра, специалист в области кардио-эндокринологии
                        </div>
                    </div>
                </div>

                <p class="woc-schedule-name">
                    14:45-16:00 Сытный кофе-брейк и время для приятного общения
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line"></div>
                </div>

                <p class="woc-schedule-name">
                    16:00-16:30 «Гормоны-это навсегда… что ставить в конце: ? или !»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <!--<div class="sp-photo">
                            <img src="/img/spec2.jpg"/>
                        </div>-->
                        <div class="sp-text">
                            <ul>
                                <li>объективные риски и возможности ЗГТ</li>
                                <li>онкология и гормоны</li>
                                <li>как организм «шепчет», что пора подумать о ЗГТ, чтобы не опоздать</li>
                            </ul>
                            <br>
                            <u>Балакирева Анна Николаевна</u> - Акушер-гинеколог, специалист в области интегративной, превентивной медицины и клинической нутрициологии
                        </div>
                    </div>
                </div>

                <p class="woc-schedule-name">
                    16:30-17:00 «Стресс, вес, настроение»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <!--<div class="sp-photo">
                            <img src="/img/spec3.jpg"/>
                        </div>-->
                        <div class="sp-text">
                            <ul>
                                <li>простые взаимосвязи, о которых не принято говорить</li>
                                <li>как сохранить хорошее настроение и эмоциональный интеллект до старости</li>
                            </ul>
                            <u>Холодова Анна Анатольевна</u> - эндокринолог, андролог, основатель и гл. врач Клиники Интегра<br/>

                        </div>
                    </div>
                </div>

                <p class="woc-schedule-name">
                    17:30-18:00 Традиционная викторина «О здоровье и для здоровья»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <p>Вручение призов, подарков!</p>
                        </div>
                    </div>

                </div>
                <p>Категория: 18+ <br/><br/><sup>*</sup> Организаторы оставляют за собой право вносить изменения в расписание.</p>
            </div>
            <div class="clearfix">
                <div id="form-to-pay" class="cwib-detail clearfix">
                    <?php if (false): ?>
                        <p style="color: rgb(237, 195, 71);font-family: Roboto;font-size: 20px;">
                            Мероприятие состоится ОЧНО 17 марта 2024 г. в г. Тольятти, Платановая ул., д. 6, ресторан «Ренессанс»
                        </p>
                        <p class="cwib-textstatic">
                            Стоимость участия
                        </p>
                        <p class="cwib-price">
                            3 000 руб
                        </p>
                        <!--<p>Цена действительна до 8 марта до 24:00. Далее 3 000 руб.</p>-->
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
                        echo $form->field($model, 'activity')->hiddenInput(['value' => '4qjqUqWvPUK'])->label(false);
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
                        echo "<button class='wo-close'>Мест нет</button>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


