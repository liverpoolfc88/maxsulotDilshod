<?php

namespace app\controllers;

use Yii;
use app\models\Maxsulot;
use app\models\User;
use app\models\MaxsulotSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * MaxsulotController implements the CRUD actions for Maxsulot model.
 */
class MaxsulotController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Maxsulot models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MaxsulotSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Maxsulot model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Maxsulot model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Maxsulot();
        $user= User::findOne(Yii::$app->user->identity->id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $image=UploadedFile::getInstance($model,'maxsulot_photo');
            $name = 'img/' . mt_rand() . "." . $image->extension;
            $image->saveAs($name);
            $model->maxsulot_photo = $name;

            $model->save();
         

           
            return $this->redirect(['site/index', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Maxsulot model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model2=clone $model;
         $user= User::findOne(Yii::$app->user->identity->id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
             $image=UploadedFile::getInstance($model,'maxsulot_photo');
              if ($image==null) {
                $model->maxsulot_photo = $model2->maxsulot_photo;
            }

            else {
                $name = 'img/' . uniqid() . "." . $image->extension;
                $image->saveAs($name);
                $model->maxsulot_photo = $name;
                @unlink($model2->maxsulot_photo);
            }

            $model->save();

            return $this->redirect(['site/index', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Maxsulot model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['site/index']);
    }

    /**
     * Finds the Maxsulot model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Maxsulot the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Maxsulot::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
