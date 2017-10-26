<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Comments;
use app\models\CommentsSearch;

class CommentsController extends Controller
{
    public function actionCreate()
    {
        $model = new Comments();
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['index']);
        }
        
        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionIndex()
    {
        $commentsSearch = new CommentsSearch();
        $dataProvider = $commentsSearch->search(Yii::$app->request->get());
        
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $commentsSearch,
        ]);
        return $this->render('index');
    }

    public function actionRemove()
    {
        $model = $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

    public function actionUpdate()
    {
        return $this->render('update', [
            'model' => Comments::findOne($id),
        ]);
    }

    public function actionView()
    {
        return $this->render('view', [
            'model' => Comments::findOne($id),
        ]);
    }

}
