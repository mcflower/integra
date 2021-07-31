<?php

$this->title = "Результат опроса на выявление возможного дефицита железа";

?>
<link href="/css/notify.css" rel="stylesheet">
<div class="notify-head clearfix">
    <div class="notify-box clearfix">
        <a href="/" style="display: block">
            <img src="/img/logo.png" class="notify-img image" />
        </a>
        <div class="nf-container clearfix">
            <div class="nf-field clearfix">
                <p class="nf-text danger">
                    <?php if($sum > 9): ?>
                        Вероятно гипоксия. Рекомендовано дообследование. Всю информацию о дообследовании и интерпритации полученных данных вы найдете по ссылке:
                    <?php else:?>
                        Рекомендовано изучение материала для опеределения наилучшей профилактической тактики:
                    <?php endif;?>
                    <a href="https://integraforlife.com/guide?hash=5gxCpya90BJF" style="text-decoration: underline;display: inline-block;width: 100%;text-align: left;color: rgb(237, 195, 71);">Материал по дефициту железа/гипоксия</a>
                </p>
            </div>
        </div>
    </div>
</div>
