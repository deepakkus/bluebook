<?php

/* @var $this yii\web\View */

$this->title = 'Dashboard';
?>

<div class="container" style="padding-top: 11px;">
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">CPU Traffic</span>
            <span class="info-box-number">90<small>%</small></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Likes</span>
            <span class="info-box-number">41,410</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Sales</span>
            <span class="info-box-number">760</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">New Members</span>
            <span class="info-box-number">2,000</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
</div>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header border-0">
            <h3 class="card-title">Products</h3>
            <div class="card-tools">
              <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-download"></i>
              </a>
              <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-bars"></i>
              </a>
            </div>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
              <thead>
              <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Sales</th>
                <th>More</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>
                  <img src="https://dummyimage.com/150" alt="Product 1" class="img-circle img-size-32 mr-2">
                  Some Product
                </td>
                <td>$13 USD</td>
                <td>
                  <small class="text-success mr-1">
                    <i class="fas fa-arrow-up"></i>
                    12%
                  </small>
                  12,000 Sold
                </td>
                <td>
                  <a href="#" class="text-muted">
                    <i class="fas fa-search"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <img src="https://dummyimage.com/150" alt="Product 1" class="img-circle img-size-32 mr-2">
                  Another Product
                </td>
                <td>$29 USD</td>
                <td>
                  <small class="text-warning mr-1">
                    <i class="fas fa-arrow-down"></i>
                    0.5%
                  </small>
                  123,234 Sold
                </td>
                <td>
                  <a href="#" class="text-muted">
                    <i class="fas fa-search"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <img src="https://dummyimage.com/150" alt="Product 1" class="img-circle img-size-32 mr-2">
                  Amazing Product
                </td>
                <td>$1,230 USD</td>
                <td>
                  <small class="text-danger mr-1">
                    <i class="fas fa-arrow-down"></i>
                    3%
                  </small>
                  198 Sold
                </td>
                <td>
                  <a href="#" class="text-muted">
                    <i class="fas fa-search"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <img src="https://dummyimage.com/150" alt="Product 1" class="img-circle img-size-32 mr-2">
                  Perfect Item
                  <span class="badge bg-danger">NEW</span>
                </td>
                <td>$199 USD</td>
                <td>
                  <small class="text-success mr-1">
                    <i class="fas fa-arrow-up"></i>
                    63%
                  </small>
                  87 Sold
                </td>
                <td>
                  <a href="#" class="text-muted">
                    <i class="fas fa-search"></i>
                  </a>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col-md-6 -->
      <div class="col-lg-6">
        <!-- /.card -->
        <div class="card">
          <div class="card-header border-0">
            <h3 class="card-title">Online Store Overview</h3>
            <div class="card-tools">
              <a href="#" class="btn btn-sm btn-tool">
                <i class="fas fa-download"></i>
              </a>
              <a href="#" class="btn btn-sm btn-tool">
                <i class="fas fa-bars"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
              <p class="text-success text-xl">
                <i class="ion ion-ios-refresh-empty"></i>
              </p>
              <p class="d-flex flex-column text-right">
                <span class="font-weight-bold">
                  <i class="ion ion-android-arrow-up text-success"></i> 12%
                </span>
                <span class="text-muted">CONVERSION RATE</span>
              </p>
            </div>
            <!-- /.d-flex -->
            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
              <p class="text-warning text-xl">
                <i class="ion ion-ios-cart-outline"></i>
              </p>
              <p class="d-flex flex-column text-right">
                <span class="font-weight-bold">
                  <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                </span>
                <span class="text-muted">SALES RATE</span>
              </p>
            </div>
            <!-- /.d-flex -->
            <div class="d-flex justify-content-between align-items-center mb-0">
              <p class="text-danger text-xl">
                <i class="ion ion-ios-people-outline"></i>
              </p>
              <p class="d-flex flex-column text-right">
                <span class="font-weight-bold">
                  <i class="ion ion-android-arrow-down text-danger"></i> 1%
                </span>
                <span class="text-muted">REGISTRATION RATE</span>
              </p>
            </div>
            <!-- /.d-flex -->
          </div>
        </div>
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
