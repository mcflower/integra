<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Guser */

$this->title = 'Create Guser';
$this->params['breadcrumbs'][] = ['label' => 'Gusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
