<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Xcontent */

$this->title = 'Закрытие вебинара "' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Контент', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Просмотр', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Закрытие';
?>
<div class="xcontent-create">

    <div class="xcontent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vimeo')->textInput() ?>

    <?= $form->field($model, 'cert')->fileInput()->hint('Загрузите при необходимости!') ?>

    <div class="form-group">
        <?= Html::submitButton('Закрыть', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>
