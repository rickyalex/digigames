<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Cover;
use app\models\CoverSearch;

class CoverController extends Controller
{

    public function actionIndex()
    {
        $coverSearch = new CoverSearch();
        $dataProvider = $coverSearch->search(Yii::$app->request->get());
        
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $coverSearch,
        ]);
    }
    
    public function actionCreate()
    {
        $model = new Cover();
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['index']);
        }
        
        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionRemove($id)
    {
        $model = $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

    public function actionUpdate($id)
    {
        return $this->render('update', [
            'model' => Cover::findOne($id),
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => Cover::findOne($id),
        ]);
    }
    
    
}
