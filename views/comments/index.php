<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;

$this->title = 'Comments';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">

<div class="form-container">
    <?= Html::a(Yii::t('app', 'Add', [
        'modelClass' => 'Comment',
        ]), ['create'], ['class' => 'btn btn-success']) ?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        'id',
        [
            'attribute' => 'game_id',
            'label' => 'Game',
            'filter' => false,
        ],[
            'attribute' => 'comment',
            'label' => 'Comment',
            'filter' => false,
        ],
        ['class' => 'yii\grid\ActionColumn'],
    ]
]); ?>
</div>