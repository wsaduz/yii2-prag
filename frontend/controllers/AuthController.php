<?php

namespace frontend\controllers;
use frontend\models\Active;
use Yii;

class AuthController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Active();

        if($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Успешная регистрация');
            return $this->redirect(['auth/index']);
        }

        return $this->render('create', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $model = Active::findOne($id);
        $model->delete();
        Yii::$app->session->setFlash('success', 'Данные были удалены!');
        return $this->redirect(['auth/index']);
    }

    public function actionIndex()
    {
        $model = Active::find()->limit(10)->all();
        return $this->render('index', ['model' => $model]);
    }

    public function actionUpdate($id)
    {
        $model = Active::findOne($id);
        if($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Данные успешно обновленны');
            return $this->redirect(['auth/index']);
        }
        return $this->render('update', ['model' => $model]);
    }

}
