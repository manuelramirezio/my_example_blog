<?php
use \yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Блог новостей';
?>
<div class="content">
<div class="container">
    <div class="content-grids">
        <div class="col-md-8 content-main">
            <div class="content-grid">
                    <div class="content-grid-info">
                        <?php foreach($models as $model): ?>
                            <h5>July 24, 2014  Posted by: <a href="<?php echo Url::to(['article/users', 'id'=>$model->u_id])?>"><?php echo $model->username ?></a></h5>
                            <h5>Категория: <a href="<?php echo Url::to(['article/category', 'id'=>$model->c_id])?>"><?php echo $model->name; ?> </a></h5>
                            <h3><a href="<?php echo Url::to(['article/single', 'id'=>$model->a_id])?>"><?php echo $model->title; ?></a></h3>
                            <p><?php echo $model->text; ?></p>
                            <img src="/../web/public/images/<?php echo $model->image; ?>" alt=""/>
                            <a class="bttn" href="<?php echo Url::to(['article/single', 'id'=>$model->a_id])?>">БОЛЬШЕ</a>
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
                <?php endforeach; ?>
            </div>
            <div class="archives">
                <h3>ARCHIVES</h3>
                <li class="active"><a href="#">July 2014</a></li>
                <li><a href="#">June 2014</a></li>
                <li><a href="#">May 2014</a></li>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>