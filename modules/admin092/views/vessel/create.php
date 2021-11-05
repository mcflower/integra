<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VesselAnketa */

$this->title = 'Create Vessel Anketa';
$this->params['breadcrumbs'][] = ['label' => 'Vessel Anketas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vessel-anketa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
