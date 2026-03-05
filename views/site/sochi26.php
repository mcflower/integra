<?php

$this->title = "IX КОНФЕРЕНЦИЯ ПРИМЕНИМАЯ МЕДИЦИНА";

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
        <div class="woc-preview clearfix" style="background-image:url('/img/sochi26.png');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-name clearfix"
                       style="color:#026118; font-family: Philosopher;font-size: 34px;margin-bottom: 15px;">
                        24 - 25 АПРЕЛЯ 2026 г.
                    </p>
                    <p class="woc-main-intro">
                        IX КОНФЕРЕНЦИЯ
                    </p>

                    <p class="woc-main-name">
                        ПРИМЕНИМАЯ МЕДИЦИНА
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        Практико-применимые знания в области медицины от врачей-практиков для здоровья людей<br/>
                        Место проведения: г. Сочи, Красная Поляна, Отель «Парк Инн» (наб. Лаванда, 5)
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
                        Врачам всех специальностей, диетологам, нутрициологам, косметологам!
                        <br>
                        Для тех, кто хочет развиваться в сфере здоровья и красоты и долголетия, прокачать свои знания в
                        области здоровья детей и профилактики онкологии.
                        <br>
                        Тем, кто желает разбираться в многообразии лечебно-профилактических стратегий и верно выбирать
                        тактику.
                    </div>
                </div>
            </div>
            <div class="woc-second">
                <p class="woc-main-name" style='text-align: center;'>
                    24 апреля 2026г.
                </p>
                <br><br><br>
                <p class="woc-schedule-name">
                    14:00 - 14:45 Регистрация, приветственный кофе-брейк
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">

                        </div>
                    </div>
                </div>
                <p class="woc-main-intro" style="font-family: Philosopher;">Секция: ГАСТРОЭНТЕРОЛОГИЯ</p>
                <br>
                <br>
                <p class="woc-schedule-name">
                    14:45 - 15:15 «Атрофический гастрит»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Причины. Последствия. Лечение. Активная профилактика осложнений.<br/>
                            <span style="font-family: 'Roboto';">Спикер:</span> Каракчиева Юлия Сергеевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    15:15 - 15:45 «Атопический дерматит у детей»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Очевидные и неочевидные взаимоствязи: кишечник, мозг, кожа. Выбор персонального
                            сценария.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Коваль Ольга Николаевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    15:45 - 16:30 Кофе-брейк (включен в стоимость билета)
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">

                        </div>
                    </div>
                </div>
                <p class="woc-main-intro" style="font-family: Philosopher;">Секция: МИТОХОНДРИАЛЬНОЕ ЗДОРОВЬЕ</p>
                <br>
                <br>
                <p class="woc-schedule-name">
                    16:30 - 17:00 «Заблуждения о митохондриях»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Знания определяют верную тактику профилактики и лечения митохондриальной дисфункции.<br/>
                            Как не перепутать маркетинг с медициной и реально оказывать помощь.<br/>
                            <span style="font-family: 'Roboto';">Спикер:</span> Холодова Анна Анатольевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    17:00 - 17:30 «Митохондриальная дисфункция, как основа мутации клетки при онкологических
                    заболеваниях»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Профилактика онкологии и реабилитация онкопациента.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Гердт Алевтина Михайловна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    17:30 - 18:00 Подведение итогов первого дня конференции
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                        </div>
                    </div>
                </div>
                <p class="woc-main-name" style='text-align: center;'>
                    25 апреля 2026г.
                </p>
                <br><br><br>
                <p class="woc-schedule-name">
                    9:30 - 10:00 Сбор участников
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                        </div>
                    </div>
                </div>
                <p class="woc-main-intro" style="font-family: Philosopher;">Секция: МЕТАБОЛИЧЕСКОЕ ЗДОРОВЬЕ</p>
                <br>
                <br>
                <p class="woc-schedule-name">
                    10:00 - 10:30 «Сахарный диабет, который лечится»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            5 разных видов диабета и совершенно разные подходы.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Холодова Анна Анатольевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    10:30 - 11:00 «Низкорослый ребенок»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Это норма и патология? Когда бить тревогу и ждать ли скачков роста.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Коваль Ольга Николаевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    11:00 - 11:30 Время на выселение из номеров
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                        </div>
                    </div>
                </div>
                <p class="woc-main-intro" style="font-family: Philosopher;">Секция: КРАСОТА И ЖЕНСКОЕ ЗДОРОВЬЕ</p>
                <br>
                <br>
                <p class="woc-schedule-name">
                    11:30 - 12:00 «Нарушение второй фазы менструального цикла-социальная проблема»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Орущая мать, недовольная жена и феномен «чайлдфри».<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Боцула Юлия Владимировна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    12:00 - 12:30 «Выпадение волос. Андрогенная алопеция»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Обоснован диагноз? Меняем тактику лечения на 180 градусов.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Чурова Валерия Сергеевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-main-intro" style="font-family: Philosopher;">Секция: НЕЙРОПСИХИАТРИЯ</p>
                <br>
                <br>
                <p class="woc-schedule-name">
                    12:30 - 13:00 «Нарушения сна у детей и взрослых»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Когда шторы блэкаут, мелатонин и вечер без гаджетов не помогают.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Гердт Алевтина Михайловна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    13:00 - 13:30 «Синдром дефицита внимания и гиперактивности у детей»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Всегда ли виновата генетика? Какие заболевания могут проявляться как СДВГ. Растим успешного
                            и активного взрослого.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Коваль Ольга Николаевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    13:30 - 15:00 Обед шведский стол (включен в стоимость билета)
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">

                        </div>
                    </div>
                </div>
                <p class="woc-main-intro" style="font-family: Philosopher;">Секция: БИЗНЕС И РАЗВИТИЕ</p>
                <br>
                <br>
                <p class="woc-schedule-name">
                    15:00 - 16:30 «Продажи онлайн и оффлайн для ЗОЖ профессионала»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Как говорить с клиентами/пациентами на одном языке и системно получать заявки на свою работу. 100% применимые стратегии.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Мамаева Юлия Михайловна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    16:30 - 17:00 Торжественное окончание конференции
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
                            <u>Коваль Ольга Николаевна</u> - врач педиатр ООО «Клиника Интегра», специалист в области
                            детской нутрициологии.
                        </div>
                    </div>
                </div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec9.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Каракчиева Юлия Сергеевна</u> - врач терапевт, эндокринолог. Врач функциональной
                            диагностики, Д-доктор, Специалист в области детской и взрослой нутрициологии.
                        </div>
                    </div>
                </div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec8.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Боцула Юлия Владимировна</u> - гинеколог-эндокринолог, врач антивозрастной, интегративной
                            и превентивной медицины. Спикер международной школы Anti-Age Expert, наставник врачей ААЕ.
                            Ведущий специалист по ведению женщин в менопаузальном периоде г. Москва Expert Clinics.
                        </div>
                    </div>
                </div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec10.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Чурова Валерия Сергеевна</u> - врач терапевт. Специалист в области клинической нутрициологии. Практикующий косметолог.
                        </div>
                    </div>
                </div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/mamaeva.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Мамаева Юлия Михайловна</u> - наставник по продажам и продвижению для ЗОЖ экспертов. Дипломированный маркетолог. Дипломированный нутрициолог и фитнес тренер.
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
                                    <p>❗️После регистрации и оплаты участия, на указанную электронную почту (ПРОВЕРЯТЬ
                                        ПРАВИЛЬНОСТЬ НАПИСАНИЯ) вам приходит автоматическое письмо с персональным
                                        доступом в телеграмм-канал участников конференции. Просьба не передавать ссылку
                                        третьим лицам.</p>
                                </li>
                                <li>
                                    Для проживающих в отеле «Парк Инн» действует промокод «ПРИМЕНИМАЯ» с 23 по 26
                                    апреля. Просьба бронировать свое место в отеле заблаговременно.
                                </li>
                                <li>
                                    <p>Организаторы оставляют за собой право поменять расписание.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <div id="form-to-pay" class="cwib-detail clearfix">
                    <?php if (true): ?>
                        <p style="color: rgb(237, 195, 71);font-family: Roboto;font-size: 20px;">
                            Мероприятие состоится 24 - 25 апреля, 2026г. в г. Сочи, Красная Поляна, Отель «Парк Инн»
                            (наб. Лаванда, 5)
                        </p>
                        <p class="cwib-textstatic">
                            Стоимость участия
                        </p>
                        <p class="cwib-price">
                            12 900 руб.<sup>*</sup>
                        </p>
                        <p class="cwc-line1"><br/>* Предложение действительно по 11 января (включительно), с 1 января
                            стоимость 15 900 руб.</p>
                    <?php endif; ?>
                </div>
                <div class="cw-contact clearfix">

                    <?php
                    if (true) {
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
                        echo $form->field($model, 'activity')->hiddenInput(['value' => 'UuOSCjF8PPi1'])->label(false);
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'reCaptcha')->widget(
                            \himiklab\yii2\recaptcha\ReCaptcha::className(),
                            ['siteKey' => '6LfAxCYaAAAAAHek6vUl-nnehdm1Q0UqBb1VaDBm', 'widgetOptions' => ['data-size' => 'compact', 'class' => '']]

                        )->label(false);
                        echo '</label>';
                        echo '<div class="policy-container clearfix">
                                <p class="cwc-line1">
                                    Нажимая кнопку «Оплатить участие» вы даете согласие на обработку персональных данных<br>
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
