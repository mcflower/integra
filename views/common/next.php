<?php
use yii\widgets\ActiveForm;
use app\models\Xuser;
use yii\helpers\Html;

$model = new Xuser();
?>
<?php if(!empty($nexts)): ?>
    <div class="anons clearfix">
        <div class="anons-container clearfix">
            <img src="img/arr-l.svg" class="nav-an-left image"/>
            <img src="img/arr-r.svg" class="nav-an-right image"/>
            <p class="anons-header-text">
                Анонс семинаров<br/>
            </p>
            <div class="underline-text clearfix"></div>
        </div>
        <div class="owl-carousel owl-anons">
            <?php foreach ($nexts as $next):?>
                <div class="anons-one-wrapper">
                    <div class="anons-one clearfix">
                        <p class="anons-one-text">
                            <?=$next->name?><br/>
                        </p>
                        <div class="anons-one-underline clearfix"></div>
                        <div class="anons-one-description">
                            <?php
                            $text = preg_replace("/\<img.+\>/", "", $next->description);
                            //$text = preg_replace("/<p>(.*?)<\/p>/", "$1\r\n", $text);
                            echo nl2br(strip_tags($text));
                            ?>
                        </div>
                        <!--<a href="#popup-<?/*=$next->activity*/?>" class="pn-button anons-one-button clearfix">
                            уведомить
                        </a>-->
                        <a href="/webinar/<?=$next->activity?>" target="_blank" class="anons-one-button clearfix">
                            подробнее
                        </a>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
    <!--<div class="next-popups-area">
        <?php /*foreach ($nexts as $next):*/?>
            <div id="popup-<?/*=$next->activity*/?>" class="zoom-anim-dialog mfp-hide pn-one clearfix">
                <p class="pn-one-title">
                    Уведомить меня о дате и времени проведения семинара
                </p>
                <p class="pn-one-name">
                    <?/*=$next->name*/?>
                </p>
                <p class="pn-one-description">
                    <?/*=nl2br($next->description);*/?>
                </p>
                <?php
/*                $form = ActiveForm::begin(['action' => '/next-event', 'options' => ['class' => 'next-form']]);

                echo '<label class="pn-one-formgroup">';
                echo $form->field($model, 'name')->textInput(['placeholder' =>'Имя'])->label(false);
                echo '</label>';
                echo '<label class="pn-one-formgroup">';
                echo $form->field($model, 'email')->textInput(['placeholder' =>'Email'])->label(false);
                echo '</label>';
                echo '<div class="policy-container clearfix">
                    <p class="cwc-line1">
                        Нажимая кнопку “Уведомить” я даю согласие на обработку моих личных данных<br>
                    </p>
                    <a class="cwc-line2" href="/files/privacy_policy.pdf" target="_blank">
                        Политика конфиденциальности<br>
                    </a>
                    <a class="cwc-line3" href="/files/user_agreement.pdf" target="_blank">
                        Договор оферты<br>
                    </a>
                </div>';
                echo $form->field($model, 'activity')->hiddenInput(['value' => $next->activity])->label(false);
                echo $form->field($model, 'type')->hiddenInput(['value' => $next->type])->label(false);
                echo Html::submitButton("уведомить");

                ActiveForm::end();
                */?>
            </div>
        <?/* endforeach; */?>
    </div>-->
<?php endif; ?>