<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use h3nry\themes\frontend\assets\ThemeAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

ThemeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?php
    $this->registerMetaTag(
        [
            'charset' => Yii::$app->charset
        ]
    );
    $this->registerMetaTag(
        [
            'name' => 'viewport',
            'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'
        ]
    );
    $this->registerLinkTag(
        [
            'rel' => 'canonical',
            'href' => Url::canonical()
        ]
    );
    ?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="<?php echo Url::base()?>favicon.png" type="image/x-icon" />
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => Html::img($this->assetManager->publish(Yii::$app->basePath.'/../vendor/h3nry/themes/frontend/images/logo.jpg')[1], ['class'=>'img-responsive tpad']),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

<!--        <div class="container">-->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
<!--        </div>-->
    </div>

    <footer class="footer footer_background"><div class="container">
                <div class="col-xs-12 col-md-4 footer_background">
                    <div class="container footer_background">
                        <div class="row">
                            <h3 style="padding: 0px; margin: 0px">Get in Touch:</h3>
                            <i class="glyphicon glyphicon-phone-alt pull-left"></i>
                            <div class="col-sm-6">
                                <span style="font-size: 12px; font-family: Verdana; font-weight: bold">Phone:</span>
                                <br />
                                <span style="font-size: 12px; font-family: Verdana;">(123) 456 7890 / 456 7891</span>
                            </div>
                        </div>
                    </div>
<!--                    <div class="container">-->
<!--                        <div class="row">-->
<!--                            <i class="glyphicon glyphicon-envelope pull-left"></i>-->
<!--                            <div class="col-sm-6">-->
<!--                                <span style="font-size: 12px; font-family: Verdana; font-weight: bold">Email:</span>-->
<!--                                <br />-->
<!--                                <span style="font-size: 12px; font-family: Verdana;">(123) 456 7890 / 456 7891</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="container">
                        <div class="row">
                            <i class="glyphicon glyphicon-home pull-left"></i>
                            <div class="col-sm-6">
                                <span style="font-size: 12px; font-family: Verdana; font-weight: bold">Address:</span>
                                <br />
                                <span style="font-size: 12px; font-family: Verdana;">
                                    123 Downtown Street, Miami, USA
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <?php echo Html::img($this->assetManager->publish(Yii::$app->basePath.'/../vendor/h3nry/themes/frontend/images/footer_logo.png')[1], ['class'=>'img-responsive tpad pull-left']);?>
                        <p class="pull-left" style="padding-top: 10px">&copy; h3nry <?= date('Y') ?></p>
                        <p class="pull-right" style="padding-top: 10px"><?= Yii::powered() ?></p>
                </div>
                <div class="col-xs-12 col-md-4 pull-right">
                    <div class="pull-right">
                        <div class="social-icons">
                            <div class="row">
                                <h3 style="padding: 0px;margin: 0px" class="pull-right">Follow me On:</h3>
                                <ul>
                                    <li class="facebook" style="background-color: #f0f0f0">
                                        <a href="http://www.twitter.com/techandallcom" target="_blank">Facebook</a>
                                    </li>

                                    <li class="twitter" style="background-color: #f0f0f0">
                                        <a href="http://www.twitter.com/popovschiSanea" target="_blank">Twitter</a>
                                    </li>

                                    <li class="youtube" style="background-color: #f0f0f0">
                                        <a href="http://www.twitter.com/popovschiSanea" target="_blank">YouTube</a>
                                    </li>

                                    <li class="googleplus" style="background-color: #f0f0f0">
                                        <a href="http://www.twitter.com/popovschiSanea" target="_blank">Google +r</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="flickr" style="background-color: #f0f0f0">
                                        <a href="https://www.flickr.com/photos/108525409@N08/" target="_blank">Flickrr</a>
                                    </li>

                                    <li class="pinterest" style="background-color: #f0f0f0">
                                        <a href="http://www.pinterest.com/hildeclaessen/aquarelfotos/" target="_blank">Pinterest</a>
                                    </li>

                                    <li class="orkut" style="background-color: #f0f0f0">
                                        <a href="http://popovski.35photo.ru/" target="_blank">35photo</a>
                                    </li>

                                    <li class="skype" style="background-color: #f0f0f0">
                                        <a href="alex_p8484" target="_blank">Skype</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div></div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
