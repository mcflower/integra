<?php

$this->title = "Курс для врачей и нутрициологов «Основы нутрициологии»";

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
        <div class="woc-preview clearfix" style="background-image:url('/files/webinar/preview_1657736164.png');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="clearfix">
                    <p class="woc-main-intro">
                        Курс для врачей и нутрициологов
                    </p>
                    <p class="woc-main-time">
                        12 - 16 сентября 2022 г.
                    </p>
                    <p class="woc-main-name">
                        «Основы нутрициологии»
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        Цикл усовершенствования квалификации с выдачей сертификата гособразца (ФМБА РФ)
                    </p>
                </div>
            </div>
            <div class="woc-second">
                <div>
                    Кому обязательно:
                    <br>
                    <ul>
                        <li>
                            Врачам любой специальности
                        </li>
                        <li>
                            Нутрициологам (как продвинутым, так и начинающим)
                        </li>
                        <li>
                            Фитнес-тренерам и «Для себя» - понимать, разбираться и применять эффективные схемы нутритивной поддержки при тех или иных заболеваниях.
                        </li>
                    </ul>
                    <br>
                    Семинары подготовлены врачами практиками, экспертами в области клинической нутрициологии, интегративной, превентивной медицины.
                </div>
                <br><br>
                <p style="text-align: center; font-size: 23px; margin-bottom: 20px;"><span style="text-decoration: underline;">План обучения:</span></p>
                <p class="woc-main-name">
                    12 Сентября 2022 г.
                </p>
                <div class="woc-main-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <b>Введение в НУТРИЦИОЛОГИЮ.</b>
                            <br><br>
                            <ul>
                                <li>
                                    Основные принципы ФИЗИОЛОГИЧЕСКОГО ПОДХОДА в медицине. Значение НУТРИЦИЛОГИИ в современной медицине. Антилевский Вячеслав Владимирович, нутрициолог, к.м.н., Минск
                                </li>
                                <li>
                                    Нутритивная поддержка здоровья ЖЕЛУДОЧ-НО-КИШЕЧНОГО ТРАКТА. Программа "ЖКТ, как ОСНОВА". Антилевский Вячеслав Владимирович, нутрициолог, к.м.н., Минск
                                </li>
                                <li>
                                    Основные закономерности ФИЗИОЛОГИИ ПИТАНИЯ и ОБМЕНА ВЕЩЕСТВ. Норма по-требления и физиологическая потребность. Как избежать ошибок при назначении БАД. Лысиков Юрий Александрович, науч-ный консультант компании NSP, к.м.н., врач-биохимик, нутрициолог, Москва
                                </li>
                                <li>
                                    Значение ВИТАМИНОВ в коррекции питания и метаболической поддержке организма. За-кономерности метаболизма витаминов и пра-вила их назначения. Лысиков Юрий Александрович, научный консультант компании NSP, к.м.н., врач-биохимик, нутрициолог, Москва
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <br><br><br>
                <p class="woc-main-name">
                    13 Сентября 2022 г.
                </p>
                <div class="woc-main-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <b>ЗНАЧЕНИЕ НУТРИЦИОЛОГИИ для МУЖСКОГО, ЖЕНСКОГО и ДЕТСКОГО ЗДОРОВЬЯ.</b>
                            <br><br>
                            <ul>
                                <li>
                                    Нутритивная поддержка ЖЕНСКОГО ЗДОРОВЬЯ в разные периоды жизни женщины. Тихонова Нина Юрьевна, Акушер-гинеколог, к.м.н., Ульяновск
                                </li>
                                <li>
                                    Нутритивная поддержка МУЖСКОГО ЗДОРОВЬЯ в разные периоды жизни мужчины, а также поддержка здоровья ПОЧЕК. Королев Александр Юрьевич, врач - уролог, онколог, эндокринолог, к.м.н., зав. отделением онкоурологии, до-цент кафедры урологии СГМУ, Саратов
                                </li>
                                <li>
                                    Нутритивная поддержка ДЕТСКОГО ЗДОРОВЬЯ и ПИТАНИЯ ребёнка, а также коррекция синдрома гиперактивности у детей. Свирида Наталья Валентиновна, врач-педиатр, Солигорск
                                </li>
                                <li>
                                    Значение МИКРОНУТРИЕНТОВ в питании мужчин, женщин и детей. Дадали Владимир Абдулаевич, про-фессор, д.х.н., СПб
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <br><br><br>
                <p class="woc-main-name">
                    14 Сентября 2022 г.
                </p>
                <div class="woc-main-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <b>НУТРИТИВНАЯ ПОДДЕРЖКА КЛЮЧЕВЫХ ОРГАНОВ и СИСТЕМ</b>
                            <br><br>
                            <ul>
                                <li>
                                    Нутритивная поддержка ЖЕНСКОГО ЗДОРОВЬЯ в разные периоды жизни женщины. Лахтеева Светлана Владимировна, врач семейной медицины, патомор-фолог, к.м.н., СПб
                                </li>
                                <li>
                                    Нутритивная поддержка и регуляция НЕРВНОЙ СИСТЕМЫ, а также предотвраще-ние стресса, депрессивных состояний. Полякова Светлана Михайловна, врач патоморфолог, доцент, к.м.н., Минск
                                </li>
                                <li>
                                    Нутритивная поддержка ЛИМФАТИЧЕСКОЙ СИСТЕМЫ и ДЕТОКСИКАЦИИ организма. Яшков Андрей Владиславович, врач-анестезиолог-реаниматолог, Петроза-водск
                                </li>
                                <li>
                                    Нутритивная поддержка и регуляция СЕРДЕЧНО-СОСУДИСТОЙ СИСТЕМЫ, а также предотвращение атеросклероза и гипертонии. Пухова Анна Александровна, врач-кардиолог, Тольятти
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <br><br><br>
                <p class="woc-main-name">
                    15 Сентября 2022 г.
                </p>
                <div class="woc-main-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <b>НУТРИТИВНАЯ ПОДДЕРЖКА ЗДОРОВЬЯ ОРГАНОВ и СИСТЕМ.</b>
                            <br><br>
                            <ul>
                                <li>
                                    Нутритивная поддержка здоровья ПЕЧЕНИ и ЖЁЛЧЕВЫВОДЯЩЕЙ СИСТЕМЫ. Гердт Алевтина Михайловна, врач-невролог, к.м.н., Тольятти
                                </li>
                                <li>
                                    Нутритивная поддержка и регуляция ЭНДОКРИННОЙ СИСТЕМЫ. Тишковец Светлана Валериевна, врач- Эндокринолог, к.м.н., Улан Уде
                                </li>
                                <li>
                                    Нутритивная поддержка здоровья БРОНХО-ЛЁГОЧНОЙ СИСТЕМЫ. Профилакти-ка постковидного синдрома. Ромбак Людмила Владиславовна, врач-высшей квалификации, Минск
                                </li>
                                <li>
                                    Нутритивная поддержка здоровья КОЖИ, а также процессов регенерации и заживления ран, псориаза и экземы. Шагинян Ольга Валентиновна, военный врач, доктор Китайской медицины, специалист по иммунодиетологии, магистр психологии, Ростов
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <br><br><br>
                <p class="woc-main-name">
                    16 Сентября 2022 г.
                </p>
                <div class="woc-main-line clearfix"></div>
                <div class="speakers clearfix">
                    <div class="sp-line">
                        <div class="sp-text">
                            <b>НУТРИТИВНАЯ ПОДДЕРЖКА КЛИНИЧЕСКИХ ПРОБЛЕМ.</b>
                            <br><br>
                            <ul>
                                <li>
                                    Биохакинг здоровья ОПОРНО-ДВИГАТЕЛЬНОЙ СИСТЕМЫ. Безопасный апгрейд и качество жизни с помощью продуктов НСП. Шабанова Ирина Фёдоровна, научный консультант компании NSP, врач-диетолог, физиотерапевт, гериатр, Москва
                                </li>
                                <li>
                                    Нутритивная поддержка здоровья при МЕТАБОЛИЧЕСКОМ СИНДРОМЕ. Холодова Анна Анатольевна, врач-эндокринолог, Тольятти
                                </li>
                                <li>
                                    Нутритивная поддержка при возрастных из-менениях ГЛАЗ. Родина Олеся Александровна, врач-хирург, офтальмолог, СПб
                                </li>
                                <li>
                                    Нутритивная поддержка здоровья при ЛОР-ЗАБОЛЕВАНИЯХ. Постовая Светлана отоларинголог, врач высшей категории, Кишинёв
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <img src="../files/gallery/webwompic.jpg" alt="">
                <br><br>
                <p>
                    <b>Важно!</b>
                    <br><br>
                    <span>
                        * Все вебинары в рамках цикла будут проходить на обучающей платформе;
                    </span>
                    <br>
                    <span>
                        * Все инструкции вы получите в общем чате студентов до начала обучения;
                    </span>
                    <br>
                    <span>
                        * В записи будет доступно 30 дней;
                    </span>
                    <br>
                    <span>
                        * Нажмите кнопку «оставить заявку» и секретарь с вами свяжется в течение 2-х суток;
                    </span>
                    <br>
                    <span>
                        * <u>Стоимость обучения для иностранных специалистов 25$ без сертификата.</u>
                    </span>
                </p>
            </div>

            <div class="cwib-detail clearfix"></div>
            <div class="cw-contact clearfix">
                <?php
                if (true) {
                    $form = ActiveForm::begin(['action' => '/success-nutrition-registration', 'options' => ['class' => 'cwc-form wo-form']]);

                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'name')->textInput(['placeholder' =>'Ф.И.О.'])->label(false);
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'phone')->textInput(['placeholder' =>'Телефон'])->label(false);
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'city')->textInput(['placeholder' =>'Город проживания'])->label(false);
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'email')->textInput(['placeholder' =>'Эл. почта'])->label(false);
                    echo '</label>';
                    echo $form->field($model, 'activity')->hiddenInput(['value' => '2TSM1uzVvwzl'])->label(false);
                    echo '<div class="policy-container clearfix">
                            <p class="cwc-line1">
                                Нажимая кнопку «оставить заявку» вы даете согласие на обработку персональных данных<br>
                            </p>
                            <a class="cwc-line2" href="/files/privacy_policy.pdf" target="_blank">
                                Политика конфиденциальности<br>
                            </a>
                            <a class="cwc-line3" href="/files/user_agreement.pdf" target="_blank">
                                Договор оферты<br>
                            </a>
                        </div>';
                    echo Html::submitButton("ОСТАВИТЬ ЗАЯВКУ");

                    ActiveForm::end();
                } else {
                    echo "<button class='wo-close'>Мероприятие закончилось</button>";
                }
                ?>
            </div>
        </div>
    </div>
</div>


