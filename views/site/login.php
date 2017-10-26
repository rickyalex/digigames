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
        <?php if(Yii::$app->session->hasFlash('success')){ ?>
        <div class="alert alert-success">
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
        <?php } ?>
        <?php
                        $form = ActiveForm::begin([
                                    'id' => 'login-form',
                                    'layout' => 'horizontal',
                                    'fieldConfig' => [
                                        'template' => "{label}\n<div class=\"col-sm-12 col-lg-12\">{input}</div>\n<div class=\"col-sm-12  col-lg-12\">{error}</div>",
                                        'labelOptions' => ['class' => 'col-sm-12 col-lg-12 control-label'],
                                    ]
                        ]);
                        ?>
          <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'string optional', 'size' => 50, 'placeholder' => 'Username']) ?>
          <?= $form->field($model, 'password')->passwordInput(['class' => 'string optional', 'placeholder' => 'Password', 'size' => 50, 'id' => 'user-pw']) ?>
          <?= Html::submitButton('Login', ['class' => 'sumbit', 'name' => 'login-button']) ?>
          <p class="message">Not registered? <?= Html::a('Create an account', ['/site/register']) ?></p>
        <?php ActiveForm::end(); ?>
      </div>
</div>

</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>