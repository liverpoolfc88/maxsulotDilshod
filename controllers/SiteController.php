<?php

namespace app\controllers;

use app\models\SignupForm;
use app\models\User;
use app\models\Education;
use app\models\Maxsulot;
use app\models\Skill;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;


class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
//            'captcha' => [
//                'class' => 'yii\captcha\CaptchaAction',
//                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
//            ],
            'captcha' => [
                'class' => 'lubosdz\captchaExtended\CaptchaExtendedAction',
                // optionally, set mode and obfuscation properties e.g.:
                'mode' => 'math',
                //'mode' => CaptchaExtendedAction::MODE_MATH,
                //'resultMultiplier' => 5,
                //'lines' => 5,
                //'density' => 10,
                //'height' => 50,
                //'width' => 150,
            ],
        ];
    }

    public function beforeAction($action)
    {
//        echo "<pre>"; var_dump($action->id); die();
        if ($action->id == 'logout') {
            $this->enableCsrfValidation = false;
        }
        // if (Yii::$app->user->isGuest) {
        //     if((Yii::$app->controller->action->id!='login') && 
        //     (Yii::$app->controller->action->id!='signup')){
        //     $model = new LoginForm();
        //     return $this->redirect(['login', 'model' => $model]);
        // }
        // }
        return parent::beforeAction($action);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
       
          
       
        $maxsulot=Maxsulot::find()->all();
        return $this->render('index',[
            'maxsulot'=>$maxsulot,
           

        ]);
       

       
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }



     public function actionUpdate()
        {
            $model=User::findOne(Yii::$app->user->identity->id);
            if ($model->load(Yii::$app->request->post())) {

                $model->save();
            
                    return $this->goHome();
            
        }

        return $this->render('update', [
            'model' => $model,
        ]);
        }


   

    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
            'captcha' => [
            'class' => 'lubosdz\captchaExtended\CaptchaExtendedAction',
            // optionally, set mode and obfuscation properties e.g.:
//            'mode' => 'math',
            // 'mode' => CaptchaExtendedAction::MODE_MATH,
//            'resultMultiplier' => 5,
//            'lines' => 5,
//            'density' => 10,
//            'height' => 50,
//            'width' => 150,
        ],
        ]);
    }





    public function actionSkillCreate()
    {
        $model = new Skill();

        if ($model->load(Yii::$app->request->post())) {
            $model->user_id = Yii::$app->user->identity->id;
            $model->save() ;
            return $this->redirect(['site/index', 'id' => $model->id]);
        } else {
            return $this->render('skill_create', [
                'model' => $model,
            ]);
        }
    }





    public function actionSkillUpdate($id)
    {
        $model=Skill::findOne($id);

        if ($model->load(Yii::$app->request->post())) {

                $model->save();
            
                    return $this->goHome();
            
        }

        return $this->render('skill_update', [
            'model' => $model,
        ]);
    }


    public function actionSkillDelete($id)
    {
        $model=Skill::findOne($id);
        $model->delete();
        return $this->goHome();
    }

}
