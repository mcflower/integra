<?php

/* @var $this yii\web\View */

$this->title = 'Холодова Анна Анатольевна';

//use yii\bootstrap\Alert;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div id="alert-container">
    <?= Alert::widget() ?>
</div>
<div class="head clearfix">
    <div class="head-container clearfix">
        <img src="img/logo.png" class="head-logo-main image"/>
        <div class="seminar clearfix">
            <!--yZfZNm5I8EIX принудительно не показываем здесь -->
            <?php if (!empty($active) && $active->activity != 'yZfZNm5I8EIX'): ?>
                <div style="background-image:url('<?= $active->img ?>');" class="sa-image clearfix"></div>
                <div class="sa-container clearfix">
                    <?php if ($active->type == 2): ?>
                        <p class="sa-time">
                            <?= date('d.m.Y', $active->xdate) ?> / <?= $active->xtime ?>
                        </p>
                    <?php endif; ?>
                    <p class="sa-name">
                        <?= $active->name ?><br/><br/>
                    </p>
                    <?php if ($active->type == 2): ?>
                        <a href="#modal-active" class="sa-button-event sa-button clearfix">
                            зарегистрироваться
                        </a>
                    <?php else: ?>
                        <!--<a href="#popup-<? /*=$active->activity*/ ?>" class="pn-button sa-button clearfix">
                        уведомить
                    </a>-->
                        <a href="/webinar/<?= $active->activity ?>" target="_blank" class="sa-button clearfix">
                            подробнее
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="myinfo clearfix">
            <div class="about-me-box clearfix">
                <p class="myinfo-text">
                    Обо мне
                </p>
                <div class="bottom-line-left clearfix"></div>
                <p class="myinfo-description">
                    <?= nl2br($info->about) ?>
                </p>
                <div class="abm-foto clearfix"></div>
            </div>
            <div class="education-box clearfix">
                <p class="myinfo-text">
                    Компетенции
                </p>
                <div class="bottom-line-left clearfix"></div>
                <p class="myinfo-description">
                    <?= nl2br($info->education) ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="serts clearfix">
    <div class="serts-container clearfix">
        <img src="img/arr-l.svg" class="nav-left image"/>
        <img src="img/arr-r.svg" class="nav-right image"/>
        <p class="serts-header-text">
            Дипломы и сертификаты
        </p>
        <div class="underline-text clearfix"></div>
    </div>
    <div class="owl-carousel owl-cert">
        <?php foreach ($certs as $cert): ?>
            <div class="cert-link">
                <img src="<?= $cert->img ?>" class="cert-image image"/>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="faq clearfix">
    <div class="faq-container clearfix">
        <p class="header-text">
            О приёме
        </p>
        <div class="underline-text clearfix"></div>
        <?php foreach ($questions as $question): ?>
            <div class="faq-one clearfix">
                <p class="faq-one-quest">
                    <?= $question->quest ?><br/>
                </p>
                <p class="text-one-answer">
                    <?= nl2br($question->answer) ?>
                </p>
                <div class="faq-underline clearfix"></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!--<div class="stati clearfix">
    <div class="stati-container clearfix">
        <p class="header-text">
            Публикации и статьи
        </p>
        <div class="underline-text clearfix"></div>
        <?php /*foreach ($articles as $article): */ ?>
            <div class="stati-one clearfix">
                <a class="stati-one-link" href="<? /*= $article->url */ ?>" target="_blank">
                    <? /*= $article->name */ ?><br/>
                </a>
                <p class="stati-one-date">
                    <? /*= $article->release_date */ ?><br/>
                </p>
                <div class="stati-one-underline clearfix"></div>
            </div>
        <?php /*endforeach; */ ?>
    </div>
</div>-->

