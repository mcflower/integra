<?php

$this->title = "Курс «Гормональное здоровье»";

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$ref = $_GET['ref'] ?: 'han';
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
        <div class="woc-preview clearfix" style="background-image:url('/img/hormonal.jpg?i=2');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-intro">
                        Курс
                    </p>
                    <p class="woc-main-time">
                        11 - 18 июля 2024 г.
                    </p>
                    <p class="woc-main-name">
                        «Гормональное здоровье»
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        Курс направлен на понимание процессов, связанных с сохранением гормонального здоровья мужчины и женщины. Гормоны - управляют абсолютно всеми сферами нашей жизни. Снижение одного гормона, ведет к разбалансировке и нездоровью всех органов.
                    </p>
                </div>
            </div>
            <div style="text-align: center;">
                <a class="woc-link-to-form scrollto" href="#form-to-pay">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </div>
            <div class="woc-second">
                <p style="margin-bottom:20px;">Вы получаете доступ к полезным прямым эфирам, тематическим блокам и практическим знаниям от специалистов в области гормонального здоровья, для улучшения качества жизни в формате публикаций и «вопрос-ответ».</p>
                <!--<p style="text-align: center; font-size: 28px; margin-bottom: 20px;">Темы семинаров:</p>-->



                <p class="woc-schedule-name">
                    Программа:
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <br>
                    <p class="woc-schedule-name">11 июля</p>
                    <p>«От апатии до депрессии». Лечение неврологических и психических  заболеваний через улучшение гормонального здоровья.</p>
                    <p>Спикер: Гердт Алевтина Михайловна</p>
                    <br>
                    <p class="woc-schedule-name">12 июля</p>
                    <p>«Гормональное здоровье мужчины». Снижение половых гормонов у молодых: распространенная проблема.</p>
                    <p>Спикер: Тетюшкин Сергей Николаевич</p>
                    <br>
                    <p class="woc-schedule-name">13 июля</p>
                    <p>«Преждевременный климакс». Профилактика и лечение. Своевременная гормональная терапия или когда не нужно начинать с гормонов.</p>
                    <p>Спикер: Гвоздева Марина Евгеньевна</p>
                    <br>
                    <p class="woc-schedule-name">15 июля</p>
                    <p>«Когда климакс уже 10 лет? Как улучшить качество жизни?»</p>
                    <p>Спикер: Холодова Анна Анатольевна</p>
                    <br>
                    <p class="woc-schedule-name">17 июля</p>
                    <p>«Гормоны желудочно-кишечного тракта». Видимые и недооцененные признаки дефицита. Лечебная тактика доступная каждому.</p>
                    <p>Спикер: Холодова Анна Анатольевна</p>
                    <br>
                    <p class="woc-schedule-name">18 июля</p>
                    <p>Свободное общение в чате</p>
                    <p>Брифинг Вопрос/ответ</p>
                    <hr>
                    <p>Все семинары и информ поддержка в официальном телеграмм-канале курса.</p>
                    <p>Время проведения семинаров по МСК времени, и сообщается накануне семинара.</p>
                </div>
                <br><br>
                <p class="woc-schedule-name">
                    Кураторы курса
                </p>
                <br>
                <div class="woc-schedule-line clearfix"></div>
                <br>
                <br>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec3.jpg"/>
                        </div>
                        <br>
                        <div class="sp-text">
                            <u>Гердт Алевтина Михайловна</u> - к.м.н. терапевт, невролог, эндокринолог, специалист в области целостного подхода к лечению и профилактике АИЗ.
                            <br><br>
                        </div>
                    </div>
                </div>
                <br>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec2.jpg"/>
                        </div>
                        <br>
                        <div class="sp-text">
                            <u>Холодова Анна Анатольевна</u> - врач эндокринолог, андролог, специалист в области интегративной и Превент-медицины, гл. врач Клиники Интегра, г. Тольятти
                            <br><br>
                        </div>
                    </div>
                </div>
                <br>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec25.jpg"/>
                        </div>
                        <br>
                        <div class="sp-text">
                            <u>Тетюшкин Сергей Николаевич</u> - хирург высшей категории,кандидат медицинских наук, нутрициолог, спортивная медицина, член Всероссийского общества хирургов
                            <br><br>
                        </div>
                    </div>
                </div>
                <br>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec14.jpg"/>
                        </div>
                        <br>
                        <div class="sp-text">
                            <u>Гвоздева Марина Евгеньевна</u> - к.м.н., акушер-гинеколог высшей категории, отличник здравоохранения, доцент кафедры ВолгГМУ. Лучший акушер-гинеколог Волгоградской области 2023 г.
                            <br><br>
                        </div>
                    </div>
                </div>
                <br>
                <p class="woc-schedule-name">
                    Каждый участник получит:
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <ul>
                        <li>Уникальные комбинации поддержки гормонального здоровья мужчин и женщин в разные возрастные периоды.</li>
                        <li>Доступ к материалам курса 9 месяцев.</li>
                    </ul>
                </div>
            </div>
            <div class="clearfix">
                <div id="form-to-pay" class="cwib-detail clearfix">
                    <?php if (true): ?>
                        <p style="color: rgb(237, 195, 71);font-family: Roboto;font-size: 20px;">
                            Курс состоится с 11 по 18 июля 2024г. После регистрации вам на указанную почту придет автоматическое письмо, где вы найдете вашу уникальную ссылку.
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
                    if (true) {
                        $form = ActiveForm::begin(['action' => '/registration', 'options' => ['class' => 'cwc-form wo-form']]);
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'name')->textInput(['placeholder' => 'Ф.И.О'])->label(false);
                        echo '</label>';
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'email')->textInput(['placeholder' => 'Эл. почта'])->label(false);
                        echo $form->field($model, 'activity')->hiddenInput(['value' => 'qTPnvNL1p4'])->label(false);
                        echo $form->field($model, 'ref')->hiddenInput(['value' => $ref])->label(false);
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
