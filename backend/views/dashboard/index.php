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
				<p>Total Brands</p>
				</div>
				<div class="icon">
				<i class="ion ion-stats-bars"></i>
				<i class="fa fa-sun-o" aria-hidden="true"></i>

				</div>
				<a href="<?php echo Yii::$app->request->baseUrl."/brands/index";?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
				<a href="<?php echo Yii::$app->request->baseUrl."/pages/index";?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
				<a href="<?php echo Yii::$app->request->baseUrl."/categories/index";?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Recently Uploded Adds</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<ul class="products-list product-list-in-box">

						<?php foreach( $get_lestest_adds as $add ) : ?>
							<li class="item">
								<div class="product-img">
									<img src="<?= $add['image'] ?>" alt="Product Image" width="50px" height="50px">
								</div>
								<div class="product-info">
									<a href="<?= $add['update_url'] ?>" class="product-title"><?= $add['title'] ?>
									<span class="label label-<?= $add['price_color'] ?> pull-right">$<?= $add['price'] ?></span></a>
									<span class="product-description"><?= $add['desp'] ?></span>
								</div>
							</li>
							<hr>
						<?php endforeach ?>

					</ul>
				</div>
				<!-- /.box-body -->
				<div class="box-footer text-center">
					<a href="<?= Url::to(['add/index']) ?>" class="uppercase">View All Adds</a>
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
						<?php foreach( $current_joined_user as $user ) : ?>
						<li>
							<img src="<?= $user['user_image'] ?>" alt="User Image" width="67px" height="62px">
							<a class="users-list-name" href="<?= $user['detail_view_url'] ?>"><?= $user['name'] ?></a>
							<span class="users-list-date"><?= $user['join_date'] ?></span>
						</li>
						<?php endforeach ?>
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

							<?php foreach( $get_rank_user_posts as $post ) : ?>
							
								<tr>
									<td><?= $post['counter'] ?></td>
									<td><?= $post['user_full_name'] ?></td>
									<td><span class="badge bg-red"><?= $post['post_count'] ?></span></td>
								</tr>
								
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
          </div>


			<!-- end of col-6 -->
		</div>
	</div>

	<h2 class="page-header">Most Viewed Add</h2>

	<div class="row">

		<?php foreach( $get_most_viewed_adds as $add ) : ?>

			<div class="col-md-4">
				<!-- Widget: user widget style 1 -->
				<div class="box box-widget widget-user-2">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-<?= $add['bg_color'] ?>">
						<div class="widget-user-image">
							<img class="img-circle" src="<?= $add['image'] ?>" alt="User Avatar">
						</div>

						<a href="<?= $add['update_url'] ?>">
							<h3 class="widget-user-username" style="color: #fff"><?= $add['title'] ?></h3>
						</a>

						<h5 class="widget-user-desc"><?= $add['desp'] ?></h5>
					</div>
					<div class="box-footer no-padding">
						<ul class="nav nav-stacked">
							<li><a href="#">Total Views <span class="pull-right badge bg-blue"><?= $add['total_view'] ?></span></a></li>
							<hr>	
							<li><a href="#">Category <span class="pull-right badge bg-aqua"><?= $add['category'] ?></span></a></li>
							<li><a href="#">Brands <span class="pull-right badge bg-green"><?= $add['brands'] ?></span></a></li>
						</ul>
					</div>
				</div>
			</div>

		<?php endforeach ?>

      </div>

<?php $this->registerJsFile("/outboard/admin/js/dashboard.js"); ?>
</section>


