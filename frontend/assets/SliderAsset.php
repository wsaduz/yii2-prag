<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class SliderAsset extends AssetBundle
{
    public $css = [
        'frontend/web/css/slider.css',
    ];
    public $js = [
        'frontend/web/js/jquery.isotope.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
