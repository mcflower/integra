<?php

$this->title = "Конференция из цикла «Применимая медицина» ВЕСЕННЯЯ ВОЛГА";

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
        <div class="woc-preview clearfix" style="background-image:url('/img/river.jpg');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-intro">
                        Конференция из цикла «Применимая медицина»
                    </p>
                    <p class="woc-main-time">
                        18 - 19 мая 2024 г.
                    </p>
                    <p class="woc-main-name">
                        «ВЕСЕННЯЯ ВОЛГА»
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        Место проведения: г. Тольятти «Парк отель», ул. Комзина 6
                    </p>
                </div>
            </div>
            <div style="text-align: center;">
                <a class="woc-link-to-form scrollto" href="#form-to-pay">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </div>
            <div class="woc-second">
                <p style="text-align: center; font-size: 28px; margin-bottom: 20px;">Спикеры Конференции:</p>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec3.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Гердт Алевтина Михайловна</u> - к.м.н., терапевт, невролог, специалист в
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
                            <img src="/img/spec24.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Харитонова Гульнара</u> - основатель, продюсер и маркетолог международной академии по нутрициолгии и диетотерапии. Руководитель «Службы заботы» онлайн-проекта Радислава Гандапаса с 2021г. В сфере рекламы более 25 лет
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
                    ЗАЧЕМ ЕХАТЬ НА КОНФЕРЕНЦИЮ:
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <ul>
                                <li>
                                    Познакомиться и пообщаться с экспертами и коллегами вживую
                                </li>
                                <li>
                                   Завести полезные знакомства
                                </li>
                                <li>
                                    Получить новые актуальные знания, идеи для развития своих проектов, стратегию увеличения прибыли
                                </li>
                                <li>
                                    Расширить границы профессиональных компетенций и личных возможностей
                                </li>
                                <li>
                                    Получить заряд мотивации и позитивной энергии в кругу близких по духу людей.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p style="text-align: center; font-size: 28px; margin-bottom: 20px;">Программа Конфернции:</p>
                <p class="woc-main-name" style='text-align: center;'>
                    18 мая 2024г.
                </p>
                <br><br><br>
                <p class="woc-schedule-name">
                    13:00 - 14:00
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Регистрация
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    14:00 - 15:00 «Генетика - инструмент в руках прогрессивного специалиста»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Спикер: Холодова Анна Анатольевна
                            <br>
                            <ul>
                                <li>Генетический код и понятие о генетике, гене, наследовании</li>
                                <li>Генетические заболевания и генетические дефициты: общность и разница</li>
                                <li>20 генов, которые необходимо знать современному специалисту</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    15:00-16:00 сытный кофе-брейк
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <p class="woc-schedule-name">
                    16:00 - 16:45 «Пережить пубертат или Как из гусеницы превратиться в бабочку»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Спикер: Коваль Ольга Николаевна
                            <br>
                            <ul>
                                <li>Нюансы введения маленького пациента во взрослую жизнь</li>
                                <li>Становление гормонального здоровья</li>
                                <li>Поддержание нервной системы и психики</li>
                                <li>Особенности ведения подростка мальчика и девочки</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    16:45 - 17:30 «Маркетинг в медицине и нутрициологии. Последние тренды и тенденции»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Спикер: Харитонова Гульнара
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    19:00 Ужин
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Дресс-код «Зеленый свет» входит в пакет «конференция + ужин»
                        </div>
                    </div>
                </div>
                <p class="woc-main-name" style='text-align: center;'>
                    19 мая 2024г.
                </p>
                <br><br><br>
                <p class="woc-schedule-name">
                    10:30 - 11:00
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Сбор участников
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    10:00-11:00 «Ошибки в медицине и нутрициологии или про потерю здоровья пациента и репутации специалиста»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Спикер: Гердт Алевтина Михайловна
                            <br>
                            <ul>
                                <li>Частые клинические случаи и распространенные ошибки</li>
                                <li>Сочетанные заболевания/состояния, и как подобрать оптимальное лечение без увеличения нагрузки на органы детокса</li>
                                <li>Экологичное ведение клиента</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    11:00-12:30 «Поддержка гормонального здоровья с рождения и до старости»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Спикер: Холодова Анна Анатольевна
                            <br>
                            <ul>
                                <li>Поддержание гормонального здоровья у детей</li>
                                <li>Гормонально здоровые подростка</li>
                                <li>Место гормональной терапии в 30+</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    12:30-13:00 «Принципы выбора лекарственных средств и БАДов»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Спикер: Гердт Алевтина Михайловна
                            <br>
                            <ul>
                                <li>Как из 100 фирм выбрать максимально эффективные и безопасные 10%</li>
                                <li>Не все золото, что блестит</li>
                                <li>Я хочу превратиться из начинающего специалиста в опытного в кратчайшие сроки</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    13:00-14:00 Фотосессия. Торжественный кофе-брейк
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix"></div>


                <p style="font-family: Philosopher;">Количество мест ограничено.</p>
                <p>Организаторы оставляют за собой право поменять расписание.</p>
            </div>
            <div class="clearfix">
                <div id="form-to-pay" class="cwib-detail clearfix">
                    <?php if (false): ?>
                        <p style="color: rgb(237, 195, 71);font-family: Roboto;font-size: 20px;">
                            Мероприятие состоится 18 - 19 мая, 2024г. в г. Тольятти, ул. Комзина 6, «Парк отель»
                        </p>
                        <p class="cwib-textstatic">
                            Стоимость участия
                        </p>
                        <p class="cwib-price">
                            от 7 500 руб.
                        </p>
                        <!--<p class="cwc-line1"><br/>* Предложение действительно по 9 марта (включительно), далее:<br/> Тариф «Семинары» - 7 500 руб. <br/>Тариф «Семинары + Торжественный ужин» - 10 900 руб.</p>-->
                    <?php endif; ?>
                </div>
                <div class="cw-contact clearfix">

                    <?php
                    if (false) {
                        $form = ActiveForm::begin(['action' => '/registration', 'options' => ['class' => 'cwc-form wo-form']]);
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'activity')->dropDownList([
                            'Ao9amitKMzBD' => 'Семинары - 7 500 руб.',
                            '5VP4t16lSC7W' => 'Семинары + Торжественный ужин - 10 900 руб.'
                        ], ['prompt' => 'Выберите тариф...', 'style' => ''])->label(false);
                        echo '</label>';
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'name')->textInput(['placeholder' => 'Ф.И.О'])->label(false);
                        echo '</label>';
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'email')->textInput(['placeholder' => 'Эл. почта'])->label(false);
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


