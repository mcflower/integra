<?php

$this->title = "Интерактивная конференция для жителей и гостей города «ДЕРЖИ ЛИЦО»";

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$ref = $_GET['ref'] ?: 'han';
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

    .guide-content {
        height: auto;
        margin-left: auto;
        margin-top: 60px;
        width: 88.041086%;
        margin-right: auto;
        max-width: 1200px;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
        border-bottom-left-radius: 30px;
        padding-bottom: 0px;
        background-color: rgb(255, 255, 255);
        display: flex;
        flex-direction: column;
    }
    .payment-info {
        display: flex;
        margin-top: 40px;
        justify-content: space-between;
    }

    .pi-detail {
        width: 45%;
        padding-left: 40px;
    }

    .pi-contact-form {
        width: 45%;
    }

    .pi-text-price {
        font-size: 21px;
        text-align: left;
        font-weight: 600;
        line-height: 1em;
        color: rgb(141, 179, 147);
        font-family: Philosopher;
    }

    .pi-price {
        font-size: 60px;
        text-align: left;
        font-weight: 600;
        color: rgb(141, 179, 147);
        font-family: Philosopher;
    }

    .pi-contact-form form {
        display: flex;
        flex-direction: column;
    }

    .pi-formgroup {
        width: 90%;
    }

    .field-dynamicmodel-policy label {
        display: inline;
        margin-bottom: 10px;
        cursor: pointer;
        font-weight: 400;
    }

    .field-dynamicmodel-policy label input{
        display: inline;
        margin-right: 5px;
    }

    .pi-formgroup input[type=text] {
        height: 45px;
        font-size: 20px;
    }

    .pi-contact-form button {
        height: 60px;
        margin-left: 0px;
        margin-top: 20px;
        clear: both;
        width: 100%;
        margin-right: -30px;
        border-top-left-radius: 30px;
        border-bottom-right-radius: 30px;
        display: block;
        background-color: rgb(237, 195, 71);
        font-family: Roboto;
        color: rgb(255, 255, 255);
        font-size: 21px;
        text-align: center;
        font-weight: normal;
        line-height: 1em;
        border: none;
        padding: 0;
    }
    
    .form-group {
        margin-bottom: 0;
    }

    @media only screen and (max-width: 900px) {
        .payment-info {
            flex-direction: column;
        }

        .pi-detail {
            width: 100%;
            padding-left: 40px;
            padding-right: 40px;
        }

        .pi-contact-form {
            width: 100%;
            padding-left: 40px;
            padding-right: 40px;
            margin-top: 40px;
        }

        .pi-formgroup {
            width: 100%;
        }

        .pi-contact-form button {
            width: 100%;
            margin-right: 0px;
            border-bottom-right-radius: 0px;
            border-top-right-radius: 30px;
        }
    }
