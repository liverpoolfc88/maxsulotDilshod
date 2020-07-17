<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Documents */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="documents-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'inn_company',
            'mfo_bank',
            'account_number_company',
            'date',
            'document_number',
            'mfo_branch',
            'inn_branch',
            'name_branch',
            'account_number_branch',
            'purpose_branch',
            'code_currency',
            'kirim',
            'chiqim',
            'tip_k_ch',
            'contract_date',
            'contract_number',
            'contracts_id',
            'currency_id',
            'account_number_id',
            'bank_branch_id',
            'company_id',
            'company_name',
        ],
    ]) ?>

</div>
