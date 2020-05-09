<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * frontend sona theme asset bundle.
 */
class EbusinessAsset extends AssetBundle
{
    public $sourcePath = '@webroot/ebusiness';

    public $css = [
        "lib/bootstrap/css/bootstrap.min.css",
        "lib/nivo-slider/css/nivo-slider.css",
        "lib/owlcarousel/owl.carousel.css",
        "lib/owlcarousel/owl.transitions.css",
        "lib/font-awesome/css/font-awesome.min.css",
        "lib/animate/animate.min.css",
        "lib/venobox/venobox.css",
        "css/nivo-slider-theme.css",
        "css/style.css",
        "css/responsive.css",
    ];
    public $js = [
        "lib/jquery/jquery.min.js",
        "lib/bootstrap/js/bootstrap.min.js",
        "lib/owlcarousel/owl.carousel.min.js",
        "lib/venobox/venobox.min.js",
        "lib/knob/jquery.knob.js",
        "lib/wow/wow.min.js",
        "lib/parallax/parallax.js",
        "lib/easing/easing.min.js",
        "lib/nivo-slider/js/jquery.nivo.slider.js",
        "lib/appear/jquery.appear.js",
        "lib/isotope/isotope.pkgd.min.js",
        "js/main.js",
    ];
}