<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Question */

$this->title = 'Создание вопроса';
$this->params['breadcrumbs'][] = ['label' => 'Частые вопросы', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Новый';
?>
<div class="question-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
