<?php

$this->title = "Курс «Гипотиреоз и гипоксия. От понимания к решению.»";

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
        <div class="woc-preview clearfix" style="background-image:url('/img/course-of-hypoxia.jpg');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-intro">
                        Курс
                    </p>
                    <p class="woc-main-time">
                        16 октября 2023 г.
                    </p>
                    <p class="woc-main-name">
                        «Гипотиреоз и гипоксия»
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        От понимания к решению
                    </p>
                </div>
            </div>
            <div style="text-align: center;">
                <a class="woc-link-to-form scrollto" href="#form-to-pay">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </div>
            <div class="woc-second">
                <p>Курс направлен на привлечение внимания к проблеме. Отработке навыка определения наилучшей тактики лечения и профилактики с опорой на индивидуальные особенности.</p><br>
                <p>Подходит для врачей всех специальностей, нутрициологов, диетологов, фитнес-тренеров.</p><br>
                <p>100% понятен для людей без специального образования.</p>
                <br>
                <p class="woc-schedule-name">
                    Ведущая
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec2.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Холодова Анна Анатольевна</u> - эндокринолог, андролог, специалист в области интегративной медицины и клинической нутрициологии, основатель и гл. врач ООО «Клиника Интегра», преподаватель, создатель авторских программ по сохранению здоровья и профилактики эндокринных заболеваний.
                            <br><br>
                        </div>
                    </div>
                </div>
                <br>
                <p class="woc-schedule-name">
                    Темы:
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <ul>
                        <li>Сложности диагностики. Понятия.</li>
                        <li>Учимся видеть в анализах нарушение функции и диагноз.</li>
                        <li>Методы нутритивной коррекции.</li>
                        <li>Лечебная тактика (в том числе гормональная): кому, когда можно/нельзя.</li>
                        <li>Нормальные анализы, плохое самочувствие - поиск решений.</li>
                    </ul>
                    <p><b>Вы получите</b> инструменты для эффективной профилактики одного из самых распространенных состояний -гипотиреоза, а так же я научу вас как предотвратить анемию, что принимать, как правильно оценивать анализы.</p>
                </div>
                <br><br>
                <p class="woc-schedule-name">
                    Как всё будет проходить:
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <ul>
                        <li>ПОСЛЕ РЕГИСТРАЦИИ И ОПЛАТЫ ВАМ ПРИДЕТ ПИСЬМО НА УКАЗАННУЮ ЭЛЕКТРОННУЮ ПОЧТУ СО ССЫЛКОЙ НА КАНАЛ КУРСА (просьба не передавать ссылку 3-м лицам!)</li>
                        <li>Семинар курса пройдёт в Телеграм-канале, доступен будет в записи в течение 50 дней (т. е до 7 декабря)</li>
                        <li>До этой даты (включительно) вы можете задавать свои вопросы по теме семинара, и получать ответы.</li>
                    </ul>
                </div><br>
                <p class="woc-schedule-name">
                    Варианты участия:
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <p style="text-align: left; font-size: 24px; margin-bottom: 10px;">✅ Базовый. Стоимость - 999₽</p>
                    <p>Доступ к материалам курса: семинар, алгоритмы, профилактические схемы/кейсы, ответы на вопросы. Не включает комментарии анализам)</p>
                    <br>
                    <p style="text-align: left; font-size: 24px; margin-bottom: 10px;">✅ Премиум. Стоимость - 2999₽</p>
                    <p>В пакет премиум входит дополнительная возможность получить комментарии<sup>*</sup> к своим анализам (список прилагается):</p>
                    <ul>
                        <li>ОАК</li>
                        <li>Сывороточное железо</li>
                        <li>ОЖСС</li>
                        <li>Общий белок</li>
                        <li>Гомоцистеин</li>
                        <li>В12 (цианкобламин)</li>
                        <li>ТТГ</li>
                        <li>Т4 свободный</li>
                        <li>Т3 свободный</li>
                        <li>Пролактин</li>
                    </ul>
                    <p style="font-weight: 600;font-family: 'Roboto';">Анализы должны быть предоставлены не позднее чем, 1 ноября 2023 г. Анализы предоставленные не в полном объеме или позднее обозначенной даты - не будут приняты к рассмотрению.</p>
                    <br>
                    <p><sup>*</sup>Комментарии к анализам не могут быть приравнены к полноценной врачебной консультации. При этом вы получите оповещение о необходимости приема специалиста и применения препаратов (если это будет нужно), а так же персональную тактику направленную на улучшение текущего самочувствия.</p>
                </div>
            </div>
            <div class="clearfix">
                <div id="form-to-pay" class="cwib-detail clearfix">
                    <?php if (false): ?>
                        <p style="color: rgb(237, 195, 71);font-family: Roboto;font-size: 20px;">
                            Курс пройдёт в Телеграм-канале
                        </p>
                        <p class="cwib-textstatic">
                            Стоимость участия
                        </p>
                        <p class="cwib-price">
                            от 999 руб
                        </p>
                    <?php endif; ?>
                </div>
                <div class="cw-contact clearfix">

                    <?php
                    if (false) {
                        $form = ActiveForm::begin(['action' => '/registration', 'options' => ['class' => 'cwc-form wo-form']]);
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'activity')->dropDownList([
                            'o9AIGZkWDg2F' => 'Базовый - 999 руб.',
                            'aNcrN48Nfzff' => 'Премиум - 2 999 руб.'
                        ], ['prompt' => 'Необходимо выбрать...', 'style' => ''])->label(false);
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
                        echo "<button class='wo-close'>Мероприятие закончилось</button>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
