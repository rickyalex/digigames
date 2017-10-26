<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "game".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $caption
 * @property string $genre
 * @property string $image_link
 * @property string $url
 * @property string $date_created
 * @property string $created_by
 */
class Game extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'game';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_created'], 'safe'],
            [['title', 'description', 'genre', 'image_link', 'url'], 'string', 'max' => 200],
            [['caption', 'created_by'], 'string', 'max' => 100],
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
            'description' => 'Description',
            'caption' => 'Caption',
            'genre' => 'Genre',
            'image_link' => 'Image Link',
            'url' => 'Url',
            'date_created' => 'Date Created',
            'created_by' => 'Created By',
        ];
    }
}
