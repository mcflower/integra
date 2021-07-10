<?php

$this->title = $model->name;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="wo-anons clearfix">
    <div class="wo-container clearfix">
        <div class="woc-preview clearfix" style="background-image:url('<?=$model->img?>');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">
                <div class="woc-guide-description clearfix">
                    <p class="woc-main-intro">
                        Полезные материалы
                    </p>
                    <p class="woc-main-name">
                        <?=$model->name?>
                    </p>
                    <div class="woc-main-line clearfix"></div>
                </div>
            </div>
            <div class="woc-second">
                <?=$model->description?>
            </div>

            <div class="cwib-detail clearfix">
                <p class="cwib-textstatic">
                    Стоимость
                </p>
                <p class="cwib-price">
                    <?= $model->price ?> руб
                </p>
            </div>
            <div class="cw-contact clearfix">
                <?php
                    $form = ActiveForm::begin(['action' => '/buy-guide', 'options' => ['class' => 'cwc-form wo-form']]);

                    echo '<label class="cwc-formgroup">';
                    echo $form->field($user, 'name')->textInput(['placeholder' =>'Имя'])->label(false);
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($user, 'email')->textInput(['placeholder' =>'Email'])->label(false);
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($user, 'reCaptcha')->widget(
                        \himiklab\yii2\recaptcha\ReCaptcha::className(),
                        ['siteKey' => '6LfAxCYaAAAAAHek6vUl-nnehdm1Q0UqBb1VaDBm', 'widgetOptions' => ['data-size' => 'compact', 'class' => '']]

                    )->label(false);
                    echo '</label>';
                    echo '<div class="policy-container clearfix">
                                <p class="cwc-line1">
                                    Нажимая кнопку "Зарегистрироваться" я даю согласие на обработку моих личных данных<br>
                                </p>
                                <a class="cwc-line2" href="/files/privacy_policy.pdf" target="_blank">
                                    Политика конфиденциальности<br>
                                </a>
                                <a class="cwc-line3" href="/files/user_agreement.pdf" target="_blank">
                                    Договор оферты<br>
                                </a>
                            </div>';
                    echo $form->field($user, 'gcontent')->hiddenInput(['value' => $model->hash])->label(false);
                    echo Html::submitButton("ПЕРЕЙТИ К ОПЛАТЕ");

                    ActiveForm::end();
                ?>
            </div>
        </div>
    </div>
</div>