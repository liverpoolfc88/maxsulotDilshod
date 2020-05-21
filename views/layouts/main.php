<?php

/* @var $this \yii\web\View */
///* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
//echo '<pre>'; var_dump(Yii::$app->controller->module->controller->id); die();
AppAsset::register($this);
?>
<?php $this->beginPage() ?>

    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
       
       

    </head>

    <body>

    <?php $this->beginBody() ?>

    <div id="wrapper">
         <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">

                           
                          
                            <li><a href="<?=Yii::$app->UrlManager->createUrl(['/site/index'])?>">HOME</a></li>

                           



                           <? if (Yii::$app->user->isGuest){ ?>
                           
                            <li><a href="<?=Yii::$app->UrlManager->createUrl(['/site/login'])?>">login</a></li>
                           <? } else {?>
                               
                               <li><a href="#" onclick="$('#form1').submit()">logout</a></li>
                               <form id="form1" action="<?=Yii::$app->UrlManager->createUrl(['/site/logout'])?> " method="post">
                               </form>

                               <?
    }?>


                        </ul>
                    </div>


        <div>
        <?=$content?>
        </div>
      
    </div>
    

  

    <?php $this->endBody() ?>
    </body>

    </html>
<?php $this->endPage() ?>