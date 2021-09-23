<?php
$this->title = $video->name;
?>
<div class="notify-head clearfix">
    <div class="notify-box clearfix">
        <a href="/" style="display: block">
            <img src="/img/logo.png" class="notify-img image" />
        </a>
        <div class="nf-container nf-video clearfix">
            <p class="nf-video-name"><?=$video->name?></p>
            <div role="alert" class="alert alert-warning"><strong>Внимание!</strong> Запись доступна до <?=date('d.m.Y', ($video->expired - 24 * 60 * 60))?></div>
            <div class="embed-responsive embed-responsive-16by9 clearfix">
                <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/<?=$video->vimeo?>?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
