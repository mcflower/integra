<?php
$this->title = 'Ошибка оплаты';
?>

<div class="notify-head clearfix">
    <div class="notify-box clearfix">
        <a href="/" style="display: block">
            <img src="/img/logo.png" class="notify-img image" />
        </a>
        <div class="nf-container clearfix">
            <div class="nf-field clearfix">
                <p class="nf-text warning">
                    К сожалению, оплата не прошла! Побробуйте ещё раз. <br />
                </p>
            </div>
        </div>
    </div>
</div>
<?=$this->render("//common/free", ['webinars' => $webinars]) ?>
<?=$this->render("//common/next", ['nexts' => $nexts]) ?>
