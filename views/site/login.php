<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<section>

<div class="container">
    <div class="row">

        <div class="col-md-4">
            
        </div>

        <div style="background-color: white; margin-top: 150px" class="col-md-4">

            <div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        
              ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
              <a href="<?=Yii::$app->UrlManager->createUrl(['/site/signup'])?>" class='btn btn-danger'>Register</a>
           
              
            </div>
        </div>

    <?php ActiveForm::end(); ?>

   
</div>
            
        </div>

        <div class="col-md-4">
            
        </div>


        
        
    </div>
    
</div>    

</section>
