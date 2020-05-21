<?php
// use Yii;

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>


<?

$helper = new \app\components\Helper;
echo $helper->getActive(5,5);
// echo $helpe;
if (!Yii::$app->user->isGuest) {
	echo Yii::$app->user->identity->username;
}
?>