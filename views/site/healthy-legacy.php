<?php

$this->title = "Городская конференция «ЗДОРОВОЕ НАСЛЕДИЕ»";

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
        <div class="woc-preview clearfix" style="background-image:url('/img/healthy-legacy3.jpg');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-intro">
                        Городская конференция (ОЧНО)
                    </p>
                    <p class="woc-main-time">
                        7 июля 2024 г.
                    </p>
                    <p class="woc-main-name">
                        «ЗДОРОВОЕ НАСЛЕДИЕ»
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        г. Тольятти, Приморский б-р., д. 43, ресторан «ФРАНЦИЯ»
                    </p>
                    
                    <p style="font-family: 'Roboto';float: left;height: auto;font-size: 21px;width: 100%;padding: 25px 20px;margin-top: 10px;display: block;background: yellow;text-align: center;border-radius: 20px;">
                        Поднимаем флаг просвещения для родителей, нутрициологов и врачей.
                        <br/>
                        Говорим о профилактике бесплодия, онкологии, сахарного диабета и суицидов у ваших детей и их детей.
                    </p>
                </div>
            </div>
            <div style="text-align: center;">
                <a class="woc-link-to-form scrollto" href="#form-to-pay">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </div>
            <div class="woc-second">
                <p style="text-align: center; font-size: 28px; margin-bottom: 20px;">РАСПИСАНИЕ:</p>
                <p class="woc-schedule-name">
                    10:30-11:00 Приветствие
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line"></div>
                </div>
                <p class="woc-schedule-name">
                    11:00-11:45 «Дисплазия»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec13.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Коваль Ольга Николаевна</u> - врач педиатр, специалист в области детской нутрициологии
                            <br><br>
                            <p>
                                <b>Невидимый диагноз или как недооцененные «особенности» приводят к плачевным последствиям</b><br>
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <p class="woc-schedule-name">
                    11:45-12:30 «Мужчина — это выживший мальчик»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec15.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Берестнева Ольга Геннадьевна</u> - врач педиатр  Клиника Интегра, Д-доктор, специалист в области детской нутрициологии, эксперт Клиники Интегра в области подбора тактики по преодолению генетического неблагополучия
                            <ul>
                                <li>Становление гормонального фона</li>
                                <li>Профилактика  мужского бесплодия</li>
                                <li>Профилактика раннего андрогенного дефицита</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <br>
                <p class="woc-schedule-name">
                    12:30-13:30 Кофе-брейк (включён в стоимость!)
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line"></div>
                </div>

                <p class="woc-schedule-name">
                    13:30-14:15 «Дефицит внимания, гиперактивность, снижение памяти: нарушение нервно-психического развития у детей»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec3.jpg"/>
                        </div>
                        <div class="sp-text">
                           <u>Гердт Алевтина Михайловна</u> - к.м.н., невролог, эндокринолог, Д-доктор, специалист в области клинической нутрициологии
                            <br><br>
                        </div>
                    </div>
                </div>
                <br>
                <p class="woc-schedule-name">
                    14:15-15:00 «РОДИТЕ_ЛИ ВЫ»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec2.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Холодова Анна Анатольевна</u> - эндокринолог, андролог, гл. врач Клиники Интегра, специалист в области здоровья и долголетия пары
                            <ul>
                                <li>Основы мужского и женского здоровья</li>
                                <li>Почему в 50+ НАДО иметь репродуктивное здоровье</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
                <p class="woc-schedule-name">
                    15:00 Подведение итогов. Живое общение
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line"></div>
                </div>
                <p><sup>*</sup> Организаторы оставляют за собой право вносить изменения в расписание.</p>
            </div>
            <div class="clearfix">
                <div id="form-to-pay" class="cwib-detail clearfix">
                    <?php if (false): ?>
                        <p style="color: rgb(237, 195, 71);font-family: Roboto;font-size: 20px;">
                            Мероприятие состоится ОЧНО 7 июля 2024 г. по адресу: г. Тольятти, Приморский б-р., д. 43, ресторан «ФРАНЦИЯ»
                        </p>
                        <p class="cwib-textstatic">
                            Стоимость участия
                        </p>
                        <p class="cwib-price">
                            2 800 руб.
                        </p>
                        <!--<p class="cwc-line1"><br/>* Раннее бронирование до 23 июня (включительно), с 24 июня стоимость 2 800 руб.</p>-->
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
                        echo $form->field($model, 'activity')->hiddenInput(['value' => 'vzAAU0jWbYhP'])->label(false);
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


