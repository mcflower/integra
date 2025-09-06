<?php

$this->title = "VIII КОНФЕРЕНЦИЯ ПРИМЕНИМАЯ МЕДИЦИНА";

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

    .woc-link-to-form:active, .woc-link-to-form:visited {
        text-decoration: none;
    }

    .img-box {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin-bottom: 20px;
    }

    .img-box-one {
        display: flex;
        width: 30%;
        border-radius: 23px;
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

        .img-box {
            flex-direction: column;
        }

        .img-box-one {
            width: 100%;
            margin-bottom: 15px;
        }
    }
</style>
<div class="wo-anons clearfix">
    <div class="wo-container clearfix">
        <div class="woc-preview clearfix" style="background-image:url('/img/moscow25.jpg');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-name clearfix"
                       style="color:#026118; font-family: Philosopher;font-size: 34px;margin-bottom: 15px;">
                        5 СЕНТЯБРЯ 2025 г.
                    </p>
                    <p class="woc-main-intro">
                        VIII КОНФЕРЕНЦИЯ
                    </p>

                    <p class="woc-main-name">
                        ПРИМЕНИМАЯ МЕДИЦИНА
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        Практико-применимые знания в области медицины от врачей-практиков для здоровья людей<br/>
                        Место проведения: г. Москва, гостиница Холидей ИНН Сокольники, Русаковская улица, д. 24, метро Сокольники
                    </p>
                </div>
            </div>
            <div style="text-align: center;">
                <a class="woc-link-to-form scrollto" href="#form-to-pay">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </div>
            <br><br>
            <p class="woc-schedule-name">
                ДЛЯ КОГО КОНФЕРЕНЦИЯ:
            </p>
            <div class="woc-schedule-line clearfix"></div>
            <div class="speakers clearfix">
                <div class="sp-line">
                    <div class="woc-main-about" style="background-color: rgb(237, 195, 71);padding: 20px;border-radius: 20px;">
                        Врачам всех специальностей, диетологам, нутрициологам. Для тех, кто хочет развиваться в сфере
                        здоровья и красоты. Кто мечтает запускать свои проекты онлайн и офлайн, или желает
                        масштабировать существующий. Для всех, чья миссия - улучшать качество жизни людей!
                    </div>
                </div>
            </div>
            <div class="woc-second">
                <p class="woc-main-name" style='text-align: center;'>
                    Программа
                </p>
                <br><br><br>
                <p class="woc-schedule-name">
                    10:00 - 11:00
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Регистрация и приветствие
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    11:00 - 12:00 «Хронический болевой синдром»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Тяжкое бремя, снижающее качество жизни. Комплексный подход в решении проблемы.<br/>
                            <span style="font-family: 'Roboto';">Спикер:</span> Гердт Алевтина Михайловна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    12:00 - 13:00 «Дефицит железа. Анемия»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Тактика при сохранении низкого гемоглобина на фоне лечения дефицита железа. Прекурсоры эритроцита. Спорные вопросы в лечении железодефицитных состояний.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Мостовая Мария Владимировна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    13:00 - 14:30 Перерыв на обед
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Неформальное общение. Посещение партнерской выставки.
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    14:30 - 15:30 «Безопасная терапия половыми гормонами»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Детокс-менеджмент.<br/>
                            <span style="font-family: 'Roboto';">Спикер:</span> Гвоздева Марина Евгеньевна
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    15:30 - 16:30 «Коморбидный пациент - каждый»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Старт терапии и профилактики-тактика врача и нутрициолога.<br/>
                            <span style="font-family: 'Roboto';">Спикер:</span> Холодова Анна Анатольевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    16:30 - 17:30 «Открытый микрофон»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Брифинг: вопросы-ответы. Подведение итогов конференции.
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    17:30 - 18:00 Закрытие конференции
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">

                        </div>
                    </div>
                </div>

                <br/><br/>
                <p style="text-align: center; font-size: 28px; margin-bottom: 20px;">Спикеры Конференции:</p>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec3.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Гердт Алевтина Михайловна</u> - к.м.н., терапевт, невролог, эндокринолог, специалист в
                            области интегративной медицины и клинической нутрициологии
                        </div>
                    </div>
                </div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec2.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Холодова Анна Анатольевна</u> - эндокринолог, андролог, специалист в области
                            интегративной медицины и клинической нутрициологии, основатель и главный врач концептуальной
                            ООО «Клиника Интегра»
                        </div>
                    </div>
                </div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec7.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Мостовая Мария Владимировна</u> - врач-эндокринолог, специалист в области превентивной интегративной медицины. Зав. отд. эндокринологии медицинской клиники «HormoneLife», г. Москва
                        </div>
                    </div>
                </div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec14.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Гвоздева Марина Евгеньевна</u> - кандидат медицинских наук, акушер-гинеколог высшей категории, отличник здравоохранения, доцент кафедры ВолгГМУ. Лучший акушер-гинеколог Волгоградской области 2023 г.
                        </div>
                    </div>
                </div>

                <p class="woc-schedule-name">
                    ВАЖНАЯ ИНФОРМАЦИЯ:
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <ul>
                                <li>
                                    <p style="font-family: Philosopher;">Питание включено в стоимость участия конференции!</p>
                                </li>
                                <li>
                                    ❗️После регистрации, вам на указанную электронную почту, приходит письмо с уникальной ссылкой на чат участников. Просьба сразу добавляться!
                                </li>
                                <li>
                                    <p>Организаторы оставляют за собой право поменять расписание.</p>
                                </li>
                                <!--<li>
                                    <p style="font-family: Philosopher;">По окончанию конференции предусмотрен
                                        сертификат.</p>
                                </li>
                                <li>
                                    <p>❗️После регистрации и оплаты участия, на указанную электронную почту (ПРОВЕРЯТЬ
                                        ПРАВИЛЬНОСТЬ НАПИСАНИЯ!) вам приходит автоматическое письмо с персональным
                                        доступом в телеграмм-канал участников конференции. Просьба не передавать ссылку
                                        третьим лицам.</p>
                                </li>
                                <li>
                                    <p>Доступ к лекциям и материалам конференции - 6 месяцев со дня проведения.</p>
                                </li>
                                <li style="font-family: Philosopher;">Чтобы запросить оформление счёта на юридическое
                                    лицо <a target="_blank" style="text-decoration:underline;"
                                            href="https://wa.me/79277860082?text=Здравствуйте.%20Хочу%20запросить%20счёт%20на%20юридическое%20лицо%20для%20участия%20в%20VII%20Конференции%20Применимая%20медицина">нажмите
                                        здесь</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <div id="form-to-pay" class="cwib-detail clearfix">
                    <?php if (false): ?>
                        <p style="color: rgb(237, 195, 71);font-family: Roboto;font-size: 20px;">
                            Мероприятие состоится 5 сентября, 2025г. в г. Москва<br/>
                            гостиница Холидей ИНН Сокольники, Русаковская улица, д. 24, метро Сокольники
                        </p>
                        <p class="cwib-textstatic">
                            Стоимость участия
                        </p>
                        <p class="cwib-price">
                            15 900 руб.<sup>*</sup>
                        </p>
                        <!--<p class="cwc-line1"><br/>* с 6 августа стоимость 15 900 руб.</p>-->
                    <?php endif; ?>
                </div>
                <div class="cw-contact clearfix">

                    <?php
                    if (false) {
                        $form = ActiveForm::begin(['action' => '/registration', 'options' => ['class' => 'cwc-form wo-form']]);
//                        echo '<label class="cwc-formgroup">';
//                        echo $form->field($model, 'activity')->dropDownList([
//                            'SLuJLt18IUgQ' => 'ОЧНОЕ участие - 12 000 руб.',
//                            'KBFHlvYuaATi' => 'ОНЛАЙН участие - 12 000 руб.'
//                        ], ['prompt' => 'Выберите тариф...', 'style' => ''])->label(false);
//                        echo '</label>';
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'name')->textInput(['placeholder' => 'Ф.И.О для печати сертификата', 'required' => 'required'])->label(false);
                        echo '</label>';
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'email')->input('email', ['placeholder' => 'Эл. почта', 'required' => 'required'])->label(false);
                        echo '</label>';
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'phone')->input('number', ['placeholder' => 'Телефон', 'required' => 'required'])->label(false);
                        echo '</label>';
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'reCaptcha')->widget(
                            \himiklab\yii2\recaptcha\ReCaptcha::className(),
                            ['siteKey' => '6LfAxCYaAAAAAHek6vUl-nnehdm1Q0UqBb1VaDBm', 'widgetOptions' => ['data-size' => 'compact', 'class' => '']]

                        )->label(false);
                        echo '</label>';
                        echo $form->field($model, 'activity')->hiddenInput(['value' => 'veRzMIuGjyVa'])->label(false);
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
