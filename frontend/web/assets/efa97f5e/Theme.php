<?php
/**
 * Created by PhpStorm.
 * User: h3nry
 * Date: 16.10.14
 * Time: 23:57
 */

namespace h3nry\themes\frontend;

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
        '@frontend/views' => '@h3nry/themes/frontend/views',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = [
            'sourcePath' => '@h3nry/themes/frontend',
            'css' => [
                'css/bootstrap.min.css',
                'css/site.css'
            ]
        ];
        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapPluginAsset'] = [
            'sourcePath' => '@h3nry/themes/frontend',
            'js' => [
                'js/bootstrap.min.js'
            ]
        ];
    }
}
