<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hypoxia */

$this->title = 'Create Hypoxia';
$this->params['breadcrumbs'][] = ['label' => 'Hypoxias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hypoxia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
