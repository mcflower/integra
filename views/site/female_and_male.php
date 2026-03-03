<?php

$this->title = "Конференция для жителей и гостей г.Тольятти от врачей практиков «ЖЕНСКОЕ-МУЖСКОЕ»";

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
        <div class="woc-preview clearfix" style="background-image:url('/img/malefemale.jpg');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-intro">
                        Конференция для жителей и гостей г. Тольятти от врачей практиков
                    </p>
                    <p class="woc-main-time">
                        15 марта 2026 г.
                    </p>
                    <p class="woc-main-name">
                        «ЖЕНСКОЕ-МУЖСКОЕ»
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        г. Тольятти, <span style="white-space: nowrap;">ул. Юбилейная, д.25, Конференц-зал «Лада Медиа», 2 этаж</span>
                    </p>
                </div>
            </div>
            <div class="woc-second">
                <div>
                    <ul>
                        <li>
                            Мальчик и девочка рождаются, чтобы стать мамой и папой.<br/>
                            Профилактика бесплодия с детства.<br/><br/>
                        </li>
                        <li>
                            Женское начало или как без гормонов сохранить хрупкое женское ГОРМОНАЛЬНОЕ ЗДОРОВЬЕ<br/><br/>
                        </li>
                        <li>
                            МУЖЧИНА-это «Муж и Чин».<br/>
                            Работоспособность. Эрекция. Ресурс.<br/>
                            Способы самостоятельной профилактики преждевременного мужского старения и КАК ОНО ВЫГЛЯДИТ!<br/>
                        </li>
                    </ul>
                    <br>
                    Стоимость - 1 590 руб.
                </div>
                <div style="margin: 35px auto;text-align: center;"><a href="#action-form-lp" style="display: block;padding: 20px 10px;background: rgb(237, 195, 71);width: 270px;margin: 0 auto;border-radius: 34px;color: white;">ЗАРЕГИСТРИРОВАТЬСЯ</a></div>
                <hr>
                <p style="text-align: center; font-size: 23px; margin-bottom: 20px;"><span style="text-decoration: underline;">Спикеры конференции:</span></p>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/gerdt.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>ГЕРДТ АЛЕВТИНА МИХАЙЛОВНА</u> - к.м.н. терапевт, невролог, эндокринолог, нутрициолог, Д-доктор
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/koval.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>КОВАЛЬ ОЛЬГА НИКОЛАЕВНА</u> - Врач педиатр, специалист в области детской нутрициологии, превентивной интегративной медицины. Д-Доктор
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/berestneva.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>БЕРЕСТНЕВА ОЛЬГА ГЕННАДЬЕВНА</u> - Детский эндокринолог. Эксперт Клиники Интегра в области подбора тактики по преодолению генетического неблагополучия у подростков, Д-доктор
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/mishina.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>МИШИНА АЛЬФИЯ ФАНИРОВНА</u> - Врач детский гинеколог, нутрициолог, специалист по преодолению полиморфизмов генов, связанных с гормональными и воспалительными заболеваниями, Д-доктор
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/epifanova.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>ЕПИФАНОВА ВАЛЕРИЯ ВИТАЛЬЕВНА</u> - Врач эндокринолог, специалист по преодолению нутритивных дефицитов связанных с гормональными нарушениями.
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/balakireva.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>БАЛАКИРЕВА АННА НИКОЛАЕВНА</u> - Врач акушер-гинеколог, специалист в области превентивной интегративной медицины, Д-доктор, Эксперт Клиники Интегра по вопросам женского здоровья, долголетия и эстетической гинекологии.
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/holodova.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>ХОЛОДОВА АННА АНАТОЛЬЕВНА</u> - Врач эндокринолог, андролог, специалист в области интегративной превентивной медицины. Д-доктор. Основатель и главный врач ООО «Клиника Интегра»
                        </div>
                    </div>
                </div>
                <br>
                <p style="text-align: center; font-size: 23px; margin-bottom: 20px;"><span style="text-decoration: underline;">ТАЙМИНГ ЛЕКЦИЙ:</span></p>
                <br><br>
                <p class="woc-main-name">
                    14:30-15:00 Регистрация
                </p>
                <div class="woc-main-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                        </div>
                    </div>
                </div>
                <br>
                <p class="woc-main-name">
                    15:00-16:30 Часть 1
                </p>
                <div class="woc-main-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                        </div>
                    </div>
                </div>
                <br>
                <p class="woc-main-name">
                    16:30-17:00 Живое общение
                </p>
                <div class="woc-main-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                        </div>
                    </div>
                </div>
                <br>
                <p class="woc-main-name">
                    17:00-18:30 Часть 2
                </p>
                <div class="woc-main-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                        </div>
                    </div>
                </div>
<!--                <br>-->

<!--                <br>-->
                <p style="color: darkgray;"><b>Конференция проводится при поддержке компании NSP</b></p>
<!--                <br>-->
<!--                <p>Вы получите ответы на ваши вопросы, практические советы и рекомендации от врачей для здоровья и красоты.</p>-->
            </div>

            <div class="cwib-detail clearfix">
                <?php if(true):?>
                <p class="cwib-datetime">
                    Мероприятие состоится 15 марта 2026 г. в 14:30. в г.Тольятти, ул. Юбилейная, д.25, Конференц-зал «Лада Медиа», 2 этаж
                </p>
                <p class="cwib-textstatic">
                    Стоимость участия
                </p>
                <p class="cwib-price">
                    1 590 руб
                </p>
                <?php endif; ?>
            </div>
            <div id="action-form-lp" class="cw-contact clearfix">
                <?php
                if (true) {
                    $form = ActiveForm::begin(['action' => '/registration', 'options' => ['class' => 'cwc-form wo-form']]);
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'name')->textInput(['placeholder' =>'ФИО'])->label(false);
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'phone')->textInput(['placeholder' =>'Телефон'])->label(false);
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'email')->textInput(['placeholder' =>'Эл. почта'])->label(false);
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'nsp')->textInput(['placeholder' =>'НОМЕР В NSP если знаете'])->label(false);
                    echo '</label>';
                    echo $form->field($model, 'activity')->hiddenInput(['value' => 'bDTNgNx3dkIm'])->label(false);
                    echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'reCaptcha')->widget(
                            \himiklab\yii2\recaptcha\ReCaptcha::className(),
                            ['siteKey' => '6LfAxCYaAAAAAHek6vUl-nnehdm1Q0UqBb1VaDBm', 'widgetOptions' => ['data-size' => 'compact', 'class' => '']]

                        )->label(false);
                        echo '</label>';
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

