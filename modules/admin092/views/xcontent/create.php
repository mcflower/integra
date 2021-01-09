<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Xcontent */

$this->title = 'Создание контента';
$this->params['breadcrumbs'][] = ['label' => 'Контент', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xcontent-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
