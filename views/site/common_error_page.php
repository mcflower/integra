<?php



$this->title = $errorTitle;

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
                    <?=$errorContent?> <br />
                </p>
            </div>
        </div>
    </div>
</div>
