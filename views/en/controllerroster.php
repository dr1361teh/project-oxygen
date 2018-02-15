<?php
$title = 'Controller Roster';
require('../../library/getRoster.php');

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
          <li class="active">Controller Roster</li>
        </ol>
      </section>

          <!-- Main content -->
          
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Restricted Roster</h3>
            </div>
            <div class="box-body">
              VATFRANCE Has 2 restricted airports that includes Paris Charles De Gaulle (Roissy - CDG/LFPG) and Nice Cote D'Azur (LFMN)
              These are the list of approved controllers for these positions.
              If you wish to be added to the roster and get mentoring simply send a support ticket or email one of the training staff.
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
              <h3 class="box-title">Roster</h3>

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
                <th>Name</th>
                <th>ID</th>
                <th>Rating</th>
                <th>Approved by</th>
                <th>Positions</th>
                </tr>
                <tr>
                <td>Alain Verhaeghe </td>
                <td>817811</td>
                <td>C1</td>
                <td>Training Staff</td>
                <td><span class="label label-success">LFPG_DEL/GND/TWR/APP</span></td>
                </tr>
                <?php
                  while($rows = $result->fetch_assoc()){
                    try {
                      if (empty($_SESSION['cid'])) {
                          throw new \Exception('CID is not defined');
                      }
                  
                      $result = [];
                      if ($xml = simplexml_load_file($xml)) {
                          foreach ($xml->member as $member) {
                              if ($member->cid == $rows['cid']) {
                                  $xmlres = (array) $member;
                                  apiData($result);
                                  break;
                              }
                          }
                      } else {
                          throw new \Exception('The website was unable to load the XML file, please try again later.');
                      }
                  
                  } catch (Exception $e) {
                      // store in a variable if you wish
                      die($e->getMessage());
                  }
                    echo '<tr>
                    <td>'.$xmlres['firstname'].' '.$xmlres['lastname'].'</td>
                    <td>'.$rows['cid'].'</td>
                    <td>'.$xmlres['humanized-atc-rating'].'</td>
                    <td><span class="label label-success">LFPG_'.$rows['approvals'].'</td>
                    ';

                  }

                ?>


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