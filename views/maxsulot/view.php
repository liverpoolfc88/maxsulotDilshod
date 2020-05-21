<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Maxsulot */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Maxsulots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'item'],
    'itemView' => '_item_view',
    'pager' => ['class' => \kop\y2sp\ScrollPager::className()]
]);

?>
<div class="maxsulot-view">

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
            'maxsulot_name',
            'maxsulot_photo',
            'maxsulot_short',
            'maxsulot_add',
            'maxsulot_update',
            'user_id',
        ],
    ]) ?>

</div>
