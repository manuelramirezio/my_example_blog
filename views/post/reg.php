<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegForm */
/* @var $form ActiveForm */
?>
<div class="contact">
<div class="container">
    <div class= "col-md-6 content-main center">
<div class="contact-head">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
    
        <div class="form-group">
            <?= Html::submitButton('Регистрация', ['class' => 'primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>


</div><!-- post-reg -->
        <div class="clearfix"></div>
        </div>
        </div>
    </div>
