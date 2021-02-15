<?php

namespace frontend\controllers;
use yii\web\Controller;
use Yii;

class DbController extends Controller {
    public function actionIndex() {
        // $sql = "SELECT * FROM users";
        // $result = Yii::$app->bd2->createCommand($sql)->queryAll();
        // print_r($result);die;
        // $db = new yii\db\Connection([
        //     'dsn' => 'mysql:host=localhost;dbname=ail_company',
        //     'username' => 'root',
        //     'password' => '',
        //     'charset' => 'utf8',
        // ]);
        // print_r($db);die;
        echo '<pre>';
        print_r(Yii::$app->db2->createCommand('SELECT * FROM users')->queryAll());die;
    }
}

?>