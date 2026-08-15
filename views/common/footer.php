<?php

use app\models\Info;
use yii\widgets\YandexMetrikaCounter;

$info = Info::findOne(1);
?>

<div class="hld-footer clearfix">
    <div class="hld-footer-box clearfix">
        <div class="hldbf clearfix">
            <img src="/img/logo.png" class="hldbf-logo image" />
            <p class="hldbf-line1">
                <?=nl2br($info->requisites)?>
            </p>
            <a class="hldbf-line2" href="/files/privacy_policy.pdf" target="_blank">
            Политика конфиденциальности<br />
            </a>
            <a class="hldbf-line3" href="/files/user_agreement.pdf" target="_blank">
            Договор оферты
            </a>
        </div>
    </div>
</div>
<div class="cookie-bar">
    <div class="cookie-text">Мы используем cookie-файлы. Это нужно для лучшей работы сайта. <br>Продолжая пользоваться сайтом, вы соглашаетесь с этим на условиях <b><a style="color: white !important;" href="/files/privacy_policy.pdf" target="_blank">Политики обработки персональных данных</a></b></div>
    <button class="cookie-btn">Согласен</button>
</div>

<?= YandexMetrikaCounter::widget(
    [
        'counterId' => 62217589,
    ]
) ?>
