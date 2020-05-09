<?php 
    use yii\widgets\Menu;
?>
  
  <!-- Header Section Begin -->
  <header class="header-section">
    <div class="menu-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="nav-menu">
                        <nav class="mainmenu">
                        <?php 
                            echo Menu::widget([
                                'items' => [
                                    ['label' => 'Home', 'url' => ['site/index']],
                                    ['label' => 'About Us', 'url' => ['site/about']],
                                    ['label' => 'Contact', 'url' => ['site/contact']],
                                    ['label' => 'Blog', 'url' => ['site/contact']],
                                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                                ],
                            ]);
                        ?>
                        </nav>
                        <div class="nav-right search-switch">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->