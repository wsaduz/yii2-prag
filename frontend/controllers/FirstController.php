<?php

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\ModelVal;
use frontend\models\Register;
use frontend\models\Comment;
use Yii;

class FirstController extends Controller {
    public function actionIndex() {
        $Form = Yii::$app->request->post();
        $model = new ModelVal;
        if(Yii::$app->request->isPost) {
            $model->email = $Form['email'];
            if($model->validate()) {
                Yii::$app->session->setFlash('info', 'Успешная авторизация');
            }
        }
        return $this->render('index', ['model' => $model]);
        
    }
    public function actionRegister() {
        # Alias/Псевдонимы
        //Yii::setAlias('@asd', 'http://prak.gg/frontend/web/first/register');
        //echo Yii::getAlias('@register').'';die;
        $model = new Register;
        $model->scenario = Register::SCENARION_REGISTER;
        $formData = Yii::$app->request->post();
        if(Yii::$app->request->  isPost) {
            $model->attributes = $formData['Register'];
            if($model->validate() && $model::save($model)) {
                Yii::$app->session->setFlash('success', 'Успешная Регистрация');
            }
        }
        return $this->render('register', ['model' => $model]);
    }
    public function actionUpdate() {
        $model = new Register;
        $model->scenario = Register::SCENARION_UPADETE;
        $formData = Yii::$app->request->post();
        if(Yii::$app->request->isPost) {
            $model->attributes = $formData;
            if($model->validate()) {
                Yii::$app->session->setFlash('info', 'Данные обновлены успешно');
            }
        }
        return $this->render('update', ['model' => $model]);
    }
    public function actionComment() {
        $model = new Comment;
        $model->scenario = Comment::COMMENT_ADD;
        $formData = Yii::$app->request->post();
        $comments = $model->commentList();
        if(Yii::$app->request->isPost) {
            $model->attributes = $formData['Comment'];
            if($model->validate() && $model->save($model)) {
                Yii::$app->session->setFlash('success', "✔ Комантария добавлена :)");
            }
        }

        return $this->render('comment', ['model' => $model, 'comments' => $comments]);
    }
    public function actionComupdate($id) {
        $model = new Comment;
        $model->scenario = Comment::COMMENT_UPDATE;
        $formData = Yii::$app->request->post();
        $info = $model->info($id);
        if(Yii::$app->request->isPost) {
            $model->attributes = $formData;
            if($model->validate() && $model->update($model, $id)) {
                Yii::$app->session->setFlash('success', "✔ Комантария успешно отредактированна:)");
            }
        }
        return $this->render('comment-update', ['id' => $id, 'info' => $info, 'model' => $model]);
    }
}

?>