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
            [['title','caption'], 'string', 'max' => 200],
            [['image_link'], 'file', 'extensions' => 'png, jpg, jpeg']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'caption' => 'Caption',
            'image_link' => 'Image Link'
        ];
    }
    
}
