<?php

$this->title = "Городской девичник «ГОРМОНАЛЬНО ЗДОРОВАЯ ЖЕНЩИНА»";

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
        <div class="woc-preview clearfix" style="background-image:url('/img/bachelorette.jpg');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-intro">
                        Городской девичник с врачами «Клиника Интегра»
                    </p>
                    <p class="woc-main-time">
                        28 августа 2022г. 16:00
                    </p>
                    <p class="woc-main-name">
                        «ГОРМОНАЛЬНО ЗДОРОВАЯ ЖЕНЩИНА»
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        г. Тольятти, <span style="white-space: nowrap;">гостиница Парк Отель 4*</span>
                    </p>
                </div>
            </div>
            <div class="woc-second">
                <div>
                    <ul>
                        <li>
                            4 часа непрерывного общения с ведущими врачами «Клиники Интегра»
                        </li>
                        <li>
                            Кофе-брейк и фотосессия с профессиональным и самым позитивным фотографом - Екатериной Демотченко
                        </li>
                        <li>
                            Разбор вашего гормонального фона (анонимно)
                        </li>
                    </ul>
                    <br>
                    Стоимость - 2 500 руб.
                </div>
                <div style="margin: 35px auto;text-align: center;"><a href="#action-form-lp" style="display: block;padding: 20px 10px;background: rgb(237, 195, 71);width: 270px;margin: 0 auto;border-radius: 34px;color: white;">ЗАРЕГИСТРИРОВАТЬСЯ</a></div>
                <hr>
                <p style="text-align: center; font-size: 23px; margin-bottom: 20px;"><span style="text-decoration: underline;">Семинар проводят:</span></p>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec2.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Холодова Анна Анатольевна</u> - Врач эндокринолог, андролог, нутрициолог, Д-доктор, член Самарской областной ассоциации врачей, специалист в области клинической нутрициологии, интегративной превентивной медицины; основатель и главный врач ООО «Клиника Интегра»
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec5.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Балакирева Анна Николаевна</u> - Врач акушер-гинеколог, врач ультразвуковой диагностики, специалист в области эндокринной гинекологии, клинической нутрициологии, детокс-терапии, Д-доктор
                        </div>
                    </div>
                </div>
                <br>
                <p style="text-align: center; font-size: 23px; margin-bottom: 20px;"><span style="text-decoration: underline;">Программа:</span></p>
                <br><br>
                <p class="woc-main-name">
                    16:00-16:30
                </p>
                <div class="woc-main-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <u>Сбор участников</u>
                            <br><br>
                            Регистрация для участия в лотерее (заполнение анонимных анкет для разбора вашего гормонального статуса).
                        </div>
                    </div>
                </div>
                <br>
                <p class="woc-main-name">
                    16:30-17:30
                </p>
                <div class="woc-main-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <u>Семинар «Гормоны. Красота. Любовь»</u>
                            <br><br>
                            <ul>
                                <li>Самый главный гормон любви- прогестерон.</li>
                                <li>Что такое ПМС. Как не начать рыдать, раздражаться и разрушать все вокруг.</li>
                                <li>Симптомы ПМС. Какие гормоны в ответе за красоту во 2 фазе менструального цикла.</li>
                                <li>Болезненные месячные. Причины. Помощь.</li>
                                <li>Рабочие схемы Нутритивной поддержки.</li>
                            </ul>
                            ВЫ НАУЧИТЕСЬ ПОДБИРАТЬ СЕБЕ ТЕРАПИЮ САМОСТОЯТЕЛЬНО
                            <br><br>
                            УЗНАЕТЕ КОГДА 100% НУЖНО ИДТИ К ВРАЧУ (КАКОМУ!)
                        </div>
                    </div>
                </div>
                <br>
                <p class="woc-main-name">
                    17:30-18:30
                </p>
                <div class="woc-main-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <u>Кофе-брейк</u>
                            <br><br>
                            Живое общение, закулисные беседы, фотосессия по желанию.
                        </div>
                    </div>
                </div>
                <br>
                <p class="woc-main-name">
                    18:30-19:30
                </p>
                <div class="woc-main-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <u>Разбор вашего гормонального фона (лотерея)</u>
                            <br><br>
                            Мы выберем несколько участниц (абсолютно анонимно) и разберём результаты анкетирования и предоставленных исследований.
                        </div>
                    </div>
                </div>
                <br>
                <p class="woc-main-name">
                    Официальное окончание в 20:00
                </p>
                <br>
                <br>
                <br>
                <p><b>Интересно будет всем. 100% практикоприменимо для врачей и пациентов</b></p>
                <br>
                <p>Вы получите ответы на ваши вопросы, практические советы и рекомендации от врачей для здоровья и красоты.</p>
            </div>

            <div class="cwib-detail clearfix">
                <?php if(true):?>
                <p class="cwib-datetime">
                    Мероприятие состоится 28 августа 2022г. в 16:00. в г.Тольятти, гостиница Парк Отель 4*
                </p>
                <p class="cwib-textstatic">
                    Стоимость участия
                </p>
                <p class="cwib-price">
                    2 500 руб
                </p>
                <?php endif; ?>
            </div>
            <div id="action-form-lp" class="cw-contact clearfix">
                <?php
                if (true) {
                    $form = ActiveForm::begin(['action' => '/success-city-event', 'options' => ['class' => 'cwc-form wo-form']]);
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'name')->textInput(['placeholder' =>'ФИО'])->label(false);
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'phone')->textInput(['placeholder' =>'Телефон'])->label(false);
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'email')->textInput(['placeholder' =>'Эл. почта'])->label(false);
                    echo '</label>';
                    echo $form->field($model, 'activity')->hiddenInput(['value' => 'nUbgZDyv1Gry'])->label(false);
                    echo '<div class="policy-container clearfix">
                            <p class="cwc-line1">
                                Нажимая кнопку "Зарегистрироваться" вы даете согласие на обработку персональных данных<br>
                            </p>
                            <a class="cwc-line2" href="/files/privacy_policy.pdf" target="_blank">
                                Политика конфиденциальности<br>
                            </a>
                            <a class="cwc-line3" href="/files/user_agreement.pdf" target="_blank">
                                Договор оферты<br>
                            </a>
                        </div>';
                    echo Html::submitButton("ЗАРЕГИСТРИРОВАТЬСЯ");

                    ActiveForm::end();
                } else {
                    echo "<button class='wo-close'>Мероприятие закончилось</button>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
$this->registerJs(
    '$("document").ready(function(){
        $("a[href^=\'#\']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
            return false;
        });
    });'
);
?>

