<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Question */

$this->title = 'Вопрос №: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Частые вопросы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Просмотр', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ред.';
?>
<div class="question-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
