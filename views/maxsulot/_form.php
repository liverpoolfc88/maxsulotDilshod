<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Maxsulot */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">

<div class="col-md-4"></div>

<div class="col-md-4">

<div style="background-color: white; padding: 15px" class="row">
<div class="maxsulot-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'maxsulot_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maxsulot_photo')->fileInput()->label(false);?>

    <?= $form->field($model, 'maxsulot_short')->textInput(['maxlength' => true]) ?>

   

  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
    
</div>

<div class="col-md-4"></div>
</div>
