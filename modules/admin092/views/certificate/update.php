<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Certificate */

$this->title = 'Сертификат №' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Сертификаты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Просмотр', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ред.';
?>
<div class="certificate-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
