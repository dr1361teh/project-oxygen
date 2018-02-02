<?php
$title = 'Dashboard';

?>
<?php
require('header.php');
?>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          HQ System
          <small>Version PRE-APLHA 0.0.1</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> HQ</a></li>
          <li><a href="#">Dashboard</a></li>
          <li class="active">Welcome</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="callout callout-info">
          <h4>#Test_message</h4>

          <p>#test_message_custom</p>
        </div>
        <?php
          if($config['debug'] === 'TRUE'){
            echo '<div class="callout callout-danger">
            <h4>Debug Mode Activated</h4>
  
            <p>Debug mode is currently activated, you can turn this off in <strong>config.php</strong>. Debug information will be displayed below:</p>
            <br>
            <li>Logged in as <strong>'.$actualcid.'</strong></li>
            <li>Debug mode is <strong>activated</strong></li>
          </div>';
          }
        ?>
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Blank Box</h3>
          </div>
          <div class="box-body">
            The great content goes here
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <?php require('footer.php');?>
    <!-- /.container -->
