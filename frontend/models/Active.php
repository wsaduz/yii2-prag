<?php

namespace frontend\models;
use yii\db\ActiveRecord;
use Yii;

class Active extends ActiveRecord {
    public static function tableName() {
        return '{{users}}';
    }
    public function rules() {
        return [
            [['name', 'email', 'telegram'], 'required'],
            [['email'], 'email'],
            [['image','name','email'],'string', 'min' => '3']
        ];
    }
    public function getDate() {
        return ($this->image) ? Yii::$app->formatter->asDate($this->image) : "Not SET";
    }
    public function getPublisher() {
        return $this->hasOne(Publisher::className(), ['user_id' => 'id'])->one();
    }
}

?>