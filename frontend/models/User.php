<?php

namespace frontend\models;

use Codeception\PHPUnit\ResultPrinter;
use Yii;

class User {
    public function GetInfo($id) {
        $sql = "SELECT * FROM users WHERE id =".$id;
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return $result;
    }
}

?>