<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MaxsulotSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="maxsulot-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'maxsulot_name') ?>

    <?= $form->field($model, 'maxsulot_photo') ?>

    <?= $form->field($model, 'maxsulot_short') ?>

    <?= $form->field($model, 'maxsulot_add') ?>

    <?php // echo $form->field($model, 'maxsulot_update') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
