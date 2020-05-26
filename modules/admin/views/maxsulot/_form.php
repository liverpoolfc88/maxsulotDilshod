<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Maxsulot */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="maxsulot-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'maxsulot_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maxsulot_photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maxsulot_short')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_user_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'update_user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
