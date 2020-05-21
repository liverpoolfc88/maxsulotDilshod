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
            'maxsulot_add',
            // 'maxsulot_update',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
