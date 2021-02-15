<?php

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\Test;
use frontend\models\News;
use frontend\models\ModelVal;
use Yii;
use yii\validators\Validator;

class TestController extends Controller {
    public function actionQwerty() {

        $max = Yii::$app->params['max'];
        $admin = Yii::$app->params['admin'];

        $list = Test::GetNewsList($max);
        return $this->render('qwerty', [
            'list' => $list, 'admin' => $admin,
        ]);

    }
    public function actionIndex($id) {
        $name ='Ali';
        $list = News::GetNewsList($id);
        
        return $this->render('index', [
        'list' => $list, 'name' => $name, 'id' => $id]);
    }
    public function actionMail() {
        echo "Email test";die;
    }
    
    public function actionVal() {
        $Validation = new ModelVal;
        $Validation['name'] = 'Ali';
        $Validation->age = '17';
        $Validation->lastName = 'Akbarov';

        #Объект вызок способом array/массив 

        echo $Validation->name."<br>";
        echo $Validation['name']."<br>";
        echo $Validation['age']."<br>";
        echo $Validation['lastName'];
        echo "<hr>";

        #Объект foreach :3

        foreach($Validation as $item => $value) {
            echo "$item: $value <br>";
        }

        $ValArray = $Validation->toArray();

        echo "<pre>";
        print_r($ValArray);

        die;
    }
}


?>