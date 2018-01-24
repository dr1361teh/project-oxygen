<?php
$title = 'SectorFiles';

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
        </h1><br>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> HQ</a></li>
          <li><a href="#">ATC</a></li>
          <li class="active">Sector Files</li>
        </ol>
      </section>

          <!-- Main content -->
          
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Sector Files Section</h3>
            </div>
            <div class="box-body">
              Welcome to the VATFRANCE Sector File database. Here you will find sectorfiles updated to the latest AIRAC Cycle and useful plugins for you controlling session.
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </section>
        <!-- /.content -->
       <!-- /.row -->
       <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sector Downloads</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 135px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>AIRAC Cycle</th>
                  <th>Uploaded by</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                </tr>
                <tr>
                  <td>1713</td>
                  <td>ATC Director</td>
                  <td>13/01/2018</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>AIRAC Cycle 1713. </td>
                </tr>
                <tr>
                  <td>1712</td>
                  <td>ATC Director</td>
                  <td>24/012/2017</td>
                  <td><span class="label label-danger">Outdated!</span></td>
                  <td>AIRAC Cycle 1712. Major Paris sector Overhaul.</td>
                </tr>
                <tr>
                  <td>1711</td>
                  <td>ATC Director</td>
                  <td>24/11/2017</td>
                  <td><span class="label label-danger">Outdated!</span></td>
                  <td>AIRAC Cycle 1711. Added some more usefull Alias.</td>
                </tr>
                <tr>
                  <td>1710</td>
                  <td>ATC Director</td>
                  <td>24/10/2017</td>
                  <td><span class="label label-danger">Outdated!</span></td>
                  <td>AIRAC Cycle 1710. Updated to the newest AIRAC.</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>


<?php
require('footer.php');
?>