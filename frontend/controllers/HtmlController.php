<?php

namespace frontend\controllers;
use yii\web\Controller;

class HtmlController extends Controller {
    public function actionDemo() {
        return $this->render('demo');
    }
}

?>