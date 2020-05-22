<?php

use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Signup';
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
            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
            'captchaAction' => Url::to('/site/captcha'),
            'template' => '<div class="text-center">{image}</div><br/> {input} ',
            'imageOptions' => [
            'class' => 'img-fluid',
            'style' => 'cursor:pointer; width: 100%',
            'title' => Yii::t('app', 'Click to refresh the code'),
            ],
            'options' => [
            'placeholder' => Yii::t('app', 'Verification code'),
            'class' => 'form-control',
                ],
            ])->label(false) ?>
            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
       
   
</div>
        </div>
        
        <div class="col-md-4">
            
        </div>
        
    </div>
</div>
