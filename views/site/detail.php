<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\Detail */
/* @var $model app\models\Game */

$this->title = $game['title'];
$this->params['breadcrumbs'][] = ['label' => 'Game', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-container">
    <div class="row">
        <div class="col-lg-2">
            <div class="game-title"><h3><?= Html::encode($this->title) ?></h3></div>
        </div>
    </div>
    

    <div class="row">
        <div class="col-lg-6">
            <img src="<?= $game['image_link']; ?>"/>
        </div>
        <div class="col-lg-6">
            <h3>Description</h3>
            <p><?= $game['description']; ?></p>
            <h3>Genre</h3>
            <p><?= $game['genre']; ?></p>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <?php $comments = isset($comments) ? $comments : 0; ?>
            <h3><?php echo count($comments); ?> Comments</h3>
            <?php if($comments != 0){ ?>
            <?php foreach ($comments as $comment => $item): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="comment-head">
                        <div class="col-lg-3">
                            <p><b><?= $usersModel->getUsernameById($item->created_by) ?></b></p>
                        </div>
                        <div class="col-lg-3">
                            <p class="time"><b><?= $gameModel->time_ago($item->date_created) ?></b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="comment-body">
                        <p><?= $item->comment ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php if(!Yii::$app->user->isGuest) { ?>
            <div class="form">
            <?php 
                        $form = ActiveForm::begin([
                                    'id' => 'comment-form',
                                    'layout' => 'horizontal',
                                    'fieldConfig' => [
                                        'template' => "{label}\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"col-lg-3\">{error}</div>",
                                        'labelOptions' => ['class' => 'col-lg-3 control-label'],
                                    ],
                            'action' => ['comments/submit']
                        ]);
                        ?>
            <?= Html::hiddenInput("Comments['created_by']", Yii::$app->user->identity->id_user); ?>
            <?= $form->field($commentModel, 'comment')->textInput(['class' => 'string', 'size' => 50, 'placeholder' => 'Add Your Comment Here']) ?>
            <?= Html::submitButton('Submit', ['class' => 'sumbit', 'name' => 'comment-button']) ?>
            <?php ActiveForm::end(); ?>
            <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
