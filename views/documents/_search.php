<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocumentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="documents-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'inn_company') ?>

    <?= $form->field($model, 'mfo_bank') ?>

    <?= $form->field($model, 'account_number_company') ?>

    <?= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'document_number') ?>

    <?php // echo $form->field($model, 'mfo_branch') ?>

    <?php // echo $form->field($model, 'inn_branch') ?>

    <?php // echo $form->field($model, 'name_branch') ?>

    <?php // echo $form->field($model, 'account_number_branch') ?>

    <?php // echo $form->field($model, 'purpose_branch') ?>

    <?php // echo $form->field($model, 'code_currency') ?>

    <?php // echo $form->field($model, 'kirim') ?>

    <?php // echo $form->field($model, 'chiqim') ?>

    <?php // echo $form->field($model, 'tip_k_ch') ?>

    <?php // echo $form->field($model, 'contract_date') ?>

    <?php // echo $form->field($model, 'contract_number') ?>

    <?php // echo $form->field($model, 'contracts_id') ?>

    <?php // echo $form->field($model, 'currency_id') ?>

    <?php // echo $form->field($model, 'account_number_id') ?>

    <?php // echo $form->field($model, 'bank_branch_id') ?>

    <?php // echo $form->field($model, 'company_id') ?>

    <?php // echo $form->field($model, 'company_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
