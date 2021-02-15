<?php

namespace console\models;
use Yii;

class Mailer {
    public function getList() {
        $sql = "SELECT * FROM news WHERE id = 3";
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return $result;
    }
}

?>