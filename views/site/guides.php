<?php

?>
<div class="hld-header">

</div>
<div class="guides-container">
    <div class="guides-box">
        <p class="header-text">
            Гайды
        </p>
        <div class="underline-text clearfix"></div>
        <div class="all-guides">
            <?php use yii\helpers\Html;

            foreach($model as $guide): ?>
                <div class="guide-one">
                    <div class="guide-img" style="background-image:url('<?= $guide->img ?>');"></div>
<!--                    <div class="guide-separator"></div>-->
                    <div class="guide-data">
                        <p class="guide-name"><?= $guide->name ?></p>
                        <p class="guide-brief"><?= $guide->brief ?></p>
                        <div class="guide-buttons">
                            <a class="guide-more-button" href="/guide/<?= $guide->hash ?>">подробнее</a>
                            <a href="#modal-guide<?= $guide->id ?>" class="sa-button-event guide-buy-button">купить</a>
                        </div>
                    </div>
                    <div class="guide-price"><?= $guide->price ?> руб.</div>
                </div>
                <div id="modal-guide<?= $guide->id ?>" class="cw-box clearfix zoom-anim-dialog mfp-hide">
                    <div class="cw-info-block clearfix">
                        <?php
                        echo Html::beginForm(['set-client'], 'post');

                        echo Html::hiddenInput('hash', '');
                        echo Html::submitButton('купить', ['class' => 'btn btn-primary']);
                        echo Html::endForm();
                        ?>
                    </div>
                </div>
                <br><br>
            <?php endforeach;?>
        </div>
    </div>
</div>

