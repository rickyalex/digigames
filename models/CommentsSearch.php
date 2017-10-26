<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;
use \app\models\Game;

/**
 * This is the model class for table "cover".
 *
 * @property integer $id
 * @property string $caption
 * @property string $image_link
 * @property string $url
 */
class CommentsSearch extends Comments
{
    
    public function search($params){
        $query = Comments::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        if(!$this->load($params) && $this->validate()){
            return $dataProvider;
        }
        
        $query->orFilterWhere(['LIKE', 'comment', $this->getAttribute('comment')]);
        
        return $dataProvider;
    }
}
