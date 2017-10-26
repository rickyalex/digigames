<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Game;
use app\models\GameSearch;

class GameController extends Controller
{
    public function actionCreate()
    {
        $model = new Game();
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
        $gameSearch = new GameSearch();
        $dataProvider = $gameSearch->search(Yii::$app->request->get());
        
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $gameSearch,
        ]);
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
            'model' => Game::findOne($id),
        ]);
    }

    public function actionView()
    {
        return $this->render('view', [
            'model' => Game::findOne($id),
        ]);
    }

}
