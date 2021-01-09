<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> | integraforlife.com</title>
    <?=$this->render("//common/meta") ?>
    <script src="//code.jivosite.com/widget/xUGphx5zx5" async></script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="primaryContainer" class="primaryContainer clearfix">

    <?= $content ?>

    <?=$this->render("//common/footer") ?>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
