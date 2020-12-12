<?php
/**
 * File: PublicAsset.php
 * User: Acyco
 * Date: 2020-12-11
 * Time: 14:32
 */
namespace frontend\assets;
use yii\web\AssetBundle;

class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/login.css?v1.0.7',
    ];
    public $depends = [
        'frontend\assets\AppAsset'
    ];
}