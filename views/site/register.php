<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">

<div class="site-login">
    <div class="form">
        <?php
                        $form = ActiveForm::begin([
                                    'id' => 'register-form',
                                    'layout' => 'horizontal',
                                    'fieldConfig' => [
                                        'template' => "{label}\n<div class=\"col-sm-12 col-lg-6\">{input}</div>\n<div class=\"col-sm-12 col-lg-3\">{error}</div>",
                                        'labelOptions' => ['class' => 'col-sm-12 col-lg-3 control-label'],
                                    ]
                        ]);
                        ?>
          <?= $form->field($model, 'first_name')->textInput(['autofocus' => true, 'class' => 'string', 'size' => 50, 'placeholder' => 'Your First Name']) ?>
          <?= $form->field($model, 'last_name')->textInput(['class' => 'string', 'size' => 50, 'placeholder' => 'Your Last Name']) ?>
          <?= $form->field($model, 'email')->textInput(['type' => 'email', 'class' => 'string', 'size' => 50, 'placeholder' => 'Email Address']) ?>
          <?= $form->field($model, 'username')->textInput(['class' => 'string', 'size' => 50, 'placeholder' => 'Username']) ?>
          <?= $form->field($model, 'password')->passwordInput(['class' => 'string', 'placeholder' => 'Password', 'size' => 50, 'id' => 'user-pw']) ?>
                                <?= Html::submitButton('Register', ['class' => 'sumbit', 'name' => 'register-button']) ?>
          <p class="message">Already registered? <?= Html::a('Log In', ['/site/login2']) ?></p>
        <?php ActiveForm::end(); ?>
      </div>
</div>
<script  src="assets/index.js"></script>