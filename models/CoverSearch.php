<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;
use \app\models\Cover;

/**
 * This is the model class for table "cover".
 *
 * @property integer $id
 * @property string $caption
 * @property string $image_link
 * @property string $url
 */
class CoverSearch extends Cover
{
    
    public function search($params){
        $query = Cover::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        if(!$this->load($params) && $this->validate()){
            return $dataProvider;
        }
        
        $query->orFilterWhere(['LIKE', 'image_link', $this->getAttribute('image_link')])
                ->orFilterWhere(['LIKE', 'url', $this->getAttribute('url')]);
        
        return $dataProvider;
    }
}
