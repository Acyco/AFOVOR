<?php
/**
 * File: BootstrapAsset.php
 * User: Acyco
 * Date: 2020-12-11
 * Time: 14:55
 */

namespace frontend\assets;


use Yii;

class BootstrapAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        parent::init();
        if (Yii::$app->getRequest()->getBaseUrl() !== "") {
            $this->sourcePath = '@frontend/web';
        }
    }

    public $css = ['css/bootstrap.min.css'];

    public $js = [
        "js/bootstrap.min.js?v=3.3.6",
    ];

    public $depends = [
        'frontend\assets\JqueryAsset'
    ];

}