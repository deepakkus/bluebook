<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\EbusinessAsset;

EbusinessAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= Html::encode($this->title) ?></title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
  <?php $this->registerCsrfMetaTags() ?>
  <?php $this->head() ?>
</head>
<body>
 <!-- Page Preloder -->
 <div id="preloader"></div>
<?php $this->beginBody() ?>
    <!-- header Navbar -->
    <?php echo $this->render('header'); ?>
    <!-- /.Header navbar -->
    
    <div class="container" style="margin-top: 93px;">
        <?php echo $content; ?>
    </div>

    <!-- Main Footer -->
        <?php echo $this->render('footer'); ?>
    <!-- end of Main Footer -->
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>