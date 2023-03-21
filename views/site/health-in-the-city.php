<?php

$this->title = "Городская конференция из цикла «Здоровье в Большом городе»";

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
                        Городская конференция (ОЧНО)
                    </p>
                    <p class="woc-main-time">
                        9 апреля 2023 г.
                    </p>
                    <p class="woc-main-name">
                         «Здоровье в Большом городе»
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
                    13:30-14:10 «Жить в стрессе, а не доживать»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <!--<div class="sp-photo">
                            <img src="/img/mspec1.jpg"/>
                        </div>-->
                        <div class="sp-text">
                            <ul>
                                <li>Мой персональный стресменеджмент;</li>
                                <li>Правила входа и выхода из стресса;</li>
                                <li>Когда нужно брать помощь специалиста.</li>
                            </ul>
                            <br>
                            <u>Хамзина Гузаль Расимовна</u> - Врач терапевт, эндокринолог Клиники Интегра, специалист в области Кито-питания и клинической нутрициологии.
                        </div>
                    </div>
                </div>

                <p class="woc-schedule-name">
                    14:10-14:50 «Родительские заблуждение о здоровье детей»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <!--<div class="sp-photo">
                            <img src="/img/spec3.jpg"/>
                        </div>-->
                        <div class="sp-text">
                            <p>
                                <b>Как отпустить ребенка в 25 лет в здоровую - взрослую жизнь</b><br>
                            </p>
                            <br>
                            <u>Коваль Ольга Николаевна</u> - врач педиатр ООО «Клиника Интегра», специалист в области детской нутрициологии.
                        </div>
                    </div>
                </div>

                <p class="woc-schedule-name">
                    14:50-15:30 «Секс и сексуальность»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <!--<div class="sp-photo">
                            <img src="/img/spec2.jpg"/>
                        </div>-->
                        <div class="sp-text">
                            <p>
                                <b>Разговор о том, как продлить гармонию в паре… Или обрести.</b><br>
                            </p>
                            <br>
                            <u>Балакирева Анна Николаевна</u> - Акушер-гинеколог, специалист в области интегративной, превентивной медицины и клинической нутрициологии
                        </div>
                    </div>
                </div>

                <p class="woc-schedule-name">
                    15:30-16:30 ПЕРЕРЫВ. Фуршет. Общение.
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line"></div>
                </div>

                <p class="woc-schedule-name">
                    16:30-17:30 «Красота, ум, эрекция»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <!--<div class="sp-photo">
                            <img src="/img/spec2.jpg"/>
                        </div>-->
                        <div class="sp-text">
                            <p>
                                <b>Есть ли выигравшие после 45 лет? Интерактивное обсуждение.</b><br>
                            </p>
                            <br>
                            <u>Бабенко Наталья Евгеньевна</u> - Врач кардиолог ООО «Клиника Интегра»<br/>
                            <u>Холодова Анна Анатольевна</u> - Эндокринолог, главный врач концептуальной ООО «Клиника Интегра»
                        </div>
                    </div>
                </div>

                <p class="woc-schedule-name">
                    17:30-18:00 «Успех для здоровых»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <!--<div class="sp-photo">
                            <img src="/img/spec3.jpg"/>
                        </div>-->
                        <div class="sp-text">
                            <p>
                                <b>Как не перепутать основы здоровья с модными трендами.</b><br>
                            </p>
                            <br>
                            <u>Гердт Алевтина Михайловна</u> - к.м.н., терапевт, невролог, сомнолог, специалист в
                            области интегративной медицины и клинической нутрициологии, медицинский директор
                            концептуальной ООО «Клиника Интегра»

                        </div>
                    </div>
                </div>
                <p>Категория: 18+ <br/><br/><sup>*</sup> Организаторы оставляют за собой право вносить изменения в расписание.</p>
            </div>
            <div class="clearfix">
                <div id="form-to-pay" class="cwib-detail clearfix">
                    <?php if (true): ?>
                        <p style="color: rgb(237, 195, 71);font-family: Roboto;font-size: 20px;">
                            Мероприятие состоится ОЧНО 9 апреля 2023г. в г. Тольятти, Платановая ул., д. 6, ресторан «Ренессанс»
                        </p>
                        <p class="cwib-textstatic">
                            Стоимость участия (до 1 апреля, после 2 000 руб)
                        </p>
                        <p class="cwib-price">
                            1 500 руб
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
                        echo $form->field($model, 'activity')->hiddenInput(['value' => 'qCEmeiO8EA3q'])->label(false);
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


