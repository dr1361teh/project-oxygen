<?php
$title = 'Dashboard';

try {
  if (empty($_SESSION['cid'])) {
      throw new \Exception('CID is not defined');
  }

  $result = [];
  if ($xml = simplexml_load_file('http://api.vateud.net/members/FRA.xml')) {
      foreach ($xml->member as $member) {
          if ($member->cid == $_SESSION['cid']) {
              $result = (array) $member;
              break;
          }
      }
  } else {
      throw new \Exception('Could not load XML');
  }

} catch (Exception $e) {
  // store in a variable if you wish
  die($e->getMessage());
}
if(empty($result)){
  $_SESSION['errcode'] = '0x002';
  $_SESSION['errmsg'] = "You cannot login because the CID, <i>$actualcid</i> is not a member of the VATSIM France division.";
  $_SESSION['errdesc'] = "Please contact your division director.";
  header('Location: modules/error.php');
}
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
        <div class="callout callout-danger">
          <h4>#custom_error_message</h4>

          <p>#error_xd</p>
        </div>
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
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> PRE-APLHA 0.0.1
      </div>
      <strong>Copyright &copy; 2017-2018 <a href="https://vatfrance.org">VATFRANCE</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="views/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="views/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="views/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="views/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="styles/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="styles/js/demo.js"></script>
</body>
</html>