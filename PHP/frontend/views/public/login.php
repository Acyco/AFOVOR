<?php
/**
 * File: login.php
 * User: Acyco
 * Date: 2020-12-11
 * Time: 13:25
 */

use frontend\assets\PublicAsset;
use yii\bootstrap\Alert;
use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

PublicAsset::register($this);
//$this->title = Yii::t('app', 'Login');
$this->title = "登录";
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">

<head>
    <meta charset="<?=Yii::$app->charset?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title><?=Html::encode($this->title)?></title>
   
    <?=Html::csrfMetaTags()?>
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if (window.top !== window.self) {
            window.top.location = window.location;
        }
    </script>

    <?php $this->head()?>
    <style>
        .login-panel{
            float: none;
            display: inline-block;
            vertical-align: middle;
            width: 350px;
        }
        .signinpanel{
            width: 320px;
        }
        #login-form label{
            display: none;
        }
    </style>
</head>

<body class="signin">
<?php $this->beginBody()?>
<div class="signinpanel">
    <div class="row">
        <?= Alert::widget() ?>
        <div class="col-sm-12 login-panel center-block">
            <h3 class="text-center">AF</h3>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model,'username', 
                    ['template' => "<div style='position:relative'>{input}\n{error}\n{hint}</div>"])->textInput(
                        [
                                'class'=>'form-control uname',
                            'autofocus' => true,
                            'placeholder' => Yii::t("common", "Username"),
                        ]
                ) ?>
            <?= $form->field($model,'password',
                ['template' => "<div style='position:relative'>{input}\n{error}\n{hint}</div>"])->passwordInput(
                [
                    'class'=>'form-control pword m-b',
                    'placeholder' => Yii::t("common", "Password"),
                ]
            ) ?>
            
                <div class="row">
                    <div class="col-xs-5">
                        <a href=""><?=Yii::t("common",'ForgetPassword')?></a>
                    </div>
                    <div class="col-xs-7 text-right">
                        <strong><?= Html::a(Yii::t("common",'SignupNow'),Url::toRoute('site/signup')) ?></strong>
                    </div>
                </div>
            <?= Html::submitButton(Yii::t('common','Login'), ['class' => 'btn btn-success btn-block', 'name' => 'login-button']) ?>

            <?php  ActiveForm::end(); ?>
        </div>
    </div>
   
</div>
<?php $this->endBody()?>
</body>

</html>
<?php $this->endPage()?>


