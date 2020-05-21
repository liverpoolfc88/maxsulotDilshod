<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My products';
?>


    <div class="container">
        <div style="background-color: white; padding: 15px" class="row">

          <div>
            

           <h4>Tab</h4>

        <table class="table table-striped">

       
          <thead class="thed"> 
                <tr>
                  <th>T/R</th>
                  <th>Maxsulot nomi</th>
                  <th>Maxsulot rasmi</th>
                  <th>Maxsulot tasnifi</th>
                  <th>Maxsulot qo`shgan user</th>
                  <th>Maxsulotni taxrirlagan user</th>
                  <?if (!Yii::$app->user->isGuest) { ?>
                  <th>
                    <a style="color: white" href="<?=Url::to(['maxsulot/create']);?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add</a>
                  </th>
                  <?}?>
                 
                </tr>
            </thead>
         
          <tbody>
             <? foreach ($maxsulot as $key => $value) {?>       
            <tr>
                  <th scope="row"><?=$key+1?></th>
                  <td><?=$value->maxsulot_name?></td>
                  <td>
                    <img style="height: 100px" src="<?=$value->maxsulot_photo?>">
                  </td>
                  <td><?=$value->maxsulot_short?></td>
                  <td><?=$value->addUser->username." (".date("d-m-Y",$value->created_at).")"?></td>
                  <td><?=($value->updateUser->username)?$value->updateUser->username." (".date("d-m-Y",$value->updated_at).")":""?></td>
                    <?if (!Yii::$app->user->isGuest) { ?>
                  <td>
                    <a href="<?=Url::to(['maxsulot/update','id'=>$value->id]);?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                      <a href="<?=Url::to(['maxsulot/delete','id'=>$value->id]);?>" title="Delete" aria-label="Delete" data-pjax="0" data-confirm="Ushbu bo`lim o`chirib tashlansinmi?" data-method="post"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                   
                  </td><?}?>
                  
                
            </tr>
              <?}?>
          </tbody>
        </table>
          </div>

           

    </div>


 <style type="text/css">
        .tugma{
          text-align: center;
        }
      </style>
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