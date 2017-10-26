<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "cover".
 *
 * @property integer $id
 * @property string $caption
 * @property string $image_link
 * @property string $url
 */
class Cover extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cover';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['caption', 'image_link', 'url'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'caption' => 'Caption',
            'image_link' => 'Image Link',
            'url' => 'Url',
        ];
    }
    
    
}
