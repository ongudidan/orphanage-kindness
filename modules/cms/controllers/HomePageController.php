<?php

namespace app\modules\cms\controllers;

use app\components\Upload;
use app\models\HomePage;
use app\modules\cms\models\HomePageSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HomePageController implements the CRUD actions for HomePage model.
 */
class HomePageController extends Controller
{
    public $layout = 'CmsLayout';

    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all HomePage models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new HomePageSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HomePage model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new HomePage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        // $model = new HomePage();

        $model = HomePage::find()->one() ?? new HomePage();

        // Handle main banner upload
        if ($model->load(Yii::$app->request->post())) {
            //used to pass model, file input attribute in the form, directory path and the attribute name in the model to save in the database
            $uploadedFile = Upload::upload($model, 'contactImage', 'contact_image');
            $uploadedFile = Upload::upload($model, 'mainBannerImage', 'main_banner');
            $uploadedFile = Upload::upload($model, 'backgroundImageFile', 'background_image');

            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Main Banner saved successfully.');
                return $this->refresh();
            }
        }


        return $this->render('home', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing HomePage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing HomePage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HomePage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return HomePage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = HomePage::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
