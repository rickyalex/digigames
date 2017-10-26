<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Game;
use app\models\GameSearch;

class GameController extends Controller
{
    public $model;
    public $modelSearch;
    
    public function __construct($id, $module, $config = array()) {
        $this->model = new Game();
        $this->modelSearch = new GameSearch();
        parent::__construct($id, $module, $config);
    }      
    
    public function actionCreate()
    {
        if ($this->model->load(Yii::$app->request->post())) {
            $this->model->save();
            return $this->redirect(['index']);
        }
        
        return $this->render('create', [
            'model' => $this->model
        ]);
    }

    public function actionIndex()
    {
        $dataProvider = $this->modelSearch->search(Yii::$app->request->get());
        
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $this->modelSearch,
        ]);
    }

    public function actionDelete($id)
    {
        Game::findOne($id)->delete();
        return $this->redirect(['index']);
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

    public function actionUpdate($id)
    {
        $model = Game::findOne($id);
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['index']);
        }
        else{
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => Game::findOne($id),
        ]);
    }

}
