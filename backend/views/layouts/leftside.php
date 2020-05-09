<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
use backend\models\Settings;
use backend\models\User;
$id = 0;
$uid=0;
//$settings = Settings::find()->all();
$changepassword = User::find()->all();
if(!empty($changepassword))
 {
	 $uid = $changepassword[0]->id;
 }
/*
 if(!empty($settings))
 {
	 $id = $settings[0]->settings_id;
 }

*/
/*if (($model = settings::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }*/
		
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <!--<div class="pull-left image">
<?= Html::img('@web/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            </div>-->
            <!--<div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>-->
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <!--<div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>-->
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?=
        Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
          
                    [
                        'label' => 'Dashboard',
                        'icon' => 'fa fa-tachometer icon-2x',
                        'url' => ['dashboard/index'],
                        'items' => [
                                 
                        ]
                    ], 
                    
                    [
                        'label' => 'Categories',
                        'icon' => 'fa fa-list-alt',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Categories List',
                                'icon' => 'fa fa-list-alt',
                                'url' => ['/category/index'],
                                //'active' => $this->context->route == 'master1/index'
                            ],
                            [
                                'label' => 'Create Categories',
                                'icon' => 'fa fa-list-alt',
                                'url' => ['/category/create'],
                                //'active' => $this->context->route == 'master2/index'
                            ]
                        ]
                    ],
                    [
                        'label' => 'News Management',
                        'icon' => 'fa fa-list-alt',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Create',
                                'icon' => 'fa fa-list-alt',
                                'url' => ['/news/create'],
                                //'active' => $this->context->route == 'master1/index'
                            ],
                            [
                                'label' => 'News List',
                                'icon' => 'fa fa-list-alt',
                                'url' => ['/news/index'],
                                //'active' => $this->context->route == 'master2/index'
                            ]
                        ]
                    ],
                    [
                        'label' => 'Pages',
                        'icon' => 'fa fa-folder',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Pages List',
                                'icon' => 'fa fa-circle-o',
                                'url' => ['/page/index']
                            ],
                            [
                                'label' => 'Create Pages',
                                'icon' => 'fa fa-circle-o',
                                'url' => ['/page/create']
                            ]
                        ]
                    ],
                    [
                        'label' => 'Settings',
                        'icon' => 'fa fa-cog',
                       'url' => ($id>0)?['/settings/update?id='.$id]:['/settings/create']
                    ],
                    [
                        'label' => 'User',
                        'icon' => 'fa fa-users',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'User List',
                                'icon' => 'fa fa-circle-o',
                                'url' => ['/user/index'],
                                'active' => $this->context->route == 'master1/index'
                            ],
                            [
                                'label' => 'Create User',
                                'icon' => 'fa fa-circle-o',
                                'url' => ['/user/create'],
                                'active' => $this->context->route == 'master2/index'
                            ]
                        ]
                    ],
                
                ],
            ]
    )
        ?>
        
    </section>
    <!-- /.sidebar -->
</aside>
