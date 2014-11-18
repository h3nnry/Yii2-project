<?php
/**
 * Created by PhpStorm.
 * User: h3nry
 * Date: 16.10.14
 * Time: 23:57
 */

namespace h3nry\themes\backend;

use Yii;

/**
 * Class Theme
 * @package h3nry\themes\frontend
 */
class Theme extends \yii\base\Theme
{
    /**
     * @inheritdoc
     */
    public $pathMap = [
        '@backend/views' => '@h3nry/themes/backend/views',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = [
            'sourcePath' => '@h3nry/themes/backend',
            'css' => [
                'css/bootstrap.min.css',
                'css/style.css',
            ]
        ];
        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapPluginAsset'] = [
            'sourcePath' => '@h3nry/themes/backend',
            'js' => [
                'js/bootstrap.min.js'
            ]
        ];
    }
}
