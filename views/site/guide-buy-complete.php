<?php


use yii\helpers\Html;

$this->title = "Успешная оплата";

?>
<link href="/css/notify.css" rel="stylesheet">
<div class="notify-head clearfix">
    <div class="notify-box clearfix">
        <a href="/" style="display: block">
            <img src="/img/logo.png" class="notify-img image"/>
        </a>
        <div class="nf-container clearfix">
            <div class="nf-field clearfix">
                <p class="nf-text success">
                    Оплата прошла успешно!<br><br>
                    Мы продублировали ссылку на ваш e-mail.<br><br>
                    Ссылка на скачивание активна в течении 30 дней.<br><br>
                    <a href="https://integraforlife.com/get-guide?hash=<?=$hash?>" style="text-decoration: underline;display: inline-block;width: 100%;text-align: left;color: rgb(237, 195, 71);">Скачать</a>
                </p>
            </div>
        </div>
    </div>
</div>
