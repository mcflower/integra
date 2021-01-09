<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Xcontent */

$this->title = 'Запуск вебинара "' . $model->name . '" в продажу';
$this->params['breadcrumbs'][] = ['label' => 'Контент', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Просмотр', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Запуск';
?>
<div class="xcontent-create">

    <div class="xcontent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Запустить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>
