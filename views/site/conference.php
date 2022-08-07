<?php

$this->title = "Летняя конференция «Применимая медицина»";

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
        <div class="woc-preview clearfix" style="background-image:url('/img/conference1.jpg');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-intro">
                        Летняя конференция
                    </p>
                    <p class="woc-main-time">
                        3 - 4 июня 2022г.
                    </p>
                    <p class="woc-main-name">
                        «Применимая медицина»
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        г. Санкт-Петербург, гостиница Октябрьская 4*
                    </p>
                </div>
            </div>
            <div class="woc-second">
                <p style="text-align: center; font-size: 23px; margin-bottom: 20px;"><span style="text-decoration: underline;">Программа конференции.</span><sup>*</sup></p>
                <p class="woc-main-name">
                    3 июня 2022г.
                </p>
                <div class="woc-main-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec1.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Дадали Владимир Абдуллаевич</u> - Профессор, доктор химических наук, профессор кафедры биохимии Санкт-Петербургского Государственного Медицинского Университета им. И. И. Мечникова, академик Балтийской Педагогической Академии, член диссертационного совета по докторским диссертациям, почетный председатель Общества натуральной медицины, член редколлегии журналов «Донозология» и «Профилактическая и клиническая медицина», член методической комиссии по биохимии Минздрава России, член правления Биохимического общества Санкт-Петербурга, член Международного общества микронутриентологии (США), в 2012 г. ученым советом Университета натуральной медицины (Калифорния, США) В.А. Дадали присвоено звание доктора философии по натуральной медицине и сертифицированного консультанта по нутрициологии
                            <br><br><b>Тема: Витамины, минералы, коферменты. Биохимия клетки. Базовые знания.</b>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <p class="woc-main-name">
                    4 июня 2022г.
                </p>
                <div class="woc-main-line clearfix"></div>

                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec3.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Гердт Алевтина Михайловна</u> - к.м.н., терапевт, невролог, сомнолог, специалист в области интегративной медицины и клинической нутрициологии, медицинский директор концептуальной ООО «Клиника Интегра»
                            <br><br><b>Тема: Аутоиммунные заболевания - пандемия 21 века. Заболевания детей и взрослых. Восстановление здоровья и качества жизни.</b>
                            <ul>
                                <li>Получите алгоритм по каким признакам заподозрить аутоиммунное заболевание и как его подтвердить.</li>
                                <li>Узнаете какие патологические процессы в организме влияют  на возникновение аутоиммунных болезней.</li>
                                <li>Сможете смотреть на заболевание с точки зрения биохимических процессов, происходящих при аутоиммунных болезнях.</li>
                                <li>Вы получите практикоприменимые схемы восстановления иммунной системы.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec2.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Холодова Анна Анатольевна</u> - эндокринолог, андролог, специалист в области интегративной медицины и клинической нутрициологии, основатель и главный врач концептуальной ООО «Клиника Интегра»
                            <br><br><b>Тема: Осмотр. Когда организм «кричит» о дефицитах или как не начать лечить только анализы.</b>
                            <ul>
                                <li>Учимся видеть дефициты витаминов, гормонов и нарушение процессов метаболизма без дорогостоящих анализов.</li>
                                <li>Вы получите рабочие тематические опросники, что позволит вам отслеживать состояния здоровья и понимать компенсирован ли ваш пациент.</li>
                                <li>Сможете виртуозно вести пациента без частых лабораторных скринингов.</li>
                                <li>Получите рабочие комбинации нутритивной поддержки и не только при самых  важных нарушениях, приводящих к серьезным проблемам со здоровьем.</li>
                                <li>Вам будет, что ответить пациенту, если его анализы в норме, а он сам-нет.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sp-line">
                        <div class="sp-photo">
                            <img src="/img/spec4.jpg"/>
                        </div>
                        <div class="sp-text">
                            <u>Смолярчук Ирина Геннадьевна</u> - психоаналитик, гештальт-терапевт. Руководитель и основатель антикризисного центра в г.Москве. Эксперт комиссии по делам несовершеннолетних и защите их прав. Спикер-эксперт на канале РБК, Радио Москвы, Сити ФМ
                            <br><br><b>Тема: Как поверить в свою врачебную силу и убедить пациента ХОТЕТЬ ЖИТЬ, А НЕ ДОЖИВАТЬ?</b>
                            <ul>
                                <li>Мое психологическое здоровье- зона профессионального роста.</li>
                                <li>Знаю наилучшие стратегии терапии для моего пациента, но часто не могу убедить выполнить рекомендации».</li>
                                <li>Причина отказа пациента следовать рекомендациям.</li>
                                <li>Учимся выстраивать эффективную коммуникацию врач-пациент, а не рассуждать про цену и пользу лечения.</li>
                                <li>Как не стать малодушным врачом, и не выгореть профессионально обладая уникальными знаниями для спасения жизни.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><sup>*</sup> расписание выступлений спикеров может быть изменено организаторами</p>
            </div>

            <div class="cwib-detail clearfix">
                <?php if(false):?>
                <p class="cwib-datetime">
                    Мероприятие состоится 3 - 4 июня 2022г. в г. Санкт-Петербург, гостиница Октябрьская
                </p>
                <p class="cwib-textstatic">
                    Стоимость участия
                </p>
                <p class="cwib-price">
                    от 20 100 руб
                </p>
                <?php endif; ?>
            </div>
            <div class="cw-contact clearfix">
                <?php
                if (false) {
                    $form = ActiveForm::begin(['action' => '/success-registration', 'options' => ['class' => 'cwc-form wo-form']]);

                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'activity')->dropDownList([
                                'without' => 'Без проживания - 20 100 руб.',
                                'within' => 'С проживанием - 24 300 руб. (1 ночь, место в двухместном номере)'
                            ], ['prompt' => 'Необходимо выбрать...', 'style' => ''])->hint('Можно выбрать тариф с проживанием в гостинице проведения мероприятия')->label(false);
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'name')->textInput(['placeholder' =>'ФИО'])->label(false);
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'phone')->textInput(['placeholder' =>'Телефон'])->label(false);
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'birthday')->textInput(['placeholder' =>'Дата рождения'])->label(false);
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'city')->textInput(['placeholder' =>'Город проживания'])->label(false);
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'email')->textInput(['placeholder' =>'Эл. почта'])->label(false);
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


