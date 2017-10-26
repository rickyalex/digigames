<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property integer $game_id
 * @property string $comment
 * @property string $date_created
 * @property string $created_by
 */
class Comments extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['game_id', 'comment'], 'required'],
            [['game_id'], 'integer'],
            [['comment'], 'string'],
            [['date_created'], 'safe'],
            [['created_by'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'game_id' => 'Game ID',
            'comment' => 'Comment',
            'date_created' => 'Date Created',
            'created_by' => 'Created By',
        ];
    }
}
