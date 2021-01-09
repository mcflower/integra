<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Xcontent */

$this->title = 'Редактировать: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Контент', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Просмотр', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ред.';
?>
<div class="xcontent-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
