<?php

$this->title = "Результат опроса на выявление возможного дефицита йода";

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
                    <?php if($sum < 3): ?>
                        Итого: <?=$sum?> баллов. Гипотиреоз маловероятен.
                    <?php elseif($sum > 2 && $sum < 6):?>
                        Итого: <?=$sum?> баллов. Нельзя исключить снижение функции щитовидной железы. Вероятнее всего Вам будет полезно изучить гайд «йододефицит/гипотиреоз»:
                        <a href="https://integraforlife.com/guide/jdOiQzREt4xp" style="text-decoration: underline;display: inline-block;width: 100%;text-align: left;color: rgb(237, 195, 71);">Материал по йоддефициту</a>
                    <?php else:?>
                        Итого: <?=$sum?> баллов. У вас высокая вероятность гипотиреоза. Желательно выполнить исследование крови на содержание ТТГ, Т4св, Т3св, УЗИ Щитовидной железы. С результатами обратиться к врачу. <a href="https://integraforlife.com/patient-support" style="text-decoration: underline;display: inline-block;width: 100%;text-align: left;color: rgb(237, 195, 71);">«Чат поддержки пациентов»</a>
                    <?php endif;?>
                </p>
            </div>
        </div>
    </div>
</div>
