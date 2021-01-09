<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Xuser */

$this->title = 'Добавление пользователя';
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xuser-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
