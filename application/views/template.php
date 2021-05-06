
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PosKu 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- Data Tables -->
  <link rel="stylesheet" href="<?=base_url()?>assets//plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed <?=$this->uri->segment('1') == 'sale' ? 'sidebar-collapse' : null ?>">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?=base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?=ucfirst($this->fungsi->user_login()->username)?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="<?=site_url('auth/logout')?>">Logout</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=base_url()?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PosKu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$this->fungsi->user_login()->name?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item"> -->
              <li class="nav-item">
                <a href="<?=site_url('dashboard')?>" <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
          <!-- </li> -->
          <li class="nav-header">SALES</li>
          
          <li class="nav-item">
            <a href="#" <?=$this->uri->segment(1) == 'reports' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
              <i class="nav-icon fa fa-file-csv"></i>
              <p> Reports</p>
            </a>
          </li>
          <li class="nav-header">INVENTORY</li>
            <li class="nav-item menu-close">
            <a href="#" <?=$this->uri->segment(1) == 'categories' || $this->uri->segment(1) == 'item' || $this->uri->segment(1) == 'unit' ? 'class="nav-link active"' : 'class="nav-link"'?>>
              <i class="nav-icon fa fa-cubes"></i>
              <p> Products</p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="<?=site_url('categories')?>" <?=$this->uri->segment(1) == 'categories' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
              <i class="far fa-circle nav-icon"></i>
              <p> Categories</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="<?=site_url('item')?>" <?=$this->uri->segment(1) == 'item' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
              <i class="far fa-circle nav-icon"></i>
              <p> Items</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="<?=site_url('unit')?>" <?=$this->uri->segment(1) == 'unit' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
              <i class="far fa-circle nav-icon"></i>
              <p> Units</p>
            </a>
            </li>
            </ul>
          </li>

          <li class="nav-header">TRANSACTION</li>
            <li class="nav-item menu-close">
              <a href="#" <?=$this->uri->segment(1) == 'stock' || $this->uri->segment(1) == 'sale' ? 'class="nav-link active"' : 'class="nav-link"'?>>
                <i class="nav-icon fa fa-hand-holding-usd"></i>
                <p> Transaction</p>
                <i class="fas fa-angle-left right"></i>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('sale')?>" <?=$this->uri->segment(1) == 'sale' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p> Sales</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?=site_url('stock/in')?>" <?=$this->uri->segment(1) == 'stock/in' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p> Stock-In</p>
                </a>
                </li>
                <li class="nav-item">
                  <a href="<?=site_url('stock/out')?>" <?=$this->uri->segment(1) == 'stock/out' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
                    <i class="far fa-circle nav-icon"></i>
                    <p> Stock-Out</p>
                  </a>
                </li>
              </ul>
            </li>

          <li class="nav-header">WAREHOUSE</li>
          <li class="nav-item">
            <a href="<?=site_url('supplier')?>" <?=$this->uri->segment(1) == 'supplier' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
              <i class="nav-icon fa fa-truck"></i>
              <p> Suppliers</p>
            </a>
          </li>
          <?php if($this->fungsi->user_login()->level == 1){ ?>
          <li class="nav-header">USER</li>
          <li class="nav-item">
            <a href="<?=site_url('users')?>" <?=$this->uri->segment(1) == 'users' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
              <i class="nav-icon fa fa-user"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('customer')?>" <?=$this->uri->segment(1) == 'customer' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
              <i class="nav-icon fa fa-user-friends"></i>
              <p> Customers</p>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- jQuery -->
<script src="<?=base_url()?>/assets/plugins/jquery/jquery.min.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php echo $contents ?>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright template &copy; 2021 <a href="https://adminlte.io">AdminLTE</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>PosKu &copy; Momoy Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url()?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url()?>/assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url()?>/assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=base_url()?>/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=base_url()?>/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url()?>/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url()?>/assets/plugins/moment/moment.min.js"></script>
<script src="<?=base_url()?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url()?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url()?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url()?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>/assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url()?>/assets/dist/js/pages/dashboard.js"></script>

<script src="<?=base_url()?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>

<script src="<?=base_url()?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script>
  $(document).ready(function(){
    $('#table1').DataTable()
  });
</script>

</body>
</html>
