<?php

namespace frontend\models;
use Yii;

class Users {
    public function GetUsers() {
        $sql = 'SELECT * FROM users';
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return $result;
    }
}

?>