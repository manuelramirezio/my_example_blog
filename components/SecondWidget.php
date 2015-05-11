<?php
namespace app\components;

use yii\base\Widget;

class SecondWidget extends FirstWidget
{
    public function init(){
        parent::init();
        ob_start();

    }

    public function run(){
        $content = ob_get_clean();
        return $this->render('second', ['content' => $content]);
    }
}