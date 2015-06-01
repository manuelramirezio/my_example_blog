<?php
use \yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Пользователи';
?>
<div class="content">
    <div class="container">
        <div class="content-grids">
            <div class="col-md-8 content-main">
                <div class="content-grid">
                    <div class="content-grid-info">

                        <?php foreach($users as $user): ?>
                           <?php echo $user->username ?>
                            <hr>
                        <?php endforeach; ?>

                    </div>


                </div>

            </div>

        </div>


        <div class="clearfix"></div>
    </div>
    </div>


