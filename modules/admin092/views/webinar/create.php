<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Webinar */

$this->title = 'Создание вебинара';
$this->params['breadcrumbs'][] = ['label' => 'Бесплатные вебинары', 'url' => ['index']];
$this->params['breadcrumbs'][] = "Новый";
?>
<div class="webinar-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
