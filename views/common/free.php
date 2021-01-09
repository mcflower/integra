<?php

?>

<div class="vebinary clearfix">
    <div class="vebinary-container clearfix">
        <img src="img/arr-l.svg" class="nav-web-left image"/>
        <img src="img/arr-r.svg" class="nav-web-right image"/>
        <p class="vebinary-header-text">
            Вебинары в свободном доступе
        </p>
        <div class="underline-text clearfix"></div>
    </div>
    <div class="owl-carousel owl-vebinary">
        <?php foreach ($webinars as $webinar): ?>
            <a target="_blank" href="<?= $webinar->url ?>" class="veb-one clearfix">
                <img src="<?= $webinar->img ?>" class="veb-one-img image"/>
                <p class="veb-one-text">
                    <?= $webinar->name ?>
                </p>
            </a>
        <?php endforeach; ?>
    </div>
</div>
