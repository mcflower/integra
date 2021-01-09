<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<link href="/css/notify.css" rel="stylesheet">
<div class="notify-head clearfix">
    <div class="notify-box clearfix">
        <a href="/" style="display: block">
            <img src="/img/logo.png" class="notify-img image" />
        </a>
        <div class="nf-container clearfix">
            <div class="nf-field clearfix">
                <p class="nf-text warning">
                    Ошибка 404. Страница не найдена! <br />
                </p>
            </div>
        </div>
    </div>
</div>
