
<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <?php if ($loggedin == 1) { ?>
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?=base_url('assets/dist/img/avatar5.png');?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?= $nama ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <?php } ?>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="">
              <a href="<?=base_url('dashboard');?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <!-- <li>
              <a href="<?=base_url('users/blank_page');?>">
                <i class="fa fa-pagelines"></i> <span>Blank Page</span>
              </a>
            </li> -->

            <li class="">
              <a href="#">
                <i class="fa fa-laptop"></i> <span>Data Progres</span>
              </a>
            </li>
            
            
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Maintenance Device System 
            <small>PT. Tri Sinar Purnama</small>
          </h1>
          <ol class="breadcrumb">
               <li><i class="<?php echo $iconBreadcumb; ?>"></i>&nbsp;&nbsp;<?php echo $titleBreadcumb; ?></li>
          </ol>
        </section>
        
        