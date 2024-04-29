<?php

$this->title = "Курс «Аутоиммунные заболевания»";

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
        <div class="woc-preview clearfix" style="background-image:url('/img/autoimmune.jpg');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-intro">
                        Курс
                    </p>
                    <p class="woc-main-time">
                        с 20 по 24 марта 2024 г.
                    </p>
                    <p class="woc-main-name">
                        «АУТОИММУННЫЕ ЗАБОЛЕВАНИЯ»
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        Первый масштабный проект в этой области, направленный на просвещение в отношении причин, течения и последствий АИЗ, а так же понимания своей персональной лечебно-профилактической тактики.
                    </p>
                </div>
            </div>
            <div style="text-align: center;">
                <a class="woc-link-to-form scrollto" href="#form-to-pay">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </div>
            <div class="woc-second">
                <p>Практически нет семьи, где не было случаев какого-либо аутоиммунного заболевания.</p><br>
                <p class="woc-schedule-name">
                    Для кого этот курс?
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <ul>
                        <li>для пациентов имеющих любое АИЗ</li>
                        <li>для родителей 🚩</li>
                        <li>для врачей всех специальностей</li>
                        <li>для нутрициологов</li>
                        <li>для спортивных тренеров-реабилитологов</li>
                        <li>для диетологов</li>
                        <li>для понимания о профилактике</li>
                    </ul>
                </div>
                <p class="woc-schedule-name">
                    Кураторы курса
                </p>
                <br>

                <div class="woc-schedule-line clearfix"></div>
                <br>
                <br>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec3.jpg"/>
                        </div>
                        <br>
                        <div class="sp-text">
                            <u>ГЕРДТ Алевтина Михайловна</u> - к.м.н. терапевт, невролог, эндокринолог, специалист в области целостного подхода к лечению и профилактике АИЗ.
                            <br><br>
                        </div>
                    </div>
                </div>
                <br>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec2.jpg"/>
                        </div>
                        <br>
                        <div class="sp-text">
                            <u>ХОЛОДОВА Анна Анатольевна</u> - эндокринолог, андролог, специалист в области профилактической и интегративной медицины.
                            <br><br>
                        </div>
                    </div>
                </div>
                <br>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec21.jpg"/>
                        </div>
                        <br>
                        <div class="sp-text">
                            <u>ИВАНОВА Ксения Львовна</u> - врач ревматолог ООО «Клиника Интегра»
                            <br><br>
                        </div>
                    </div>
                </div>
                <br>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec20.jpg"/>
                        </div>
                        <br>
                        <div class="sp-text">
                            <u>ГРАЧЕВА Надежда Сергеевна</u> - врач-терапевт, специалист вегето-резонансной диагностики и биорезонансной терапии, член экспертного совета ООО «Клиника Интегра» по выбору тактики лечения АИЗ.
                            <br><br>
                        </div>
                    </div>
                </div>
                <br>
                <p class="woc-schedule-name">
                    Программа:
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <br>
                    <p class="woc-schedule-name">20 марта</p>
                    <p>«АУТОИММУННЫЕ ЗАБОЛЕВАНИЯ: особенности течения; польза и риски традиционного лечения».</p>
                    <p>Спикер: Иванова К.Л.</p>
                    <br>
                    <p class="woc-schedule-name">21 марта</p>
                    <p>«Аутоиммунные заболевания. Взгляд эндокринолога. Эндокринные причины и пути профилактики АИЗ». Шоковая, революционная информация.</p>
                    <p>Спикер: Холодова А.А.</p>
                    <br>
                    <p class="woc-schedule-name">22 марта</p>
                    <p>«Невидимая угроза или как паразиты влияют на аутоиммунные заболевания и что с этим делать»</p>
                    <p>Спикер: Грачева Н.С.</p>
                    <br>
                    <p class="woc-schedule-name">23 марта</p>
                    <p>«Головная боль, апатия и аутоиммунные заболевания». Причины, следствие, лечебно-профилактическая стратегия самопомощи.</p>
                    <p>Спикер: Гердт А.М.</p>
                    <br>
                    <p class="woc-schedule-name">24 марта</p>
                    <p>Свободное общение в чате</p>
                    <p>Брифинг Вопрос/ответ</p>
                    <hr>
                    <p>Все семинары и информ поддержка в официальном телеграмм-канале программы.</p>
                    <p>Время проведения семинаров по МСК времени, и сообщается накануне семинара.</p>
                </div>
                <br><br>
                <p class="woc-schedule-name">
                    Как всё будет проходить:
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <ul>
                        <li>ПОСЛЕ РЕГИСТРАЦИИ И ОПЛАТЫ ВАМ ПРИДЕТ ПИСЬМО НА УКАЗАННУЮ ЭЛЕКТРОННУЮ ПОЧТУ С ПЕРСОНАЛЬНОЙ ССЫЛКОЙ НА КАНАЛ КУРСА (просьба не передавать ссылку 3-м лицам!)</li>
                        <li>Если вы покупаете участие в программе для другого человека - необходимо указать его электронную почту, ФИО, город и телефон</li>
                    </ul>
                    <p style="font-weight: 600;font-family: 'Roboto';">Нельзя изменить свой старт, но можно стартовать сейчас и изменить свой финиш 🏁</p><br>
                    <p>Комментарии к лечебной тактике носят информационный характер и не могут быть приравнены к полноценной врачебной консультации.</p>
                </div><br>
                <p class="woc-schedule-name">
                    Варианты участия:
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <p style="text-align: left; font-size: 24px; margin-bottom: 10px;">✅ Базовый. Стоимость - 2490₽</p>
                    <p>Вам доступны все семинары, общение в чате в формате вопрос-ответ</p>
                    <br>
                    <p style="text-align: left; font-size: 24px; margin-bottom: 10px;">✅ Специалист. Стоимость - 5900₽</p>
                    <p>В пакет «Специалист» входит дополнительная возможность получить комментарии* к своим анализам и обследованиям (список прилагается):</p>
                    <ul>
                        <li>ОАК (общий анализ крови с лейкоформулой)</li>
                        <li>Ферритин</li>
                        <li>ОЖСС (или ЖСС)</li>
                        <li>Сывороточное железо</li>
                        <li>Трансферрин</li>
                        <li>Креатинин</li>
                        <li>АЛТ, АСТ, ГГТП</li>
                        <li>В12 (цианкобламин)</li>
                        <li>СРБ</li>
                        <li>Лактат</li>
                        <li>Общий белок и белковые фракции</li>
                        <li>Паратгормон</li>
                        <li>Кальций общий</li>
                        <li>ТТГ</li>
                        <li>Т4 свободный</li>
                        <li>Т3 свободный</li>
                        <li>Узи органов брюшной полости (не более чем годовалой давности)</li>
                        <li>Узи органов малого таза для женщин 40+ (не более чем 6 мем давности)</li>
                    </ul>
                    <p style="font-weight: 600;font-family: 'Roboto';">
                        Анализы должны быть предоставлены не позднее чем, 24 апреля 2024 г. <br>
                        Анализы предоставленные не в полном объеме или позднее обозначенной даты - не будут приняты к рассмотрению в рамках данного курса.
                    </p>
                    <br>
                    <p><sup>*</sup>Комментарии к анализам не могут быть приравнены к полноценной врачебной консультации. При этом, если это будет нужно, вы получите оповещение о необходимости приема специалиста и применения специфических препаратов, а так же персональную тактику направленную на улучшение текущего самочувствия.</p>
                </div>
            </div>
            <div class="clearfix">
                <div id="form-to-pay" class="cwib-detail clearfix">
                    <?php if (true): ?>
                        <p style="color: rgb(237, 195, 71);font-family: Roboto;font-size: 20px;">
                            Курс пройдёт в Телеграм-канале
                        </p>
                        <p class="cwib-textstatic">
                            Стоимость участия
                        </p>
                        <p class="cwib-price">
                            от 2490 руб
                        </p>
                    <?php endif; ?>
                </div>
                <div class="cw-contact clearfix">

                    <?php
                    if (true) {
                        $form = ActiveForm::begin(['action' => '/registration', 'options' => ['class' => 'cwc-form wo-form']]);
                        echo '<label class="cwc-formgroup">';
                        echo $form->field($model, 'activity')->dropDownList([
                            'Nv7xji8zv4AC' => 'Базовый - 2 490 руб.',
                            '2WYPsSkAE6Fu' => 'Специалист - 5 900 руб.'
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
