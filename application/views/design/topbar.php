</head>
  <body class="hold-transition skin-black fixed sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        
        <a href="<?=base_url();?>" class="logo">
            <img src="<?=base_url('assets/dist/img/logo.png');?>" class="img-circle" style="max-width:15%"/>
            <b>MDS</b>-TSP
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <?php if ($loggedin == 0) { ?>
                    <li>
                        <a href="<?= base_url().'login'; ?>"><i class="fa fa-user"></i>&nbsp;&nbsp;Login</a>
                    </li>
                <?php } elseif ($loggedin == 1) { ?>
                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <img src="<?=base_url('assets/dist/img/avatar5.png');?>" class="user-image" alt="User Image"/>
                      <span class="hidden-xs"><?= $username ?></span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                        <img src="<?=base_url('assets/dist/img/avatar5.png');?>" class="img-circle" alt="User Image" />
                        <p>
                          <?= $username ?> - <?= $nama ?>
                        </p>
                      </li>
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="<?= base_url().'access/profile'; ?>" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                          <a href="<?= base_url().'access/logout'; ?>" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
            </ul>
          </div>
        </nav>
      </header>