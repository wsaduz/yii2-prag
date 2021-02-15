<?php

namespace frontend\models;
use yii\base\Model;

class ModelVal extends Model {
    public $name;
    public $age;
    public $lastName;

    public $email;
    public function rules() {
        return [
            [['email'], 'required'],
            [['email'], 'email'],
        ];
    }
} 

?>