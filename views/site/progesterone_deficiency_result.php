<?php

$this->title = "Результат опроса на выявление возможного дефицита прогестерона";

?>
<link href="/css/notify.css" rel="stylesheet">
<div class="notify-head clearfix">
    <div class="notify-box clearfix">
        <a href="/" style="display: block">
            <img src="/img/logo.png" class="notify-img image" />
        </a>
        <div class="nf-container clearfix">
            <div class="nf-field clearfix">
                <p class="nf-text danger" style="color:black;">
                    <?php if($sum < 5): ?>
                        Итого: <?=$sum?> баллов. Вероятнее всего у вас адекватный уровень прогестерона.
                    <?php elseif($sum > 4 && $sum < 8):?>
                        Итого: <?=$sum?> баллов. У вас вероятный дефицит прогестерона.
                    <?php else:?>
                        Итого: <?=$sum?> баллов. Очень вероятен значимый дефицит прогестерона. Необходима консультация врача.
                    <?php endif;?>
                </p>
            </div>
        </div>
    </div>
</div>
