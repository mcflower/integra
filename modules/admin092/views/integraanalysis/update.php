<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IntegraAnalysis */

$this->title = 'Ред.: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Анализы клиники', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Просмотр', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="integra-analysis-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
