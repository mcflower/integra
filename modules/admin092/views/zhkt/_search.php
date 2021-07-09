<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ZhktSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zhkt-anketa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'age') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'r1') ?>

    <?php // echo $form->field($model, 'r2') ?>

    <?php // echo $form->field($model, 'r3') ?>

    <?php // echo $form->field($model, 'r4') ?>

    <?php // echo $form->field($model, 'r5') ?>

    <?php // echo $form->field($model, 'r6') ?>

    <?php // echo $form->field($model, 'r7') ?>

    <?php // echo $form->field($model, 'r8') ?>

    <?php // echo $form->field($model, 'r9') ?>

    <?php // echo $form->field($model, 'r10') ?>

    <?php // echo $form->field($model, 'r11') ?>

    <?php // echo $form->field($model, 'r12') ?>

    <?php // echo $form->field($model, 'r13') ?>

    <?php // echo $form->field($model, 'r14') ?>

    <?php // echo $form->field($model, 'r15') ?>

    <?php // echo $form->field($model, 'r16') ?>

    <?php // echo $form->field($model, 'q1') ?>

    <?php // echo $form->field($model, 'q2') ?>

    <?php // echo $form->field($model, 'q3') ?>

    <?php // echo $form->field($model, 'q4') ?>

    <?php // echo $form->field($model, 'recomended') ?>

    <?php // echo $form->field($model, 'doctor_email') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
