<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Cover;
use app\models\CoverSearch;
use yii\web\UploadedFile;

class CoverController extends Controller
{
    public $model;
    public $modelSearch;
    
    public function __construct($id, $module, $config = array()) {
        $this->model = new Cover();
        $this->modelSearch = new CoverSearch();
        parent::__construct($id, $module, $config);
    } 
    
    public function actionIndex()
    {
        $dataProvider = $this->modelSearch->search(Yii::$app->request->get());
        
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $this->modelSearch,
        ]);
    }
    
    public function actionCreate()
    {
        if ($this->model->load(Yii::$app->request->post())) {
            //get the instance of the image
            $image = UploadedFile::getInstance($this->model, 'image_link');
            //get the image name
            $this->model->image_link = 'assets/images/'.$image->baseName.'.'.$image->extension;
            //validate the save before uploading the image
            if($this->model->save()){
                $image->saveAs($this->model->image_link);
            }

            return $this->redirect(['index']);
        }
        
        return $this->render('create', [
            'model' => $this->model
        ]);
    }

    public function actionDelete($id)
    {
        Cover::findOne($id)->delete();
        return $this->redirect(['index']);
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

    public function actionUpdate($id)
    {
        $model = Cover::findOne($id);
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
            'model' => Cover::findOne($id),
        ]);
    }
    
    public function upload()
    {
        $this->model->image_link = Cover::getInstance($this->model, 'imageFile');
        if ($this->validate()) {
            $this->upload();
            $this->model->image_link->saveAs('assets/images/' . $this->model->image_link->baseName . '.' . $this->model->image_link->extension);
            return true;
        } else {
            return false;
        }
    }
}
