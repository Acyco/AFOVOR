<?php
/**
 * File: JqueryAsset.php
 * User: Acyco
 * Date: 2020-12-11
 * Time: 14:57
 */

namespace frontend\assets;


use Yii;

class JqueryAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        parent::init();
        if (Yii::$app->getRequest()->getBaseUrl() !== "") {
            $this->sourcePath = '@frontend/web';
        }
    }
    public $css = [];

    public $js = [
        "js/jquery.min.js?v=2.1.4",
    ];

    public $depends = [];
}