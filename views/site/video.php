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
            <div class='embed-responsive embed-responsive-16by9 clearfix'>
                <?=Yii::$app->common->getCloudVideo($video->vimeo);?>
            </div>
        </div>
    </div>
</div>
