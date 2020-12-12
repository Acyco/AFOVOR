<?php
/**
 * File: YiiAsset.php
 * User: Acyco
 * Date: 2020-12-12
 * Time: 14:29
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class YiiAsset extends AssetBundle
{
    public $sourcePath = "@yii/assets";

    public $js = [
        'yii.js'
    ];

    public $depends = [
        'frontend\assets\JqueryAsset'
    ];

}