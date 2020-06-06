<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MaxsulotSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Maxsulots';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maxsulot-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Maxsulot', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'maxsulot_name',
            'maxsulot_photo',
            'maxsulot_short',
            'add_user_id',
            //'created_at',
            //'updated_at',
            //'update_user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
<style type="text/css">
    .thed{
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
        padding: 8px;
        border-spacing: 2px;
    }
    thead tr th {
        border: 1px solid #ddd !important;
        text-align: center;
    }
    tbody tr th {
        border: 1px solid #ddd !important;
        text-align: center;
    }
    tbody tr td {
        border: 1px solid #ddd !important;
        text-align: center;
    }

</style>