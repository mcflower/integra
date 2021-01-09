<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Webinar */

$this->title = 'Редактирование: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Бесплатные вебинары', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Просмотр', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ред.';
?>
<div class="webinar-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
