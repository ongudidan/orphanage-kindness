<?php

namespace app\controllers;

use app\models\Blog;
use app\models\Cause;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Event;
use app\models\EventPage;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionBlog()
    {
        $model = Blog::find()->orderby(['id' => SORT_DESC])->all();
        return $this->render('blog', [
            'model' => $model,
        ]);
    }

    public function actionSingleBlog($id)
    {
        $model = Blog::findOne($id);
        return $this->render('single-blog', [
            'model' => $model,
        ]);
    }

    public function actionEvent()
    {
        $model = Event::find()->orderby(['id' => SORT_DESC])->all();
        $eventBanner = EventPage::find()->one();

        return $this->render('event',[
            'model' => $model,
            'eventBanner' => $eventBanner,
        ]);
    }

    public function actionSingleEvent($id)
    {
        $model = Event::findOne($id);
        $eventBanner = EventPage::find()->one();

        return $this->render('single-event', [
            'model' => $model,
            'eventBanner' => $eventBanner,
        ]);
    }


    public function actionCause()
    {
        $model = Cause::find()->orderby(['id' => SORT_DESC])->all();

        return $this->render('cause',[
            'model' => $model,
        ]);
    }

    public function actionSingleCause($id)
    {
        $model = Cause::findOne($id);
        return $this->render('single-cause', [
            'model' => $model,
        ]);
    }

    public function actionGallery()
    {
        return $this->render('gallery');
    }

    public function actionTeam()
    {
        return $this->render('team');
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

        $model->password = '';
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
}
