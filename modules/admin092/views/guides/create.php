<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Guides */

$this->title = 'Добавление гайда';
$this->params['breadcrumbs'][] = ['label' => 'Гайды', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guides-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
