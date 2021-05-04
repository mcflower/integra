<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Guides */

$this->title = 'Редактировать: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Гайды', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ред.';
?>
<div class="guides-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
