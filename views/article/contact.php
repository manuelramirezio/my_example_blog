<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact">
    <div class="container">
        <div class="contact-head">
            <h3>CONTACT</h3>
            <form>
                <div class="col-md-6 contact-left">
                    <input type="text" placeholder="Name" required/>
                    <input type="text" placeholder="E-mail" required/>
                    <input type="text" placeholder="Phone" required/>
                </div>
                <div class="col-md-6 contact-right">
                    <textarea placeholder="Message"></textarea>
                    <input type="submit" value="SEND"/>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="address">
            <h3>Мое расположение</h3>
            <div class="col-md-6 locations">
                <ul>
                    <li><span></span></li>
                    <li>
                        <div class="address-info">
                            <h4>Пономаренко Юрий</h4>
                           <p>Веб-разработка</p>
                            <p>Украина</p>
                            <p>Телефон: 123 456 7890</p>
                            <p>Почта: <a href="mailto:blackflag8668@gmail.com">Пришлите сообщение</a></p>
                            <h5><a href="">Найти на Google Maps >></a></h5>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>