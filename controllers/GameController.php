<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Game;
use app\models\GameSearch;
use yii\web\UploadedFile;

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
            //get the last ID of the table, the last ID is generated on create
            $last_id = $this->model->getLastID();
            $this->model->id = $last_id[0]['last_id'];
            //randomize the url
            $this->model->url = 'index.php?r=site%2Fdetail&id='.$last_id[0]['last_id'];
            //get the instance of the image
            $image = UploadedFile::getInstance($this->model, 'image_link');
            //get the image name
            $this->model->image_link = 'assets/images/'.$image->baseName.'.'.$image->extension;
            //validate the save before uploading the image
            if($this->model->save()){
                $image->saveAs($this->model->image_link);
                return self::actionIndex();
            }
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
        $this->model->findOne($id)->delete();
        return $this->redirect(['index']);
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

    public function actionUpdate($id)
    {
        $model = $this->model->findOne($id);
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
            'model' => $this->model->findOne($id),
        ]);
    }

}
