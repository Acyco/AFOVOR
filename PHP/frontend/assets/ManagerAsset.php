<?php
/**
 * File: ManagerAsset.php
 * User: Acyco
 * Date: 2020-12-12
 * Time: 14:06
 */

namespace frontend\assets;


use Yii;
use yii\web\AssetBundle;

class ManagerAsset  extends AssetBundle
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
        'css/style.css?v=4.1.0',
    ];

    public $js = [
        "js/plugins/metisMenu/jquery.metisMenu.js",
        "js/plugins/slimscroll/jquery.slimscroll.min.js",
        "js/plugins/layer/layer.min.js",
        "js/hplus.js?v=4.1.1",
        "js/contabs.js",
        "js/plugins/pace/pace.min.js",
//        'js/plugins/imgView/jquery-imgview.js',
//        'js/jcy.min.js?v=1.0.2',
    'js/afovor.js'
    ];

    public $depends = [
        'frontend\assets\YiiAsset',
        'frontend\assets\BootstrapAsset',
    ];
}