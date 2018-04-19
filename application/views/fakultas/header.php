  <a href="#" class="scrollToTop"><i class="fa fa-chevron-up"></i></a>

<div class="wrapper" style="height: auto; min-height: 100%">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url() ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>K</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>KM - </b>UNSRI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">BEM KM Fasilkom Unsri</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p>
                  BEM KM Fasilkom Unsri
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 643px">
      <section class="sidebar" style="height: 380px; overflow: hidden; width: auto;">
        <!-- Sidebar user panel -->
        <?php

        $user = $this->session->userdata('user');
        $pass = $this->session->userdata('pass');

        if(isset($user)) {

         ?>
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url() ?>assets/universitas/img/logo3.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>BEM KM Fasilkom</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <?php } else { ?>
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url() ?>assets/universitas/img/logo3.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <a href="<?= site_url('index/logpage') ?>" class="btn btn-primary" style="width: 50px">Log-In</a>
          </div>
        </div>
        <?php } ?>
        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">WEB NAVIGATION</li>
          <li>
            <a href="<?= site_url('fakultas/home') ?>">
              <i class="fa fa-home"></i> <span> Home</span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-list-ul"></i> <span>Daftar Fakultas</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href=""><i class="fa fa-bank"></i> Fakultas Ekonomi</a></li>
              <li><a href=""><i class="fa fa-balance-scale"></i> Fakultas Hukum</a></li>
              <li><a href=""><i class="fa fa-cog"></i> Fakultas Teknik</a></li>
              <li><a href=""><i class="fa fa-briefcase"></i> Fakultas Kedokteran</a></li>
              <li><a href=""><i class="fa fa-map-o"></i> Fakultas Pertanian</a></li>
              <li><a href=""><i class="fa fa-book"></i> FKIP</a></li>
              <li><a href=""><i class="fa fa-graduation-cap"></i> FISIP</a></li>
              <li><a href=""><i class="fa fa-eyedropper"></i> FMIPA</a></li>
              <li><a href="<?= site_url('fakultas/fak') ?>"><i class="fa fa-desktop"></i> Fakultas Ilmu Komputer</a></li>
              <li><a href=""><i class="fa fa-ambulance"></i> Fakultas KesMas</a></li>
            </ul>
          </li>
          <li class="header">
            SEARCH FOR SOMETHING
          </li>
        </ul>

        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
      </section>
    <!-- /.sidebar -->
    </div>
  </aside>
