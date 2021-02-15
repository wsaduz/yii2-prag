<?php

namespace frontend\models;
use Yii;

class News {
    public function GetNewsList($id) {
         $sql = "SELECT * FROM news WHERE id = $id";
         $result = Yii::$app->db->createCommand($sql)->queryAll();
         return $result; 
    }
}

?>