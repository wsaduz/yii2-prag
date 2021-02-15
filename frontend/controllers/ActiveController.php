<?php

namespace frontend\controllers;
use yii\web\Controller;
use Yii;
use frontend\models\Active;

class ActiveController extends Controller {
    public function actionIndex() {
        $active = new Active();
        
        if($active->load(Yii::$app->request->post()) && $active->save()) {
            Yii::$app->session->setFlash('success', 'Запись добавлена');
            return $this->refresh();
        }
        return $this->render('index', ['active' => $active]);
    }


    public function actionRecord() {
        $query = Active::find()->where(['email' => 'pvpali@bk.ru'])->limit('2')->all();


        return $this->render('record',['query' => $query]);
    }

}

?>