</style>
<div class="wo-anons clearfix">
    <div class="guide-content">
        <div class="woc-preview clearfix" style="background-image:url('/img/youth-and-health.jpg');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-intro">
                        Интерактивная конференция для жителей и гостей города.
                    </p>
                    <p class="woc-main-time">
                        25 октября 2026 г.
                    </p>
                    <p class="woc-main-name">
                        «ДЕРЖИ ЛИЦО»
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        г. Тольятти, <span style="white-space: nowrap;">ул. Платановая д. 6, Ресторан «Ренесанс»</span>
                    </p>
                </div>
            </div>
            <div class="woc-second">
                <p class="woc-schedule-name">
                    Стратегия молодости и здоровья на трех уровнях!
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="woc-main-about">
                            <ul>
                                <li>Интегративная медицина</li>
                                <li>Экспертная косметология</li>
                                <li>Пластическая хирургия</li>
                            </ul>
                            <p>Мололость нельзя купить одной процедурой. Эксперты двух клиник представляют систему для поддержания и сохранения молодости лица от здоровья организма до современных эстетических технологий.</p>
                        </div>
                    </div>
                </div>


                <div style="margin: 35px auto;text-align: center;"><a href="#action-form-lp" style="display: block;padding: 20px 10px;background: rgb(237, 195, 71);width: 270px;margin: 0 auto;border-radius: 34px;color: white;">ЗАРЕГИСТРИРОВАТЬСЯ</a></div>
                <hr>

                <p class="woc-schedule-name">
                    На конференции вы узнаете:
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="woc-main-about">
                            <ul style="list-style: none; margin-top: 0; padding-left: 0;">
                                <li>✔️ С чего действительно начинается сохранение молодости лица.</li>
                                <li>✔️ Почему анализы и работа с организмом иногда дают лицу больше, чем косметика.</li>
                                <li>✔️ Кортизол — главный враг молодости или очередной миф? Как гормоны действительно влияют на лицо.</li>
                                <li>✔️ Какие аппаратные и инъекционные методики реально работают, а какие давно пора перестать делать.</li>
                                <li>✔️ Как определить свой тип старения и подобрать стратегию именно для себя.</li>
                                <li>✔️ Нависшее веко — можно ли решить проблему у косметолога или уже пора к пластическому хирургу.</li>
                                <li>✔️ Как подготовиться к операции и восстановиться быстрее.</li>
                                <li>✔️ Какие мифы о молодости, косметологии и здоровье давно пора забыть.</li>
                                <li>✔️ Реальные клинические кейсы пациентов с разбором врачей.</li>
                                <li>✔️ Новейшие методики пластической хирургии, которые уже применяются в ведущих клиниках мира.</li>
                            </ul>
                            <p>В программе интерактив, разбор ваших ситуаций (по желанию), полезные лекции, подарки и сюрпризы от организаторов и партнеров!</p>
                        </div>
                    </div>
                </div>
                <p style="text-align: center; font-size: 23px; margin-bottom: 20px;"><span style="text-decoration: underline;">Спикеры конференции:</span></p>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/holodova.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Холодова Анна Анатольевна</u> - Врач эндокринолог, андролог, основатель и главный врач ООО «Клиника Интегра» г. Тольятти, член международного сообщества эндокринологов ENDO
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/hurtina.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Хуртина Юлия Валериевна</u> - Врач-дерматовенеролог, косметолог. Основатель, руководитель и главный врач клиник "Линии Лиц" и "Будь здоров".
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/gerdt.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Гердт Алевтина Михайловна</u> - к.м.н., невролог, эндокринолог, специалист в области клинической нутрициологии. Член международного сообщества эндокринологов ENDO
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/prudnikova.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Прудникова Елена Викторовна</u> - Врач дерматовенеролог-косметолог высшей категории Клиники Интегра, нутрициолог, специалист в области интегративной и превентивной медицины
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/zoz.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Зоз Ольга Викторовна</u> - Врач-дерматовенеролог, косметолог клиники Линии Лиц, стаж работы более 33 лет
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/lebedeva.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Лебедева Юлия Владимировна</u> - к.м.н., пластический хирург клиники Линии Лиц со специализацией на эстетике лица
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/schkolenko.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Школенко Мария Владимировна</u> - Врач-эндокринолог, терапевт. Руководитель экспертного центра Клиники Интегра по управлению гликемией и лечению Сахарного диабета
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/sicheva.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Сычева Татьяна Михайловна</u> - Практикующий психолог. Основатель и ведущий специалист Академии Психолога Сычевой. Научный руководитель магистрантов кафедры педагогики и психологии Тольяттинского Государственного Университета. Стаж практики 14 лет.
                        </div>
                    </div>
                </div>
            </div>
            <div class="woc-second">
                <p class="woc-main-name" style='text-align: center;'>
                    ПОДРОБНАЯ ПРОГРАММА
                </p>
                <br><br><br>
                <p class="woc-schedule-name">
                    12:00 ВэлКом, регистрация
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">

                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    12:30 Открытие мероприятия
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    13:00 Мифы о молодости, косметологии и здоровье
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    13:20 «Почему лицо стареет. Анатомия, которую должен знать каждый»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <span style="font-family: 'Roboto';">Спикер:</span> Зоз Ольга Викторовна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    13:35 «Каждому лицу своя стратегия»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Типы старения без теории. Реальные пациенты, решения, результаты.<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Хуртина Юлия Валериевна<br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    14:05 «Тихий разрушитель коллагена»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Недооцененная причина НЕ ТОЛЬКО возрастных изменений кожи лица.<br/>
                            <span style="font-family: 'Roboto';">Спикер:</span> Школенко Мария Владимировна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    14:20 «ЛИЦО ДИСПЛАСТИКА. Персональный рецепт для красоты и здоровья лица»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Генетические аспекты дисплазии соединительной ткани.<br>
                            Домашние заготовки на каждый день.
                            <br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Гердт Алевтина Михайловна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    14:40 Динамическая пауза (топовый тренер Шумилова Анна)
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    14:50 Сытный кофе-брейк (включен в стоимость билета)
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    15:30 «45-летние подростки. Угревые высыпания, морщины и птоз в комплекте - с чего начинать коррекцию»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Что такое поздние акне. Причины, обследование и основные направления в лечении.<br>
                            Гормоны, влияющие на появления акне В ТОМ ЧИСЛЕ В ПУБЕРТАТЕ.
                            <br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Прудникова Елена Викторовна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    15:45 «Современная хирургия лица: методы сохранения молодости»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Три направления современной эстетической хирургии для сохранения молодости и естественных пропорций лица.<br>
                            Эндоскопия - убираем тяжесть век, без разрезов.<br>
                            Пьезо-ринопластика - идеальные пропорции носа без риска деформации (ультразвуковая техника).<br>
                            SMAS-лифтинг — четкий овал лица и изящная шея без эффекта «натянутой маски».
                            <br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Лебедева Юлия Владимировна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    16:00 «Усталый взгляд: косметология или уже пора к хирургу?»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Все виды блефаропластики. Липофиллинг для восполнения объемов. Безопасно? Кому реально показан?<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Шакурова Адель Фануровна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    16:15 МОДНАЯ ПАУЗА. Время сюрпризов
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    16:30 «Самооценка падает, когда я смотрю в зеркало»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Разговор с психологом<br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Сычева Татьяна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    17:00 «Гормонально-здоровое лицо мужчин и женщин»
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            Мифы и правда про гормональную терапию и красивое подтянутое лицо.<br>
                            Такие уж всесильные гормоны?!<br>
                            Темная лошадка гормональной катастрофы.<br>
                            <br>
                            <span style="font-family: 'Roboto';">Спикер:</span> Холодова Анна Анатольевна
                            <br>
                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    17:20 Открытый диалог с залом. Розыгрыш ценных подарков
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">

                        </div>
                    </div>
                </div>
                <p class="woc-schedule-name">
                    17:50 - 18:00 Торжественное завершение мероприятия.
                </p>
                <div class="woc-schedule-line clearfix"></div>
                <div class="speakers clearfix"></div>
            </div>


        </div>
        <div class="woc-footer">
            <div class="payment-info">
                <div class="pi-detail">
                    <?php if(true):?>
                    <p class="cwib-datetime">
                        Мероприятие состоится 25 октября 2026 г. в 12:00. в г.Тольятти, ул. Платановая д. 6, Ресторан «Ренесанс»
                    </p>
                    <p class="cwib-textstatic">
                        Стоимость участия
                    </p>
                    <p class="cwib-price">
                        2 500 руб<sup>*</sup>
                    </p>
                    <p class="cwc-line1"><br/>* Предложение действительно по 10 октября (включительно), с 11 окиября стоимость 3 500 руб.</p>
                    <?php endif; ?>
                </div>
                <div id="action-form-lp" class="pi-contact-form">
                    <?php
                    if (true) {
                        $form = ActiveForm::begin(['action' => '/registration', 'options' => ['class' => 'wo-form']]);
                        echo '<label class="pi-formgroup">';
                        echo $form->field($model, 'name')->textInput(['placeholder' =>'ФИО'])->label(false);
                        echo '</label>';
                        echo '<label class="pi-formgroup">';
                        echo $form->field($model, 'phone')->textInput(['placeholder' =>'Телефон'])->label(false);
                        echo '</label>';
                        echo '<label class="pi-formgroup">';
                        echo $form->field($model, 'email')->textInput(['placeholder' =>'Эл. почта'])->label(false);
                        echo '</label>';
                        echo '<label class="pi-formgroup">';
                        echo $form->field($model, 'policy')->checkbox([
                                'label' => 'Я даю согласие на ' . Html::a(
                                                'Обработку персональных данных',
                                                '/files/consent.pdf',
                                                ['target' => '_blank', 'style' => 'text-decoration: underline;']
                                        ),
                                'uncheck' => '0',
                        ], ['labelOptions' => ['class' => 'custom-checkbox-wrapper']])->label(false);
                        echo '</label>';
                        echo $form->field($model, 'activity')->hiddenInput(['value' => '02Av4i2plXZZ'])->label(false);
                        echo '<label class="pi-formgroup">';
                            echo $form->field($model, 'reCaptcha')->widget(
                                \himiklab\yii2\recaptcha\ReCaptcha::className(),
                                ['siteKey' => '6LfAxCYaAAAAAHek6vUl-nnehdm1Q0UqBb1VaDBm', 'widgetOptions' => ['data-size' => 'compact', 'class' => '']]

                            )->label(false);
                        echo $form->field($model, 'ref')->hiddenInput(['value' => $ref])->label(false);
                            echo '</label>';
                        echo '<div class="policy-container clearfix">
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

