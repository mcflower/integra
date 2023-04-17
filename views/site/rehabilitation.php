<?php

$this->title = "Авторская программа реабилитации и профилактики «Сон. Стресс. Секс.»";

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
        <div class="woc-preview clearfix" style="background-image:url('/img/rehabilitation.jpg');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-intro">
                        Авторская программа реабилитации и профилактики
                    </p>
                    <p class="woc-main-time">
                        10 - 25 мая 2023 г.
                    </p>
                    <p class="woc-main-name">
                        «Сон. Стресс. Секс.»
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        Здоровый сон, здоровый секс- это источники счастья, а положительный стресс, который не разрушает, а делает нас сильнее- это залог счастливой и здоровой жизни.
                    </p>
                </div>
            </div>
            <div style="text-align: center;">
                <a class="woc-link-to-form scrollto" href="#form-to-pay">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </div>
            <div class="woc-second">
                <p style="text-align: center; font-size: 28px; margin-bottom: 20px;">В рамках программы запланировано 3 семинара:</p>

                <p class="woc-schedule-name">
                    «Стресс и Секс. Выживание пары»
                </p>
                <div class="woc-schedule-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec4.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Смолярчук Ирина Геннадьевна</u> - психоаналитик, гештальт-терапевт. Руководитель и основатель антикризисного центра в г.Москве. Эксперт комиссии по делам несовершеннолетних и защите их прав. Спикер-эксперт на канале РБК, Радио Москвы, Сити ФМ
                            <br><br>
                        </div>
                    </div>
                </div>

                <p class="woc-schedule-name">
                    «От нарушения сна до тяжелой депрессии - несколько шагов»
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
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    «Стресс. Секс. Сексуальность»
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
                        </div>
                    </div>
                </div>

                <p class="woc-schedule-name">
                    Каждый участник получит:
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <ul>
                        <li>Уникальные комбинации нутритивной поддержки</li>
                        <li>Материал в формате PDF для личного использования</li>
                        <li>Комплекс видео-уроков по интимной гимнастике</li>
                        <li>Блок уроков «Дыхательтные практики»</li>
                        <li>Программа питания от ведущих нутрициологов и диетологов в поддержку основных гормонов и нейромедиаторов ответственных за стресс, сон, секс.</li>
                        <li>Сопровождение специалистов по нарушению сна, секс-коучей, психолога, врача эндокринолога, андролога Холодовой Анны Анатольевны</li>
                    </ul>
                    <p>По желанию вы можете выполнить до программы или во время программы чекап: ОАК, ферритин, сыв. железо, трансферин, В12, В9, кортизол слюны, холестерин общ, АЛТ, АСТ, паратгормон, кальций общ, альбумин</p>
                    <br>
                    <p>Все предоставленные данные обследования просматриваются врачом -куратором программы, Холодовой Анной Анатольевной в срок, обозначенный проведением программы.</p>
                </div>
            </div>
            <div class="clearfix">
                <div id="form-to-pay" class="cwib-detail clearfix">
                    <?php if (true): ?>
                        <p style="color: rgb(237, 195, 71);font-family: Roboto;font-size: 20px;">
                            Программа состоится с 10 по 25 мая 2023г. После оплаты участия команда помощников добавит вас в официальный телеграмм_канал «СЕКС_СОН_СТРЕСС»
                        </p>
                        <p class="cwib-textstatic">
                            Стоимость участия
                        </p>
                        <p class="cwib-price">
                            500 руб
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
                        echo $form->field($model, 'activity')->hiddenInput(['value' => 'yZfZNm5I8EIX'])->label(false);
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
