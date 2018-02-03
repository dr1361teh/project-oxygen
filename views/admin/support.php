<?php
$title = 'Support Tickets';
$supportcid = $_SESSION['cid'];
$listquery = mysqli_query($nconn, "SELECT * FROM support WHERE author='$supportcid';");
if($listquery){
    //continue
} else {
    $_SESSION['errcode'] = '0x009';
    $_SESSION['errmsg'] = "The server was unable to query the database to get the support tickets.";
    $_SESSION['errdesc'] = "Please try again later.";
    header('Location: index.php?content=error');  
}

?>
<?php
require 'header.php';
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
              <h3 class="box-title">Support Tickets</h3>
            </div>
            <div class="box-body">
              Create &amp; Manage your support tickets here. Please wait up to 48 hours for your ticket to be responded to!
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
              <h3 class="box-title">My Tickets</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 135px;">
                    <form action="index.php?content=createticket" method="post">
                  <input type="submit" name="table_search" class=" pull-right btn btn-info" value="New Ticket">
                    </form>
                  <!-- <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div> -->
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Ticket ID</th>
                  <th>Assignee</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Subject</th>
                  <th>Action</th>
                </tr>
                <?php
                    while($listrows = $listquery->fetch_assoc()){
                        $supportID = $listrows['id'];
                        $supportSubject = $listrows['subject'];
                        $supportBody = $listrows['body'];
                        $supportAuthor = $listrows['author'];
                        $supportDate = $listrows['date'];
                        $supportAssigned = $listrows['assigned'];
                        $supportStatus = $listrows['status'];
                        if($supportStatus === '0'){
                            $supStatus = '<span class="label label-danger">Closed</span>';
                        } elseif($supportStatus === '1'){
                            $supStatus = '<span class="label label-success">Open</span>';
                        } elseif($supportStatus === '2'){
                            $supStatus = '<span class="label label-warning">Pending</span>';
                        }
                        echo '<td>'.$supportID.'</td>
                        <td>'.$supportAssigned.'</td>
                        <td>'.date('M j Y \a\t H i', $supportDate).'</td>
                        <td>'.$supStatus.'</td>
                        <td>'.$supportSubject.'</td>
                        <td><a href="index.php?content=support?id='.$supportID.'">Open</a></td>
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
require 'footer.php';
?>