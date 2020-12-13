<?php
/**
 * File: ManagerController.php
 * User: Acyco
 * Date: 2020-12-12
 * Time: 14:00
 */

namespace frontend\controllers;


use common\components\FrontendController;

class ManagerController extends FrontendController
{

    public function actionIndex()
    {
        $this->layout = false;

        return $this->render('index');
        
    }

}