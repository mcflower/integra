<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Progesterone */

$this->title = 'Create Progesterone';
$this->params['breadcrumbs'][] = ['label' => 'Progesterones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="progesterone-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
