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


<?= YandexMetrikaCounter::widget(
    [
        'counterId' => 62217589,
    ]
) ?>