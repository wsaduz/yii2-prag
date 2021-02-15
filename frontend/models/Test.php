<?php

namespace frontend\models;
use frontend\Components\Helper;
use Yii;

 class Test {
     public static function GetNewsList($max) {
         intval($max);
         $sql = "SELECT * FROM news LIMIT ".$max ;
         $result = Yii::$app->db->createCommand($sql)->queryAll();
         $helper = new Helper;
         foreach($result as &$item) {
             $item['content'] = $helper->GetShort($item['content'], null);
         }
         return $result;
     }
 }

?>