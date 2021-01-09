<?php
$this->title = 'Успешная оплата';
?>

<div class="notify-head clearfix">
    <div class="notify-box clearfix">
        <a href="/" style="display: block">
            <img src="/img/logo.png" class="notify-img image" />
        </a>
        <div class="nf-container clearfix">
            <div class="nf-field clearfix">
                <p class="nf-text">
                    Спасибо! Оплата прошла успешно. На Вашу электронную почту отправлено письмо с инструкцией<br />
                </p>
            </div>
        </div>
    </div>
</div>
<?=$this->render("//common/free", ['webinars' => $webinars]) ?>
<?=$this->render("//common/next", ['nexts' => $nexts]) ?>
