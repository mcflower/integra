<?php

$this->title = $model->name;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<style>

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

    .field-guser-policy label {
        /*display: flex;*/
        /*align-items: flex-start;*/
        /*gap: 8px;*/
        /*font-weight: 400;*/
        display: inline;
        margin-bottom: 10px;
        cursor: pointer;
        font-weight: 400;
    }

    .field-guser-policy label input{
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

<div class="wo-anons">
    <div class="guide-content">
        <div class="woc-preview" style="background-image:url('<?=$model->img?>');"></div>
        <div class="woc-about">
            <div class="woc-main">
                <div class="woc-guide-description">
                    <p class="woc-main-intro">
                        Полезные материалы
                    </p>
                    <p class="woc-main-name">
                        <?=$model->name?>
                    </p>
                    <div class="woc-main-line"></div>
                </div>
            </div>
            <div class="woc-second">
                <?=$model->description?>
            </div>
        </div>
        <div class="woc-footer">
            <div class="payment-info">
                <div class="pi-detail">
                    <p class="pi-text-price">
                        Стоимость
                    </p>
                    <p class="pi-price">
                        <?= ($model->price > 0) ? $model->price . ' руб.' : 'бесплатно'?>
                    </p>
                </div>
                <div class="pi-contact-form">
                    <?php
                    $form = ActiveForm::begin(['action' => '/buy-guide', 'options' => ['class' => 'wo-form']]);

                    echo '<label class="pi-formgroup">';
                    echo $form->field($user, 'name')->textInput(['placeholder' =>'Имя'])->label(false);
                    echo '</label>';
                    echo '<label class="pi-formgroup">';
                    echo $form->field($user, 'email')->textInput(['placeholder' =>'Email'])->label(false);
                    echo '</label>';
                    echo '<label class="pi-formgroup">';
                    //                    echo Html::checkbox('policy', $user->policy, []);
                    /* echo $form->field($user, 'policy')->checkbox([
                             'label' => 'Я даю согласие на ' . Html::a(
                                             'Обработку персональных данных',
                                             '/files/consent.pdf',
                                             ['target' => '_blank', 'style' => 'text-decoration: underline;']
                                     ),
                             'uncheck' => '0',
                     ])->label(false);*/
                    echo $form->field($user, 'policy')->checkbox([
                            'label' => 'Я даю согласие на ' . Html::a(
                                            'Обработку персональных данных',
                                            '/files/consent.pdf',
                                            ['target' => '_blank', 'style' => 'text-decoration: underline;']
                                    ),
                            'uncheck' => '0',
                    ], ['labelOptions' => ['class' => 'custom-checkbox-wrapper']])->label(false);

                    //                    echo $form->field($user, 'policy')->checkbox(['label' => 'Я даю согласие на <a href="/files/consent.pdf" target="_blank" style="text-decoration: underline">Обработку персональных данных</a>'])->label(false);
                    echo '</label>';
                    echo '<label class="pi-formgroup">';
                    echo $form->field($user, 'reCaptcha')->widget(
                            \himiklab\yii2\recaptcha\ReCaptcha::className(),
                            ['siteKey' => '6LfAxCYaAAAAAHek6vUl-nnehdm1Q0UqBb1VaDBm', 'widgetOptions' => ['data-size' => 'compact', 'class' => '']]

                    )->label(false);
                    echo '</label>';
                    echo '<div class="policy-container">
                                <a class="cwc-line2" href="/files/privacy_policy.pdf" target="_blank">
                                    Политика конфиденциальности<br>
                                </a>
                                <a class="cwc-line3" href="/files/user_agreement.pdf" target="_blank">
                                    Договор оферты<br>
                                </a>
                            </div>';
                    echo $form->field($user, 'gcontent')->hiddenInput(['value' => $model->hash])->label(false);
                    echo Html::submitButton(($model->price > 0) ? "ПЕРЕЙТИ К ОПЛАТЕ" : "ПОЛУЧИТЬ");

                    ActiveForm::end();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
