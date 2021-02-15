<?php

namespace frontend\controllers;
use yii\web\Controller;

class SliderController extends Controller {
    public function actionIndex() {
        // echo 'asd';die;
        return $this->render('slider');
    }
}

?>