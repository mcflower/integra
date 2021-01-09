<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Xuser */

$this->title = 'Ред.: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="xuser-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
