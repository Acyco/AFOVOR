<?php
/**
 * File: ManagerController.php
 * User: Acyco
 * Date: 2020-12-12
 * Time: 14:00
 */

namespace frontend\controllers;


class ManagerController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $this->layout = false;

        return $this->render('index');
        
    }

}