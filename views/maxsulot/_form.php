<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
//use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Maxsulot */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">

<div class="col-md-2"></div>

<div class="col-md-8">

<div style="background-color: white; padding: 15px" class="row">
<div class="maxsulot-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'maxsulot_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maxsulot_photo')->fileInput()->label(false);?>



   <?= $form->field($model, 'maxsulot_short')->widget(CKEditor::className(),[
    'editorOptions' => [
    'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
    'inline' => false, //по умолчанию false
    ] ]) ?>
   

  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
    
</div>

<div class="col-md-2"></div>
</div>
