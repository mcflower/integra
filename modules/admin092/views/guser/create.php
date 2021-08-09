<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Guser */

$this->title = 'Добавление покупателя';
$this->params['breadcrumbs'][] = ['label' => 'Покупатели', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guser-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
