<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Maxsulot */

$this->title = 'Create Maxsulot';
$this->params['breadcrumbs'][] = ['label' => 'Maxsulots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maxsulot-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
