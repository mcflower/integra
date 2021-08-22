<?php

$this->title = 'Полезные материалы';

?>
<div class="hld-header">
    <div class="hld-header-container">
        <a href="/" class="hld-header-link">
            <img src="/img/logo.png" class="image">
        </a>
    </div>
</div>
<div class="guides-container">
    <div class="guides-box">
        <p class="header-text">
            Материалы
        </p>
        <div class="underline-text clearfix"></div>
        <div class="all-guides">
            <?php use yii\helpers\Html;
            use yii\widgets\ActiveForm;

            foreach($model as $guide): ?>
                <div class="guide-one">
                    <div class="guide-img" style="background-image:url('<?= $guide->img ?>');"></div>
                    <div class="guide-data">
                        <p class="guide-name"><?=$guide->name?></p>
                        <p class="guide-brief"><?=$guide->brief?></p>
                        <div class="guide-buttons">
                            <a href="/guide?hash=<?=$guide->hash?>" class="guide-more-button" target="_blank">подробнее</a>
                            <a href="#modal-guide" data-price="<?=$guide->price?>" data-guide="<?=$guide->hash?>" data-gname="<?=$guide->name?>" class="sa-button-event guide-buy-button guide-buy-event"><?= ($guide->price > 0) ? 'купить' : 'получить'?></a>
                        </div>
                    </div>
                    <div class="guide-price"><?= ($guide->price > 0) ? $guide->price . ' руб.' : 'бесплатно'?></div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

<div id="modal-guide" class="guide-popup-box clearfix zoom-anim-dialog mfp-hide">
    <div class="guide-popup-info-block clearfix">
        <h3 id="guide-title">Тема материала</h3>
        <?php $form = ActiveForm::begin(['action' => ['buy-guide']]); ?>

        <?= $form->field($user, 'name')->textInput(['class'=> 'guide-popup-input', 'maxlength' => true, 'placeholder' => 'Имя'])->label(false) ?>

        <?= $form->field($user, 'email')->textInput(['class'=> 'guide-popup-input', 'maxlength' => true, 'placeholder' => 'E-mail'])->label(false) ?>

        <?= $form->field($user, 'reCaptcha')->widget(
            \himiklab\yii2\recaptcha\ReCaptcha::className(),
            ['siteKey' => '6LfAxCYaAAAAAHek6vUl-nnehdm1Q0UqBb1VaDBm', 'widgetOptions' => ['data-size'=> 'compact', 'class' => '']]

        )->label(false) ?>

        <?= $form->field($user, 'gcontent')->hiddenInput()->label(false) ?>

        <p class="guide-popup-policy-links">
            Переходя к оплате вы даете свое согласие на обработку персональных данных<br>
        </p>
        <a class="guide-popup-policy-links" href="/files/privacy_policy.pdf" target="_blank">
            Политика конфиденциальности<br>
        </a>
        <a class="guide-popup-policy-links" href="/files/user_agreement.pdf" target="_blank">
            Договор оферты<br>
        </a>
        <div class="form-group order-form-group">
            <?= Html::submitButton('ПЕРЕЙТИ К ОПЛАТЕ', ['class' => 'guide-popup-order-button guide-popup-button-event']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

