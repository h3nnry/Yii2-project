<?php
use yii\helpers\Html;
use h3nry\themes\backend\assets\ThemeAsset;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

ThemeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php echo Url::base()?>/favicon.png" type="image/x-icon" />
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--Start Header-->
<header class="navbar">
    <div class="container-fluid expanded-panel">
        <div class="row">
            <div id="logo" class="col-xs-12 col-sm-2 padded">
                <a href="<?=Yii::$app->homeUrl;?>">Control Panel</a>
            </div>
            <div id="top-panel" class="col-xs-12 col-sm-10">
                <div class="row">
                    <div class="col-xs-4 col-sm-8 top-panel-right pull-right">
                        <ul class="nav navbar-nav pull-right panel-menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle account" data-toggle="dropdown">
                                    <i class="fa fa-angle-down pull-right"></i>
                                    <div class="user-mini pull-right">
                                        <span class="welcome">Welcome,</span>
                                        <span>System Administrator</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ajax/gallery_simple.html">
                                            <i class="fa fa-picture-o"></i>
                                            <span>Albums</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-cog"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=Yii::$app->urlManager->createUrl('site/logout');?>">
                                            <i class="fa fa-power-off"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
    <div class="row">
        <div id="sidebar-left" class="col-xs-2 col-sm-2">
            <ul class="nav main-menu">
                <li>
                    <a href="<?=Yii::$app->homeUrl;?>" class="<?= (Yii::$app->controller->id=='site') ?'active':''; ?>">
                        <i class="fa fa-dashboard pull-left"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?=Url::toRoute('categories/index');?>" class="<?= (Yii::$app->controller->id=='categories') ?'active':''; ?>">
                    <i class="fa fa-list"></i>
                    <span>Categories</span>
                    </a>
                </li>
                <li>
                    <a href="<?=Yii::$app->homeUrl;?>">
                    <i class="fa fa-picture-o"></i>
                    <span>Gallery</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--Start Content-->
        <div id="content">
            <!--Start Breadcrumb-->
<!--            <div class="row">-->

            <div id="breadcrumb">
                <a href="#" class="show-sidebar">
                    <i class="fa fa-bars" style="margin: 0px 10px"></i>
                </a>
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
            </div>
            <div class="container">
            <?= $content ?>
            </div>
        </div>
        <!--End Content-->
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>