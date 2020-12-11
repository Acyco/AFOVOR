<?php
/**
 * File: PublicAsset.php
 * User: Acyco
 * Date: 2020-12-11
 * Time: 14:32
 */
namespace frontend\assets;
class PublicAsset extends \yii\web\AssetBundle
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