<?php


namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\Users;
use frontend\models\User;

use Yii;

class UsersController extends Controller {
    public function actionView() {
        $print = Users::GetUsers();
        
        return $this->render('users', [
            'info' => $print]);
    }

    public function actionUser($id) {
        $print = User::GetInfo($id);
        
        return $this->render('user', [
            'info' => $print]);
    }
}

?>