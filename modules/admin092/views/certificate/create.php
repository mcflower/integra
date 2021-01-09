<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Certificate */

$this->title = 'Добавление сертификата';
$this->params['breadcrumbs'][] = ['label' => 'Сертификаты', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Новый';
?>
<div class="certificate-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
