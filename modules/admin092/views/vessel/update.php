<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VesselAnketa */

$this->title = 'Update Vessel Anketa: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Vessel Anketas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vessel-anketa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
