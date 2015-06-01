<?php
use \yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Категории новостей';
?>
<div class="content">
    <div class="container">
        <div class="content-grids">
            <div class="col-md-8 content-main">
                <div class="content-grid">
                    <div class="content-grid-head">
                        <div class="clearfix"></div>
                    </div>
                    <div class="content-grid-info">

                       <?php foreach($model as $models): ?>
                            <h5>July 24, 2014  Posted by: <a href="#"><?php echo $models->username ?></a></h5>
                            <h3><a href="<?php echo Url::to(['article/single', 'id'=>$models->a_id])?>"><?php echo $models->title; ?></a></h3>
                            <p><?php echo $models->text ?></p>
                            <img src="/../web/public/images/<?php echo $models->image ?>" alt=""/>
                            <a class="bttn" href="<?php echo Url::to(['article/single', 'id'=>$models->a_id])?>">БОЛЬШЕ</a>
                            <hr>
                      <?php endforeach; ?>

                    </div>


                </div>

            </div>

        </div>

        <div class="col-md-4 content-main-right">
            <div class="categories">
                <h3>КАТЕГОРИИ</h3>
               <?php foreach($m as $mod): ?>
                    <li><a href="<?php echo Url::to(['article/category', 'id'=>$mod->id])?>"><?php echo $mod->name ?></a></li>
                <?php endforeach;?>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>