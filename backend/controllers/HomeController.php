<?php

namespace backend\controllers;

use Yii;
use common\models\Home;
use backend\models\HomeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\Pagination;
use yii\data\ActiveDataProvider;

use yii\filters\AccessControl;


/**
 * HomeController implements the CRUD actions for Home model.
 */
class HomeController extends Controller
{
    public function behaviors()
    {
        return [

            'access' =>[
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index','view','create','update','delete'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Home models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HomeSearch();
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider = new ActiveDataProvider([
            'query' => Home::find(),
            'pagination' => [
                'pageSize' => 3,
            ],
        ]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Home model.
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
     * Creates a new Home model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Home();

        if ($model->load(Yii::$app->request->post())) 
        {
            $model->img= UploadedFile::getInstance($model, 'img');

            $model->img->saveAs(Yii::$app->urlManager->baseUrl.'/uploads/'.$model->img->baseName.'.'.$model->img->extension);

            
            $model->img='uploads/'.$model->img->baseName.'.'.$model->img->extension;
            
            if($model->save())
                return $this->redirect(['view', 'id' => $model->home_id]);
        } 
        else 
        {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Home model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $model_img=$model->img;


        if ($model->load(Yii::$app->request->post())) 
        {
            $model->img= UploadedFile::getInstance($model, 'img');

            $img_new='uploads/'.$model->img->baseName.'.'.$model->img->extension;
            //Kiểm tra file hình đã chọn là mới hay cũ
            if($model_img!==$img_new && $model_img!='')
            {
                $model_img=Yii::$app->urlManager->baseUrl.'/'.$model_img;
                unlink($model_img);
              
            }
            $model->img->saveAs(Yii::$app->urlManager->baseUrl.'/uploads/'.$model->img->baseName.'.'.$model->img->extension);
            
            $model->img='uploads/'.$model->img->baseName.'.'.$model->img->extension;
            
            if($model->save())

                return $this->redirect(['view', 'id' => $model->home_id]);
        } 
       
        return $this->render('update', [
                'model' => $model,
            ]);
        
    }

    /**
     * Deletes an existing Home model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Home model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Home the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Home::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
