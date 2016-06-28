<?php
  $title = "Dashboard";
  $icon = "fa fa-dashboard";
  load_controller('commons', 'header');
  load_controller('commons', 'topbar');
  load_controller('commons', 'sidebar', $title, $icon);

  //$this->load->view('design/header');
?>
<!-- Main content -->
<section class="content">
<!-- Main row -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?= $countInbox = '0' ?></h3>
                <p>New Request Today</p>
              </div>
              <div class="icon">
                <i class="fa fa-plus-circle"></i>
              </div>
              <a id="" href="<?=base_url('suratmasuk/balai');?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div><!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-orange">
              <div class="inner">
                <h3><?= $countInbox = '0' ?></h3>
                <p>On Progress Today</p>
              </div>
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <a id="" href="<?=base_url('suratmasuk/balai');?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div><!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?= $countInbox = '0' ?></h3>
                <p>Finished Today</p>
              </div>
              <div class="icon">
                <i class="fa fa-check"></i>
              </div>
              <a id="" href="<?=base_url('suratmasuk/balai');?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div><!-- ./col -->
</div><!-- /.row -->
</section>
<?php
  load_controller('commons', 'footer');
?>