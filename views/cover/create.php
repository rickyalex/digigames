<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cover */

$this->title = 'Create Cover';
$this->params['breadcrumbs'][] = ['label' => 'Covers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
