<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use \yii\web\View;
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

/**
 * @var $content string
 * @var $this \yii\web\View
 */
AppAsset::register($this);
$this->beginPage();
?>

    <!DOCTYPE HTML>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?=  Html::encode($this->title)?></title>
        <?php $this->head(); ?>

        <?php $this->registerMetaTag(['name'=> 'viewport', 'content'=> 'width=device-width, initial-scale=1']) ?>
        <meta charset="<?= Yii::$app->charset ?>" />
        <meta name="keywords" content="Blogname Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"
            />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!----webfonts---->
        <link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
        <!----//webfonts---->
        <!--end slider -->
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html, body').animate({scrollTop:$(this.hash).offset().top},900);
                });
            });
        </script>
        <!---->

    </head>
    <body>
    <?php $this->beginBody(); ?>
    <!---strat-banner---->
    <div class="banner">
        <div class="header">
            <div class="container">
                <div class="logo">
                    <!--                <a href="index.html"> <img src="/web/images/logo.png" title="soup" /></a>-->
                </div>
                <!---start-top-nav---->
                <div class="top-menu">
                    <span class="menu"> </span>
                    <ul>
                        <li><a href="/">НА ГЛАВНУЮ</a></li>
                        <li><a href="/../article/contact">КОНТАКТЫ</a></li>
                        <li><?php

                            ActiveForm::begin([
                                'action' => ['post/search'],
                                'method' => 'post',
                                //'options' =>
                                //['class' => 'navbar-form navbar-right']

                            ]);
                            echo '<div class="input-group">';
                            echo Html::input(
                                'type: text',
                                'search',
                                '',
                                [
                                    'placeholder' => 'Найти...',
                                    'class' => 'form-control'
                                ]
                            );
                            echo '<span class="input-group-btn">';
                            echo Html::submitButton(
                                '<class ="search"></class>',
                                [
                                    'class' => 'search'
                                ]
                            );
                            echo '</div>';
                            ActiveForm::end();

                            ?></li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <script>
                    $("span.menu").click(function(){
                        $(".top-menu ul").slideToggle("slow" , function(){
                        });
                    });
                </script>
                <!---//End-top-nav---->
            </div>
        </div>
        <div class="container">
            <div class="banner-head">
                <h1>Админ панель</h1>
                <h2>сайта "Новости"</h2>
            </div>
            <div class="banner-links">
                <ul>
                    <li><a href="/../article/index">Статьи</a></li>
                    <li><a href="login">Категории статей</a></li>
                    <li><a href="reg">Пользователи</a></li>

                    <div class="clearfix">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3 content-right">
                                <li>

                                </li>
                            </div>
                        </div>
                </ul>
            </div>
        </div>
    </div>
    <!---//End-banner---->

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>

    <!--fotter-->
    <div class="fotter">

        <!---fotter/-->
        <div class="copywrite">
            <div class="container">
                <p>Copyrights &copy; 2015  Yuriy Ponomarenko</a></p>
            </div>
        </div>
        <!---->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear'
                 };
                 */
                $().UItoTop({ easingType: 'easeOutQuart' });
            });
        </script>
        <a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

        <?php $this->endBody(); ?>
    </body>
    </html>
<?php
$this->endPage();