<div class="vebinary clearfix">
    <div class="vebinary-container clearfix">
        <img src="img/arr-l.svg" class="nav-guide-left image"/>
        <img src="img/arr-r.svg" class="nav-guide-right image"/>
        <p class="vebinary-header-text">
            Материалы
        </p>
        <div class="underline-text clearfix"></div>
    </div>
    <div class="owl-carousel owl-guides">
        <?php foreach ($guides as $guide): ?>
            <div class="on-main-page guide-one">
                <div class="guide-img" style="background-image:url('<?= $guide->img ?>');"></div>
                <div class="guide-data">
                    <p class="guide-name"><?=$guide->name?></p>
                    <p class="guide-brief"><?=$guide->brief?></p>
                    <div class="guide-buttons">
                        <a href="/guide/<?=$guide->hash?>" class="guide-more-button" target="_blank"><?= ($guide->price > 0) ? 'купить' : 'получить'?></a>
                    </div>
                </div>
                <div class="guide-price"><?= ($guide->price > 0) ? $guide->price . ' руб.' : 'бесплатно'?></div>
            </div>

        <?php endforeach; ?>
    </div>
</div>
<?= $this->render("//common/next", ['nexts' => $nexts]) ?>
<?= $this->render("//common/free", ['webinars' => $webinars]) ?>

<?php if (!empty($active)): ?>
    <div id="modal-active" class="cw-box clearfix zoom-anim-dialog mfp-hide">
        <div class="cw-preview clearfix" style="background-image:url('<?= $active->img ?>');"></div>
        <div class="cw-info-block clearfix">
            <p class="cwib-datetime">
                <?= date('d.m.Y', $active->xdate) ?> / <?= $active->xtime ?>
            </p>
            <p class="cwib-name">
                <?= $active->name ?><br>
            </p>
            <div class="cwib-underline clearfix"></div>
            <div class="cwib-about clearfix">
                <div class="cwib-about-photo" style="background-image: url('<?= $active->photo ?>');"></div>
                <div class="cwib-about-text">
                    <strong>Вебинар ведет: </strong><?= $active->about ?>
                </div>
            </div>
            <!--<p class="cwib-description">
                <? /*= nl2br($active->description) */ ?><br>
            </p>-->
            <div class="cwib-description">
                <br/>
                <?= $active->description ?>
            </div>
            <div class="cwib-detail clearfix">
                <p class="cwib-datetime">
                    Вебинар состоится <?= date('d.m.Y', $active->xdate) ?> в <?= $active->xtime ?> по Московскому
                    времени<br><br>Запись будет доступна Вам в
                    течении 30 дней после его&nbsp;проведения.<br>
                </p>
                <p class="cwib-textstatic">
                    Стоимость участия
                </p>
                <p class="cwib-price">
                    <?= $active->price ?> руб
                </p>
            </div>
            <div class="cw-contact clearfix">
                <?php

                $form = ActiveForm::begin(['action' => 'new-active', 'options' => ['class' => 'cwc-form']]);

                echo '<label class="cwc-formgroup">';
                echo $form->field($model, 'name')->textInput(['placeholder' => 'Фамилия Имя'])->label(false)->hint('Будут указаны на сертификате!');
                echo '</label>';
                echo '<label class="cwc-formgroup">';
                echo $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(false);
                echo '</label>';
                echo '<div class="policy-container clearfix">
                    <p class="cwc-line1">
                        Нажимая кнопку "Зарегистрироваться" я даю согласие на обработку моих личных данных<br>
                    </p>
                    <a class="cwc-line2" href="/files/privacy_policy.pdf" target="_blank">
                        Политика конфиденциальности<br>
                    </a>
                    <a class="cwc-line3" href="/files/user_agreement.pdf" target="_blank">
                        Договор оферты<br>
                    </a>
                </div>';
                echo $form->field($model, 'activity')->hiddenInput(['value' => $active->activity])->label(false);
                echo $form->field($model, 'type')->hiddenInput(['value' => $active->type])->label(false);
                echo Html::submitButton("ЗАРЕГИСТРИРОВАТЬСЯ");

                ActiveForm::end();
                ?>
            </div>
        </div>
    </div>
<?php endif; ?>
