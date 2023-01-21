<?php

$this->title = "Медицинская конференция «Здоровье в твоих руках»";

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
        <div class="woc-preview clearfix" style="background-image:url('/img/medical-conference.jpg');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-intro">
                        Медицинская конференция (ОЧНО)
                    </p>
                    <p class="woc-main-time">
                        18 марта 2023 г.
                    </p>
                    <p class="woc-main-name">
                        «Здоровье в твоих руках»
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        г. Москва, район Москва Сити, Метро «Выставочная», <br>Пресненская набережная 12, башня «Восток»
                    </p>
                </div>
            </div>
            <div style="text-align: center;">
                <a class="woc-link-to-form scrollto" href="#form-to-pay">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </div>
            <div class="woc-second">
                <p style="text-align: center; font-size: 28px; margin-bottom: 20px;">РАСПИСАНИЕ<sup>*</sup>:</p>
                <p class="woc-schedule-name">
                    10:00-11:00 Регистрация
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line"></div>
                </div>
                <p class="woc-schedule-name">
                    11:00-12:00 «Гипотиреоз и Адренальный стресс»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/mspec1.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Калинченко Светлана Юрьевна</u> - Эндокринолог, сексолог, уролог, д.м.н., профессор, заведующая кафедрой эндокринологии с курсом  холистической медицины ФНМО МИ РУДН, научный руководитель Клиники профессора Калинченко, академик РЭА, Президент Российского филиала Европейского общества по изучению вопросов старения у мужчин, член Американского Общества Эндокринологов.
                            <br><br>
                            <p>
                                <b>Гипотиреоз- заболевание всего организма.</b><br>
                            </p>
                            <ul>
                                <li>Сложности диагностики или как не пропустить диагноз.</li>
                                <li>Тиреоидиные гормоны - мощные жиросжигатели. Кому, когда можно/нельзя?</li>
                                <li>Как лечить гипотиреоз и ненавредить.</li>
                                <li>Нюансы тактики ведения пациента с гипотиреозом.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <p class="woc-schedule-name">
                    12:00-13:00 «Слаженная работа 11 органов пищеварительной системы. Тонкости и частые ошибки»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec3.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Гердт Алевтина Михайловна</u> - к.м.н., терапевт, невролог, сомнолог, специалист в
                            области интегративной медицины и клинической нутрициологии, медицинский директор
                            концептуальной ООО «Клиника Интегра»
                            <br><br>
                            <p>
                                <b>От слаженной работы пищеварительной системы зависит здоровье всего организма.
                                    Разбираем тонкости и нюансы практической работы с пациентом.</b><br>
                            </p>
                            <ul>
                                <li>Держать баланс между низкой функцией одного органа и высокой функцией другого.</li>
                                <li>От паразитов до вирусов. Как сохранить результат от лечения.</li>
                                <li>Разрушение мифов современной гастроэнтерологии.</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    13:00-14:00 Сытный кофе-брейк (включён в стоимость!)
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line"></div>
                </div>

                <p class="woc-schedule-name">
                    14:00-15:00 «Дисплазия соединительной ткани междисциплинарная проблема»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec2.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Холодова Анна Анатольевна</u> - эндокринолог, андролог, специалист в области
                            интегративной медицины и клинической нутрициологии, основатель и главный врач концептуальной
                            ООО «Клиника Интегра»
                            <br><br>
                            <p>
                                <b>ДСТ- это целый спектр заболеваний: от геморроя до нарушения ритма. Простота
                                    постановки диагноза поражает. В той или иной степени ДСТ страдает более 70%
                                    населения планеты.</b><br>
                            </p>
                            <ul>
                                <li>Диагноз, который не требует лабораторных подтверждений.</li>
                                <li>Дисплазия- от патологической гибкости до операционного стола.</li>
                                <li>Генетические аспекты заболевания.</li>
                                <li>Лечение и профилактика тяжёлых осложнений.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <p class="woc-schedule-name">
                    15:00-16:00 «Когда кекс, вместо секса»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/mspec2.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Оксенюк Екатерина Юрьевна</u> - врач-терапевт, клинический нутрициолог, член Национально Общества Диетологов России, ординатор кафедры эндокринологии РУДН
                            <br><br>
                            <p>
                                <b>Половое влечение - это маркер общего психического и физического состояния Нежелание близости можно и нужно корректировать!</b><br>
                            </p>
                            <ul>
                                <li>Сниженное либидо - это не причина, а следствие и маркер многих дефицитов в организме и мышлении.</li>
                                <li>Как влияют родительские послания на нашу сексуальную жизнь.</li>
                                <li>Факторы снижающие либидо и их устранение с пошаговым инструктажем.</li>
                                <li>Домашнее задание с планом восстановления сексуального влечения.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><sup>*</sup> Организаторы оставляют за собой право вносить изменения в расписание.</p>
            </div>
            <div class="clearfix">
                <div id="form-to-pay" class="cwib-detail clearfix">
                    <?php if (true): ?>
                        <p style="color: rgb(237, 195, 71);font-family: Roboto;font-size: 20px;">
                            Мероприятие состоится ОЧНО 18 марта 2023г. в г. Москва, район Москва Сити, Метро «Выставочная», Пресненская набережная 12, башня «Восток»
                        </p>
                        <p class="cwib-textstatic">
                            Стоимость участия
                        </p>
                        <p class="cwib-price">
                            4 500 руб
                        </p>
                    <?php endif; ?>
                </div>
                <div class="cw-contact clearfix">

                    <?php
                    if (true) {
                        $form = ActiveForm::begin(['action' => '/medical-conference-registration', 'options' => ['class' => 'cwc-form wo-form']]);
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'name')->textInput(['placeholder' => 'Ф.И.О'])->label(false);
                        echo '</label>';
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'email')->textInput(['placeholder' => 'Эл. почта'])->label(false);
                        echo $form->field($model, 'activity')->hiddenInput(['value' => 'hEkBGPYeqe4b'])->label(false);
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
                        echo "<button class='wo-close'>Мероприятие закончилось</button>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


