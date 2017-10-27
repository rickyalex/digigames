<?php

use yii\helpers\Html;

/* @var $this yii\web\Detail */
/* @var $model app\models\Game */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Game', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-container">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'caption',
            'image_link',
            'url:url',
        ],
    ]) ?>

</div>
