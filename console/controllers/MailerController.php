<?php


namespace console\controllers;
use console\models\Mailer;
use \yii\console\Controller;

class MailerController extends Controller {

    public function actionSend() {
        print_r(Mailer::getList());
    }
}

?>