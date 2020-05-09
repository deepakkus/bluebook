<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\SonaAsset;

SonaAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= Html::encode($this->title) ?></title>
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
  <?php $this->registerCsrfMetaTags() ?>
  <?php $this->head() ?>
</head>
<body>
 <!-- Page Preloder -->
 <div id="preloder">
    <div class="loader"></div>
</div>
<?php $this->beginBody() ?>
    <!-- header Navbar -->
    <?php echo $this->render('header'); ?>
    <!-- /.Header navbar -->
    
    <div class="container">
        <?php echo $content; ?>
    </div>

    <!-- Main Footer -->
        <?php echo $this->render('footer'); ?>
    <!-- end of Main Footer -->
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>