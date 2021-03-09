<?php

$this->title = $webinar->name;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="wo-anons clearfix">
    <div class="wo-container clearfix">
        <div class="woc-preview clearfix" style="background-image:url('<?=$webinar->img?>');"></div>
        <div class="woc-about clearfix">
            <div class="woc-main clearfix">

                <div class="woc-main-description clearfix">
                    <p class="woc-main-intro">
                        Обучающий семинар
                    </p>
                    <?php if($webinar->type == 2):?>
                        <p class="woc-main-time">
                            <?= date('d.m.Y', $webinar->xdate) ?> / <?= $webinar->xtime ?>
                        </p>
                    <?php endif;?>
                    <p class="woc-main-name">
                        <?=$webinar->name?>
                    </p>
                    <div class="woc-main-line clearfix"></div>
                    <p class="woc-main-about">
                        Вебинар ведет <br /><?=$webinar->about?>
                    </p>
                </div>
                <div class="woc-main-photo clearfix" style="background-image:url('<?=$webinar->photo?>');"></div>
            </div>
            <div class="woc-second">
                <?=$webinar->description?>
            </div>

            <div class="cwib-detail clearfix">
                <?php if($webinar->type == 2):?>
                <p class="cwib-datetime">
                    Вебинар состоится <?= date('d.m.Y', $webinar->xdate) ?> в <?= $webinar->xtime ?> по Московскому
                    времени<br><br>Запись будет доступна Вам в
                    течении 30 дней после его&nbsp;проведения.<br>
                </p>
                <p class="cwib-textstatic">
                    Стоимость участия
                </p>
                <p class="cwib-price">
                    <?= $webinar->price ?> руб
                </p>
                <?php endif; ?>
            </div>
            <div class="cw-contact clearfix">
                <?php

                if($webinar->type == 1) {
                    $form = ActiveForm::begin(['action' => '/next-event', 'options' => ['class' => 'cwc-form wo-form']]);

                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'name')->textInput(['placeholder' =>'Фамилия Имя'])->label(false)->hint('Будут указаны на сертификате!');
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'email')->textInput(['placeholder' =>'Email'])->label(false);
                    echo '</label>';
                    echo '<div class="policy-container clearfix">
                            <p class="cwc-line1">
                                Нажимая кнопку "уведомить" я даю согласие на обработку моих личных данных<br>
                            </p>
                            <a class="cwc-line2" href="/files/privacy_policy.pdf" target="_blank">
                                Политика конфиденциальности<br>
                            </a>
                            <a class="cwc-line3" href="/files/user_agreement.pdf" target="_blank">
                                Договор оферты<br>
                            </a>
                        </div>';
                    echo $form->field($model, 'activity')->hiddenInput(['value' => $webinar->activity])->label(false);
                    echo $form->field($model, 'type')->hiddenInput(['value' => $webinar->type])->label(false);
                    echo Html::submitButton("уведомить");

                    ActiveForm::end();
                } elseif ($webinar->type == 2) {
                    $form = ActiveForm::begin(['action' => '/new-active', 'options' => ['class' => 'cwc-form wo-form']]);

                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'name')->textInput(['placeholder' =>'Фамилия Имя'])->label(false)->hint('Будут указаны на сертификате!');
                    echo '</label>';
                    echo '<label class="cwc-formgroup">';
                    echo $form->field($model, 'email')->textInput(['placeholder' =>'Email'])->label(false);
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
                    echo $form->field($model, 'activity')->hiddenInput(['value' => $webinar->activity])->label(false);
                    echo $form->field($model, 'type')->hiddenInput(['value' => $webinar->type])->label(false);
                    echo Html::submitButton("ЗАРЕГИСТРИРОВАТЬСЯ");

                    ActiveForm::end();
                } else {
                    echo "<button class='wo-close'>Вебинар закончился</button>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
