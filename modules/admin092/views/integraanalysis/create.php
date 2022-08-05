<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IntegraAnalysis */

$this->title = 'Добавление';
$this->params['breadcrumbs'][] = ['label' => 'Анализы клиники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="integra-analysis-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
