<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ZhktAnketa */

$this->title = 'Create Zhkt Anketa';
$this->params['breadcrumbs'][] = ['label' => 'Zhkt Anketas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zhkt-anketa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
