<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use frontend\assets\PublicAsset;
use yii\helpers\Html;

$this->title = $name;
PublicAsset::register($this);
?>


<?php $this->beginPage()?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head()?>
    <style>
        .error-box h1{
            font-size: 70px;
        }
    </style>
</head>

<body class="gray-bg">
<?php $this->beginBody()?>

<div class="middle-box text-center animated fadeInDown error-box">
    <h1><?= Html::encode($this->title) ?></h1>
    <h3 class="font-bold"  <?= nl2br(Html::encode($message)) ?></h3>

    <div class="error-desc">
        抱歉，页面好像去火星了~ ?
      <!--  <form class="form-inline m-t" role="form">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="请输入您需要查找的内容 …">
            </div>
            <button type="submit" class="btn btn-primary">搜索</button>
        </form>-->
        
    </div>
</div>
<?php $this->endBody()?>
</body>

</html>
<?php $this->endPage()?>