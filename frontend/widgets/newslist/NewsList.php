<?php

namespace frontend\widgets\NewsList;
use Yii;
use frontend\models\Test;

use yii\base\Widget;

class NewsList extends Widget {
    public $newsList = null;
    public function run() {
        $max = Yii::$app->params['max'];
        if($this->newsList != null) {
            $max = $this->newsList;
        }
        $admin = Yii::$app->params['admin'];
      
        $list = Test::GetNewsList($max);

        return $this->render('block', [
            'list' => $list, 'admin' => $admin,
        ]);
    }
}

?>