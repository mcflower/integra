<?php

$this->title = "VI ОНЛАЙН КОНФЕРЕНЦИЯ ПРИМЕНИМАЯ МЕДИЦИНА";

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
        <div class="woc-preview clearfix" style="background-image:url('/img/sochi-online.png?i=2');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-intro">
                        ОНЛАЙН УЧАСТИЕ
                    </p>

                    <p class="woc-main-name">
                        19 - 20 ОКТЯБРЯ 2024 г.
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        Практико-применимые знания в области медицины от врачей-практиков для здоровья людей
                    </p>
                </div>
            </div>
            <div style="text-align: center;">
                <a class="woc-link-to-form scrollto" href="#form-to-pay">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </div>
            <div class="woc-second">
                <p style="text-align: center; font-size: 28px; margin-bottom: 20px;">Программа онлайн конференции:</p>
                <p class="woc-main-name" style='text-align: center;'>
                    19 октября 2024г.
                </p>
                <br><br><br>
                <p class="woc-main-intro" style="font-family: Philosopher;">СЕКЦИЯ: ЭНДОКРИНОЛОГИЯ</p>
                <br>
                <br>
                <p class="woc-schedule-name">
                    12:00 - 12:45 «Недооцененный гипотиреоз»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Ошибки диагностики и лечения.<br/>
                            <span style="font-family: 'Roboto';">Спикер:</span> Холодова Анна Анатольевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    12:45 - 13:30 «Повышенный пролактин»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Продлевает молодость или приближает старение?<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Гердт Алевтина Михайловна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    13:30 - 14:15 «Заместительная Гормональная терапия может быть безопасной»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <span style="font-family: 'Roboto';">Спикер:</span> Гвоздева Марина Евгеньевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    14:15 - 15:00 «Бесплодие из детства»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Причины, диагностика, активная профилактика.<br/>
                            <span style="font-family: 'Roboto';">Спикер:</span> Коваль Ольга Николаевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    15:00 - 16:00 Перерыв
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">

                        </div>
                    </div>
                </div>
                <p class="woc-main-intro" style="font-family: Philosopher;">СЕКЦИЯ: ПРАВОВЫЕ И ЭТИЧЕСКИЕ АСПЕКТЫ</p>
                <br><br>
                <p class="woc-schedule-name">
                    16:00 - 16:45 «Юридические аспекты ведения пациента/клиента онлайн»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <span style="font-family: 'Roboto';">Спикер:</span> Валентинова Людмила Константиновна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    16:45 - 17:30
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            «Про компетенции, успех и удовлетворение от работы»<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Гердт Алевтина Михайловна<br><br>
                            «Профилактика профессионального выгорания»<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Холодова Анна Анатольевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-main-name" style='text-align: center;'>
                    20 октября 2024г.
                </p>
                <br><br><br>
                <p class="woc-main-intro" style="font-family: Philosopher;">Секция: ПЕДИАТРИЯ</p>
                <br><br>
                <p class="woc-schedule-name">
                    10:00 - 10:45 «Большие проблемы «маленьких» мышц»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Нарушение работы сфинктеров желудочно-кишечного тракта у детей.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Коваль Ольга Николаевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    10:45 - 11:30 «Улучшение психоневрологического развития ребенка»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Лечебно-профилактические стратегии.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Гердт Алевтина Михайловна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    11:30 - 12:15 Перерыв
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">

                        </div>
                    </div>
                </div>
                <p class="woc-main-intro" style="font-family: Philosopher;">Секция: ГАСТРОЭНТЕРОЛОГИЯ</p>
                <br><br>
                <p class="woc-schedule-name">
                    12:15 - 13:00 «Печень-королева метаболизма»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Разбор клинических случаев.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Холодова Анна Анатольевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    13:00 - 13:45 «Паразитоз»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Алгоритм лечения. Фатальные ошибки.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Гердт Алевтина Михайловна
                            <br>
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
                            <img src="/img/spec13.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Коваль Ольга Николаевна</u> - врач педиатр ООО «Клиника Интегра», специалист в области детской нутрициологии.
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
                <!--<div style="padding: 30px;border: 2px solid #026118;border-radius: 20px;text-align: center;background-color: #8ac201;color: black;">
                    Полный список спикеров в разработке.<br/>
                    Мы желаем, чтобы лучшие делились своим опытом и знаниями.
                </div><br/><br/>-->
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec22.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Валентинова Людмила Константиновна</u> - Юрист, партнер юридической компании INLAW. Нутрициолог Медицинского центра врачебной косметологии «Совершенство»
                        </div>
                    </div>
                </div>

                <p class="woc-schedule-name">
                    ДЛЯ КОГО:
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Для тех, кто хочет развиваться в сфере здоровья и красоты. Кто мечтает запускать свои проекты онлайн и офлайн, или желает масштабировать существующий. Для всех, чья миссия - улучшать качество жизни людей!
                        </div>
                    </div>
                </div>
                <div class="img-box">
                    <img class="img-box-one" src="/img/doctors.jpg" alt="">
                    <img class="img-box-one" src="/img/nutritionist.jpg" alt="">
                    <img class="img-box-one" src="/img/trener.jpg" alt="">
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
                                    <p>Организаторы оставляют за собой право поменять расписание.</p>
                                </li>
                                <li>
                                   <p style="font-family: Philosopher;">По окончанию конференции предусмотрен сертификат.</p>
                                </li>
                                <li>
                                    <p>❗️После регистрации и оплаты участия, на указанную электронную почту (ПРОВЕРЯТЬ ПРАВИЛЬНОСТЬ НАПИСАНИЯ!) вам приходит автоматическое письмо с персональным доступом в телеграмм-канал участников конференции, где будет размещена ссылка на онлайн трансляцию 19 и 20 октября. Просьба не передавать ссылку третьим лицам.</p>
                                </li>
                                <li>
                                    <p style="font-family: Philosopher;">Всем онлайн участникам так же будут направлены материалы конференции в PDF-формате (или формате для печати) в день конференции.</p>
                                </li>
                                <li>
                                    <p>Доступ к лекциям и материалам конференции - 6 месяцев со дня проведения.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <div id="form-to-pay" class="cwib-detail clearfix">
                    <?php if (false): ?>
                        <p style="color: rgb(237, 195, 71);font-family: Roboto;font-size: 20px;">
                            Мероприятие состоится ОНЛАЙН 19 - 20 октября, 2024г. ВРЕМЯ ПОДКЛЮЧЕНИЯ МОСКОВСКОЕ!
                        </p>
                        <p class="cwib-textstatic">
                            Стоимость участия
                        </p>
                        <p class="cwib-price">
                            12 000 руб.
                        </p>
                    <?php endif; ?>
                </div>
                <div class="cw-contact clearfix">

                    <?php
                    if (false) {
                        $form = ActiveForm::begin(['action' => '/registration', 'options' => ['class' => 'cwc-form wo-form']]);
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'name')->textInput(['placeholder' => 'Ф.И.О для печати сертификата'])->label(false);
                        echo '</label>';
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'email')->textInput(['placeholder' => 'Эл. почта'])->label(false);
                        echo '</label>';
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'phone')->textInput(['placeholder' => 'Телефон'])->label(false);
                        echo '</label>';
                        echo $form->field($model, 'activity')->hiddenInput(['value' => 'lkWA2GvOaUJ0'])->label(false);
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
