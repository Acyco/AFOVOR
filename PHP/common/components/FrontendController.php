<?php
/**
 * File: FrontendController.php
 * User: Acyco
 * Date: 2020-12-13
 * Time: 17:10
 */


namespace common\components;

use Yii;

class FrontendController extends CommonController
{
    public function beforeAction($action)
    {
        if (!parent::beforeAction($action)) {
            return false;
        }

        if (Yii::$app->user->isGuest) {//没有登录就跳转到登录界面
            $this->redirect(['public/login']);
            return false;
        }


        return true;
    }


}