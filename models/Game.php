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
class Game extends ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'game';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['date_created'], 'safe'],
            [['title', 'description', 'genre', 'image_link', 'url'], 'string', 'max' => 200],
            [['caption', 'created_by'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
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
    
    
    //function to convert date into time ago
    public function time_ago($date) {
        if (empty($date)) {
            return "No date provided";
        }
        $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
        $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
        $now = time();
        $unix_date = strtotime($date);
// check validity of date
        if (empty($unix_date)) {
            return "Bad date";
        }
// is it future date or past date
        if ($now > $unix_date) {
            $difference = $now - $unix_date;
            $tense = "ago";
        } else {
            $difference = $unix_date - $now;
            $tense = "from now";
        }
        for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
            $difference /= $lengths[$j];
        }
        $difference = round($difference);
        if ($difference != 1) {
            $periods[$j].= "s";
        }
        return "$difference $periods[$j] {$tense}";
    }

}
