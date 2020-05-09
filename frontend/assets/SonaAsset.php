<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * frontend sona theme asset bundle.
 */
class SonaAsset extends AssetBundle
{
    public $sourcePath = '@webroot/sona';

    public $css = [
        "css/bootstrap.min.css", 
        "css/font-awesome.min.css", 
        "css/elegant-icons.css", 
        "css/flaticon.css", 
        "css/owl.carousel.min.css", 
        "css/nice-select.css", 
        "css/jquery-ui.min.css", 
        "css/magnific-popup.css", 
        "css/slicknav.min.css", 
        "css/style.css", 
    ];
    public $js = [
        "js/jquery-3.3.1.min.js",
        "js/bootstrap.min.js",
        "js/jquery.magnific-popup.min.js",
        "js/jquery.nice-select.min.js",
        "js/jquery-ui.min.js",
        "js/jquery.slicknav.js",
        "js/owl.carousel.min.js",
        "js/main.js",
    ];
   
}

