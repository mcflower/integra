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
                <p class="nf-text danger" style="color:black;">
                    <?php if($sum > 9): ?>
                        Итого: <?=$sum?> баллов. По результатам тестирования - вероятна гипоксия. Возможен дефицит железа и/или ко-факторов. Вся информация о проблеме по ссылке:
                    <?php else:?>
                        Итого: <?=$sum?> баллов. Гипоксия маловероятна. Для профилактики гипоксии и развития дефицита железа можете изучить путеводитель:
                    <?php endif;?>
                    <a href="https://integraforlife.com/guide?hash=5gxCpya90BJF" style="text-decoration: underline;display: inline-block;width: 100%;text-align: left;color: rgb(237, 195, 71);">Материал по дефициту железа/гипоксия</a>
                </p>
            </div>
        </div>
    </div>
</div>
