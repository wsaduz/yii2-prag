<?php

namespace frontend\models;
use yii\base\Model;
use Yii;

class Register extends Model {
    const SCENARION_REGISTER = 'register_register';
    const SCENARION_UPADETE = 'register_update';
    public $name;
    public $lastname;
    public $email;
    public $asd;

    public function scenarios()
    {
        return [
            self::SCENARION_REGISTER => ['name', 'lastname', 'email'],
            self::SCENARION_UPADETE => ['name', 'lastname']
        ];
    }
    public function rules()
    {
        return [
            [['name','asd', 'lastname', 'email'], 'required'],
            [['name'], 'string', 'min' => 3],
            [['lastname'], 'string', 'min' => 4],
            [['email',], 'email'],
            
        ];
    }
    public function save($model) {
        $sql = "INSERT INTO users (id, name, email) VALUES (null, '{$model['name']}', '{$model['email']}')";
        return Yii::$app->db->createCommand($sql)->execute();
    }
}

?>