<?php

namespace h3nry\themes\backend\assets;

use yii\web\AssetBundle;

/**
 * Theme main asset bundle.
 */
class ThemeAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@h3nry/themes/backend';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/style_v1.css',
        'css/bootsrap.min.css',
    ];

    public $js = [
        'js/devoops.js'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
