<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Update - '.$model->email;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="row">

        <div class="col-md-4">
            
        </div>

        <div style="background-color: white; margin-top: 150px" class="col-md-4">
            
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to signup:</p>

      
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'last_name')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'first_name') ?>
            <?= $form->field($model, 'middle_name') ?>
            
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
       
   
</div>
        </div>
        
        <div class="col-md-4">
            
        </div>
        
    </div>
</div>
