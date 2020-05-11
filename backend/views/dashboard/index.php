<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $searchModel admin\models\PagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>
 
<section class="content">
	<div class="row">
		<div class="col-lg-3 col-xs-6">
		<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
				<h3 id="total_users"></h3>

				<p>Total User</p>
				</div>
				<div class="icon">
				<i class="ion ion-bag"></i>
				<i class="fa fa-users"></i>
				</div>
				<a href="<?php echo Yii::$app->request->baseUrl."/user/index";?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
		<!-- small box -->
			<div class="small-box bg-green">
				<div class="inner">
				<h3 id="total_brands"></h3>
				<p>Total News</p>
				</div>
				<div class="icon">
				<i class="ion ion-stats-bars"></i>
				<i class="fa fa-sun-o" aria-hidden="true"></i>

				</div>
				<a href="<?php echo Yii::$app->request->baseUrl."/news/index";?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
		<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
				<h3 id="total_pages"></h3>

				<p>Total Pages</p>
				</div>
				<div class="icon">
				<i class="ion ion-person-add"></i>
				<i class="fa fa-book" aria-hidden="true"></i>

				</div>
				<a href="<?php echo Yii::$app->request->baseUrl."/page/index";?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
		<!-- small box -->
			<div class="small-box bg-red">
				<div class="inner">
				<h3 id="total_cat"></h3>

				<p>Total Category</p>
				</div>
				<div class="icon">
				<i class="ion ion-pie-graph"></i>
				</div>
				<a href="<?php echo Yii::$app->request->baseUrl."/category/index";?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Recently Uploded News</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<ul class="products-list product-list-in-box">

					</ul>
				</div>
				<!-- /.box-body -->
				<div class="box-footer text-center">
					<a href="<?= Url::to(['add/index']) ?>" class="uppercase">View All News</a>
				</div>
				<!-- /.box-footer -->
			</div>
		</div>

		<div class="col-md-6">
			<!-- USERS LIST -->
			<div class="box box-danger">
				<div class="box-header with-border">
					<h3 class="box-title">Latest Members</h3>

					<div class="box-tools pull-right">
						<span class="label label-danger"><?= $total_user_this_month ?> New Members</span>
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<ul class="users-list clearfix">
						
					</ul>
					<!-- /.users-list -->
				</div>
				<!-- /.box-body -->
				<div class="box-footer text-center">
					<a href="<?= Url::to(['user/index']) ?>" class="uppercase">View All Users</a>
				</div>
				<!-- /.box-footer -->
			</div>
			<!--/.box -->


			
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">User With Heighest Number of Adds</h3>
				</div>
				<hr>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<table class="table">
						<tbody>
							<tr>
								<th style="width: 10px">#</th>
								<th>User Name</th>
								<th style="width: 40px">Count</th>
							</tr>

						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
          </div>


			<!-- end of col-6 -->
		</div>
	</div>

	<h2 class="page-header">Most Viewed News</h2>

	<div class="row">

      </div>

<?php $this->registerJsFile("/outboard/admin/js/dashboard.js"); ?>
</section>


