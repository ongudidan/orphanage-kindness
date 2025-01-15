<?php

namespace app\modules\cms\controllers;

use app\components\Upload;
use app\models\BlogPage;
use app\models\CausePage;
use app\models\EventPage;
use app\models\HomePage;
use app\models\MainBanner;
use Yii;

class PageController extends \yii\web\Controller
{
    public $layout = 'CmsLayout';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionHome()
    {
        // $model = new MainBanner();

        $model = HomePage::find()->one() ?? new HomePage();

        // Handle main banner upload
        if ($model->load(Yii::$app->request->post())) {
            //used to pass model, file input attribute in the form, directory path and the attribute name in the model to save in the database
            Upload::upload($model, 'contactImage', 'contact_image');
            Upload::upload($model, 'mainBannerImage', 'main_banner');
            Upload::upload($model, 'backgroundImage', 'background_image');

            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Main Banner saved successfully.');
                return $this->refresh();
            }
        }


        return $this->render('home', [
            'model' => $model,
        ]);
    }

    public function actionBlog()
    {
        // $model = new MainBanner();

        $model = BlogPage::find()->one() ?? new BlogPage();

        // Handle mbanner_image upload
        if ($model->load(Yii::$app->request->post())) {
            //used to pass model, file input attribute in the form, directory path and the attribute name in the model to save in the database
            Upload::upload($model, 'imageFile', 'banner_image');
          

            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Blog page saved successfully.');
                return $this->refresh();
            }
        }


        return $this->render('blog', [
            'model' => $model,
        ]);
    }

    public function actionEvent()
    {
        // $model = new MainBanner();

        $model = EventPage::find()->one() ?? new EventPage();

        // Handle mbanner_image upload
        if ($model->load(Yii::$app->request->post())) {
            //used to pass model, file input attribute in the form, directory path and the attribute name in the model to save in the database
            Upload::upload($model, 'imageFile', 'banner_image');


            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Event page saved successfully.');
                return $this->refresh();
            }
        }


        return $this->render('event', [
            'model' => $model,
        ]);
    }

    public function actionCause()
    {
        // $model = new MainBanner();

        $model = CausePage::find()->one() ?? new CausePage();

        // Handle mbanner_image upload
        if ($model->load(Yii::$app->request->post())) {
            //used to pass model, file input attribute in the form, directory path and the attribute name in the model to save in the database
            Upload::upload($model, 'imageFile', 'banner_image');


            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Cause page saved successfully.');
                return $this->refresh();
            }
        }


        return $this->render('cause', [
            'model' => $model,
        ]);
    }
}
