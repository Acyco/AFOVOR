<?php
/**
 * File: PublicController.php
 * User: Acyco
 * Date: 2020-12-11
 * Time: 13:21
 */

namespace frontend\controllers;


use common\models\LoginForm;
use Yii;
use yii\web\Controller;

class PublicController extends Controller
{

    public function actionLogin()
    {
        $this->layout = false;
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if (Yii::$app->request->getIsPost()) {
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->goBack();
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
}