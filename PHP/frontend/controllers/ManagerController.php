<?php
/**
 * File: ManagerController.php
 * User: Acyco
 * Date: 2020-12-12
 * Time: 14:00
 */

namespace frontend\controllers;


use common\components\FrontendController;
use common\models\Registration;

class ManagerController extends FrontendController
{

    public function actionIndex()
    {
        $this->layout = false;

        return $this->render('index');
        
    }


    public function actionDesktop()
    {
        
    }


    public function actionRegistration()
    {
        $model = new Registration();
//        var_dump($model);die;
        $model->userid = 1;
        if ($model->save(true)) {
            echo "成功";
        } else {
            echo " fail";
        }
    }
}