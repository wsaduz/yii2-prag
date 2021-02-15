<?php

namespace frontend\Components;
use Yii;

class Helper {

    private $limit;

    public function __construct()
    {
       $this->limit = Yii::$app->params['maxLimit'];
    }

    public function GetShort($str, $limit = null) {

        if($limit === null) {
            $limit = $this->limit;
        }

        return substr($str, 0, $limit);

    }
}

?>