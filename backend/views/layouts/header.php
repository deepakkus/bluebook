<?php
use yii\helpers\Html;
use yii\helpers\Url;
$this->registerCssFile("@web/css/style-admin.css");
$session = Yii::$app->session;

$id = Yii::$app->user->id;

if(!$id )
{
	//$id = $session->get('userid');
	Yii::$app->response->redirect(Url::to(['site/login'], true));
}	
?>
<header class="main-header">

 
        <!-- Logo -->
        <a href="<?php echo Yii::$app->homeUrl;?>dashboard/index" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><p style="font-weight:900; font-size:22px">BB</p></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img class="img-responsive" src="../images/logo.jpg"></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <p class="wlcTxt"><span>BLUEBOOK Admin </span></p>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>-->
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages </li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>-->
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
                <?php 

                  /**
                   * if this Yii::$app->user->identity will be object
                   * then we can get username
                   */
                  if( is_object(Yii::$app->user->identity) ) {
                  echo Html::beginForm(['/site/logout'], 'post')
                  . Html::submitButton(
                      'Logout (' . Yii::$app->user->identity->username . ')',
                      ['class' => 'btn btn-link logout', 'style' => 'color: #fff;' ]
                  )
                  . Html::endForm();
                  }
                ?>	
                
              </li>
			  <?php   Html::endForm() ?>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php if((Yii::$app->user->identity) && Yii::$app->user->identity->image_id != NULL){?>
				<img src="../images/user/<?php echo Yii::$app->user->identity->image_id;?> " height="40px" width="40px" >
					<?php //= Html::img('@web/img/echo Yii::$app->user->identity->user_pic;', ['class' => 'user-image', 'alt'=>'User Image']) ?>
                    <?php }
					else
					{ ?>
                    <img src="../images/user/blank-profile.png" height="40px" width="40px" >
                    <?php } ?>
                  <span class="hidden-xs" style="color: black;"><?php echo (Yii::$app->user->identity) ? Yii::$app->user->identity->username : ''; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                   
                 
				 <!-- 
				 <li>
                     <a href="<?php echo Url::toRoute(['default/index', 'uid' => $id]);?>"><i class="fa fa-key"></i>Password</a>
                    </li>
					 -->
					 <a href="<?php echo Url::toRoute(['user/update', 'id' => $id]);?>"><i class="fa fa-edit"></i>Edit Profile</a>
                    </li>
					
                    <li>
                     <?php echo Html::beginForm(['/site/logout'], 'post'). Html::submitButton('Logout'); ?> 
                    </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                     
                    <div class="pull-right">
<?php //echo Html::beginForm(['/site/logout'], 'post'). Html::submitButton('Logout'); ?> 
                    </div>
		 
			
			
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
             <!-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>-->
            </ul>
          </div>
        </nav>
		<hr>
      </header>
