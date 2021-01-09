<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\XuserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="xuser-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'hash') ?>

    <?= $form->field($model, 'activity') ?>

    <?php // echo $form->field($model, 'buy') ?>

    <?php // echo $form->field($model, 'wopen') ?>

    <?php // echo $form->field($model, 'wstart') ?>

    <?php // echo $form->field($model, 'wclose') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
