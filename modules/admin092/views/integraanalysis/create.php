<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IntegraAnalysis */

$this->title = 'Create Integra Analysis';
$this->params['breadcrumbs'][] = ['label' => 'Integra Analyses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="integra-analysis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
