<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocumentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Documents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="documents-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Documents', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'inn_company',
            'mfo_bank',
            'account_number_company',
            'date',
            //'document_number',
            //'mfo_branch',
            //'inn_branch',
            //'name_branch',
            //'account_number_branch',
            //'purpose_branch',
            //'code_currency',
            //'kirim',
            //'chiqim',
            //'tip_k_ch',
            //'contract_date',
            //'contract_number',
            //'contracts_id',
            //'currency_id',
            //'account_number_id',
            //'bank_branch_id',
            //'company_id',
            //'company_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
