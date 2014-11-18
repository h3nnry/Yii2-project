<?php

namespace h3nry\themes\frontend\assets;

use yii\web\AssetBundle;

/**
 * Theme main asset bundle.
 */
class ThemeAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@h3nry/themes/frontend';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/site.css',
        'css/social_icons.css',
    ];

    public $js = [];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
