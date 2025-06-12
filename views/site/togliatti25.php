<?php

$this->title = "VII КОНФЕРЕНЦИЯ ПРИМЕНИМАЯ МЕДИЦИНА";

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
        <div class="woc-preview clearfix" style="background-image:url('/img/tlt25.png');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-name clearfix"
                       style="color:#026118; font-family: Philosopher;font-size: 34px;margin-bottom: 15px;">
                        17 - 18 МАЯ 2025 г.
                    </p>
                    <p class="woc-main-intro">
                        VII КОНФЕРЕНЦИЯ
                    </p>

                    <p class="woc-main-name">
                        ПРИМЕНИМАЯ МЕДИЦИНА
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        Практико-применимые знания в области медицины от врачей-практиков для здоровья людей<br/>
                        Место проведения: г. Тольятти, Лесопарковое ш., 55, Отель «Лада Резорт»
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
                    <div class="woc-main-about" style="background-color: #8ac102;padding: 20px;border-radius: 20px;">
                        Врачам всех специальностей, диетологам, нутрициологам. Для тех, кто хочет развиваться в сфере
                        здоровья и красоты. Кто мечтает запускать свои проекты онлайн и офлайн, или желает
                        масштабировать существующий. Для всех, чья миссия - улучшать качество жизни людей!
                    </div>
                </div>
            </div>
            <div class="woc-second">
                <p class="woc-main-name" style='text-align: center;'>
                    17 мая 2025г.
                </p>
                <br><br><br>
                <p class="woc-schedule-name">
                    10:00 - 11:00
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Регистрация
                        </div>
                    </div>
                </div>
                <p class="woc-main-intro" style="font-family: Philosopher;">Блок: ПРОФЕССИОНАЛЬНЫЕ КОМПЕТЕНЦИИ</p>
                <br>
                <br>
                <p class="woc-schedule-name">
                    11:00 - 11:45 «Лабораторная диагностика»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Интерпретация противоречивых данных. Выбор вектора.<br/>
                            <span style="font-family: 'Roboto';">Спикер:</span> Гердт Алевтина Михайловна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    11:45 - 12:20 МастерКласс: «ГЕНЕТИКА»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Практическая выгода для пациента и врача.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Холодова Анна Анатольевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    12:20 - 12:45 «БИОИМПЕДАНС»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Уникальное исследование. Простота интерпретации.<br/>
                            <span style="font-family: 'Roboto';">Спикер:</span> Гердт Алевтина Михайловна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-main-intro" style="font-family: Philosopher;">Блок: Нейро-иммунно-эндокринология</p>
                <br>
                <br>
                <p class="woc-schedule-name">
                    12:45 - 13:20 «Врожденный и приобретенный иммунитет»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Профилактика гормональных нарушений и АИЗ с нуля лет.<br/>
                            <span style="font-family: 'Roboto';">Спикер:</span> Коваль Ольга Николаевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    13:20 - 14:15 «Нейромедиаторы»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Неучтенные участники гормонального благополучия.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Холодова Анна Анатольевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    14:15 - 15:00 Обеденный кофе-брейк
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">

                        </div>
                    </div>
                </div>
                <div class="woc-attention">
                    <p class="woc-main-intro" style="font-family: Philosopher;">БЛОК: ПРОДВИЖЕНИЕ</p>
                    <br><br>
                    <p class="woc-schedule-name">
                        15:00 - 15:45 «ЭМОЦИОНАЛЬНЫЙ ИНТЕЛЛЕКТ»
                    </p>
                    <div class="woc-schedule-line clearfix"></div>
                    <div class="speakers clearfix">
                        <div class="sp-line">
                            <div class="sp-text">
                                Soft skill No 1 современного делового человека.<br>
                                <span style="font-family: 'Roboto';">Спикер:</span> Лазарева Светлана Евгеньевна - эксперт
                                по деловому этикету и эффективной коммуникации
                            </div>
                        </div>
                    </div>
                    <p class="woc-schedule-name">
                        15:45 - 16:15 «SMM. Представление себя»
                    </p>
                    <div class="woc-schedule-line clearfix"></div>
                    <div class="speakers clearfix">
                        <div class="sp-line">
                            <div class="sp-text">
                                Формирование лояльной аудитории. Где, как, с чего начать и эффективно продолжать!<br>
                                <span style="font-family: 'Roboto';">Спикер:</span> Рада Соловьева - SMM-специалист.
                                Продвижение в соцсетях более 6 лет, более 100 проектов.
                            </div>
                        </div>
                    </div>
                    <p class="woc-schedule-name">
                        16:45 - 17:30 «ПИСАТЬ НЕЛЬЗЯ ЗВОНИТЬ»
                    </p>
                    <div class="woc-schedule-line clearfix"></div>
                    <div class="speakers clearfix">
                        <div class="sp-line">
                            <div class="sp-text">
                                Правила цифрового этикета и деловой переписки.<br>
                                <span style="font-family: 'Roboto';">Спикер:</span> Лазарева Светлана Евгеньевна - эксперт
                                по деловому этикету и эффективной коммуникации
                            </div>
                        </div>
                    </div>
                    <p class="woc-schedule-name">
                        19:00 ГАЛА-УЖИН Волжские просторы<sup>*</sup>
                    </p>
                    <div class="woc-schedule-line clearfix"></div>
                    <div class="speakers clearfix">
                        <div class="sp-line">
                            <div class="sp-text">
                                Дресс-код все цвета реки (голубой, бирюзовый, синий, белый)<br/>
                                * регистрация на ужин и оплата организована в чате участников конференции
                            </div>
                        </div>
                    </div>
                </div>
                <p class="woc-main-name" style='text-align: center;'>
                    18 мая 2025г.
                </p>
                <br><br><br>
                <p class="woc-main-intro" style="font-family: Philosopher;">БЛОК: СЕРДЦЕ И СОСУДЫ</p>
                <br><br>
                <p class="woc-schedule-name">
                    10:00 - 10:30 «Мочевая кислота»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Протокольный маркер сосудистого неблагополучия. Разбираемся в причинах повышения. Тактика
                            нутрициолога и врача.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Бакшеев Максим Георгиевич
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    10:30 - 11:15 «КОЛЛАГЕН»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Нарушение баланса сборки и распада белка красоты и здоровья сосудов. Нюансы нутритивного протокола.<br/>
                            <span style="font-family: 'Roboto';">Спикер:</span> Гердт Алевтина Михайловна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    11:15 - 12:00 Время на выселение из номеров
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Для проживающих в отеле «Лада Резорт»
                        </div>
                    </div>
                </div>
                <p class="woc-main-intro" style="font-family: Philosopher;">БЛОК: ГАСТРОЭНТЕРОЛОГИЯ</p>
                <br><br>
                <p class="woc-schedule-name">
                    12:00 - 12:40 «Хронический панкреатит»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Интерпретация инструментальных и лабораторных данных. Бережная реабилитация функции
                            Поджелудочной железы.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Тимофеева Людмила Васильевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    12:40 - 13:00 «Гипераммонийемия»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Недооцененный маркер саркопении. Пути преодоления.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Холодова Анна Анатольевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-main-intro" style="font-family: Philosopher;">БЛОК: МУЖСКОЕ/ЖЕНСКОЕ ЗДОРОВЬЕ</p>
                <br><br>
                <p class="woc-schedule-name">
                    12:45 - 13:30 «Молочная железа - мишень гормонального неблагополучия»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Лечебно-профилактическая стратегия доступная каждому специалисту.
                            <span style="font-family: 'Roboto';">Спикер:</span> Гвоздева Марина Евгеньевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    13:30 - 14:15 «Второе сердце мужчины - ПРОСТАТА»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Нутритивный протокол и гормональный менеджмент. Практический опыт.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Холодова Анна Анатольевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    14:15 ТОРЖЕСТВЕННОЕ закрытие конференции
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix"></div>


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
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec26.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Тимофеева Людмила Васильевна</u> - врач гастроэнтеролог, диетолог концептуальной клиники ОКСИМЕД, г. Оренбург., Д-доктор, специалист в области интегративной и превентивной медицины.
                        </div>
                    </div>
                </div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec27.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Бакшеев Максим Георгиевич</u> - Врач терапевт, гематолог, кардиолог. Член Ассоциации врачей здоровья наций БРИКС. Заведующий поликлиническим подразделением А2МЕД Самара
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
                                    <p style="font-family: Philosopher;">Все кофе-паузы включены в стоимость участия конференции!</p>
                                </li>
                                <li>
                                    Ужин оплачивается дополнительно! Информация в чате участников (ссылка на чат приходит вам в ответном письме, после завершения регистрации).
                                </li>
                                <li>
                                    <p>Организаторы оставляют за собой право поменять расписание.</p>
                                </li>
                                <li>
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
                                        здесь</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <div id="form-to-pay" class="cwib-detail clearfix">
                    <?php if (false): ?>
                        <p style="color: rgb(237, 195, 71);font-family: Roboto;font-size: 20px;">
                            Мероприятие состоится 17 - 18 МАЯ, 2025 г.<br/>
                            Доступно только ОНЛАЙН (регистрация на очное участие закрыта)<br/>
                            Начало всех лекций +1 час к Московскому времени
                        </p>
                        <p class="cwib-textstatic">
                            Стоимость участия
                        </p>
                        <p class="cwib-price">
                            15 000 руб.<!--<sup>*</sup>-->
                        </p>
<!--                        <p class="cwc-line1"><br/>* Предложение действительно по 31 марта (включительно), с 1 апреля стоимость 15 000 руб.</p>-->
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
                        echo $form->field($model, 'name')->textInput(['placeholder' => 'Ф.И.О для печати сертификата'])->label(false);
                        echo '</label>';
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'email')->textInput(['placeholder' => 'Эл. почта'])->label(false);
                        echo '</label>';
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'phone')->textInput(['placeholder' => 'Телефон'])->label(false);
                        echo '</label>';
                        echo $form->field($model, 'activity')->hiddenInput(['value' => 'KBFHlvYuaATi'])->label(false);
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
