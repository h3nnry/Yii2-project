<?php
/**
 * Created by PhpStorm.
 * User: h3nry
 * Date: 03.11.14
 * Time: 0:24
 */
/**
 * Theme layout for login page.
 */
use h3nry\themes\backend\assets\ThemeAsset;
use yii\helpers\Html;
use yii\helpers\Url;

ThemeAsset::register($this);
?>
<?php $this->beginPage(); ?>
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
        <title><?= Html::encode($this->title); ?></title>
        <?= Html::csrfMetaTags(); ?>
        <?php $this->head(); ?>
    </head>
    <body class="bg-black">
    <?php $this->beginBody(); ?>
    <div class="container">
        <?= $content ?>
    </div>
    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage(); ?>