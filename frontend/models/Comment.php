<?php

namespace frontend\models;
use Yii;
use yii\base\Model;

class Comment extends Model {
    const COMMENT_ADD = 'comment_add';
    const COMMENT_UPDATE = 'comment_update';
    public $name;
    public $img;
    public $coment;
    //public $date;

    public function scenarios()
    {
        return [
            self::COMMENT_ADD => ['name', 'coment'],
            self::COMMENT_UPDATE => ['coment'],
        ];
    }

    public function rules() {
        return [
            [['name', 'coment'], 'required'],
            [['coment'], 'string', 'min' => '3'],
            [['coment'], 'string', 'min' => '5', 'max' => '140'],
        ];
    }
    public function save($model) {
        $sql = "INSERT INTO comments (id, name, content) VALUES (null, '{$model['name']}', '{$model['coment']}')";
        return Yii::$app->db->createCommand($sql)->execute();
    }
    public function commentList() {
        $sql ="SELECT * FROM comments";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    public function info($id) {
        $sql ="SELECT * FROM comments WHERE id ='{$id}'";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    public function update($model, $id) {
        $sql = "UPDATE comments SET content='{$model['coment']}' WHERE id =$id";
        return Yii::$app->db->createCommand($sql)->execute();
    }
}

?>