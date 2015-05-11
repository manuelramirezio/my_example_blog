<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LoginForm */
/* @var $form ActiveForm */
?>
<div class="contact">
<div class="container">
    <h3>АВТОРИЗАЦИЯ</h3>
    <div class= "col-md-6 content-main center">

<div class="contact-head">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
    
        <div class="form-group">
            <?= Html::submitButton('Войти', ['class' => 'primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- post-login -->
        <div class="clearfix"></div>
</div>
        </div>
    </div>

