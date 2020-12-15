<?php
/**
 * File: SiteAsset.php
 * User: Acyco
 * Date: 2020-12-14
 * Time: 16:37
 */

namespace frontend\assets;
use Yii;
use yii\web\AssetBundle;

class SiteAsset extends AssetBundle
{
    public function init()
    {
        parent::init();
        if (Yii::$app->getRequest()->getBaseUrl() !== "") {
            $this->sourcePath = '@frontend/web';
        }
    }

    public $css = [
        'css/font-awesome.min.css?v=4.4.0',
        'css/site.css?v=4.1.0',
        'css/afovor.css'
    ];

    public $js = [
        "js/plugins/metisMenu/jquery.metisMenu.js",
        'js/afovor.js'
    ];

    public $depends = [
        'frontend\assets\YiiAsset',
        'frontend\assets\BootstrapAsset',
    ];
}