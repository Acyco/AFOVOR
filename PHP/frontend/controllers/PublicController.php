<?php
/**
 * File: PublicController.php
 * User: Acyco
 * Date: 2020-12-11
 * Time: 13:21
 */

namespace frontend\controllers;


use common\components\CommonController;
use common\models\LoginForm;
use Yii;
use yii\web\Controller;

class PublicController extends CommonController
{

    /**
     * 前站后台登录 （用户登录）
     * @return string|\yii\web\Response
     */
    public function actionLogin()
    {
        $this->layout = false;
        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
            return $this->redirect(['manager/index']);
        }
        $model = new LoginForm();
        if (Yii::$app->request->getIsPost()) {
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->redirect(['manager/index']);
            } else {
                $errors = $model->getErrors();
                $err = [];
                foreach ($errors as $error) {
                    $err[] = $error[0];
                }
                Yii::$app->session->setFlash('error', implode('<br>', $err));
            }
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * 退出
     * @return \yii\web\Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(['public/login']);
    }
}