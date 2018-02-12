<?php
//Header File (global for admin dashboard)


//Get Notifications
require('library/events/notify/master.php');


try {
    if (empty($_SESSION['cid'])) {
        throw new \Exception('CID is not defined');
    }

    $result = [];
    if ($xml = simplexml_load_file('http://api.vateud.net/members/FRA.xml')) {
        foreach ($xml->member as $member) {
            if ($member->cid == $_SESSION['cid']) {
                $result = (array) $member;
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
if (empty($result)) {
    $_SESSION['errcode'] = '0x002';
    $_SESSION['errmsg'] = "You cannot login because the CID, <i>$actualcid</i> is not a member of the VATSIM France division.";
    $_SESSION['errdesc'] = "Please contact your division director.";
    header('Location: index.php?content=error');
}
// require('../config.php');
// require('../connection.php');

function apiData($res)
{
    //Create session variables
    $_SESSION['firstname'] = $res['firstname'];
    $_SESSION['lastname'] = $res['lastname'];
    $_SESSION['regdate'] = $res['reg-date'];
    $_SESSION['active'] = $res['active'];
    $_SESSION['atcrating'] = $res['humanized-atc-rating'];
    $_SESSION['pilotrating'] = $res['humanized-pilot-rating'];
    $_SESSION['country'] = $res['country'];
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php if (isset($title)) {echo $title;} else {echo 'VATFRANCE';}?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="views/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="views/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="styles/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="styles/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
  <div class="wrapper">

    <header class="main-header">
      <nav class="navbar navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <a style="color:black !important;" href="index.php?content=dashboard" class="navbar-brand"><b>French</b>vACC</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
              <li><a href="#">Forums</a></li>
              <li><a href="#">VATFRANCE</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">ATC <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Sector Files</a></li>
                  <li><a href="#">Controller Documents</a></li>
                  <li><a href="#">Controller Roster</a></li>
                  <li><a href="#">Controller Booking</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Visiting Controllers</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Training Department</a></li>
                  <li><a href="#">Solo Validations</a></li>
                  <li><a href="#">Request Mentoring </a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pilots <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Charts System</a></li>
                  <li><a href="#">VATSIM Pilot Ratings</a></li>
                  <li><a href="#">VATSIM Resources</a></li>
                  <li class="divider"></li>
                  <li><a href="#">VATFRANCE Pilot Training</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Groupflight System</a></li>
                </ul>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Membership <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Change Your E-Mail</a></li>
                    <li><a href="#">VATSIM Pilot Ratings</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Support Tickets</a></li>
                    <li><a href="#">Teamspeak</a></li>
                </ul>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">FIRs <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Paris ACC</a></li>
                    <li><a href="#">Brest ACC</a></li>
                    <li><a href="#">Reims ACC</a></li>
                    <li><a href="#">Bordeaux ACC</a></li>
                    <li><a href="#">Marseille ACC</a></li>
                </ul>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Staff <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">HQ Log</a></li>
                    <li><a href="#">Mass Email</a></li>
                    <li><a href="#">vACC FIR staff Menu</a></li>
                    <li><a href="#">vACC Staff Menu</a></li>
                    <li><a href="#">Mass Email</a></li>
                </ul>
          </div>
          <!-- /.navbar-collapse -->
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- /.messages-menu -->

              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning"><?php echo $notifrCount; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have <?php echo $notifrCount; ?> notifications</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class="menu">
                    <?php
                    $notifqueryResult = $nconn->query($query);
                      while($notifResult = $notifqueryResult->fetch_assoc()){
                        $notifrName = $notifResult['name'];
                        $notifrMessage = $notifResult['message'];
                        $notifrDate = date('j M H:i', $notifResult['date']);
                        echo '
                        <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> '.$notifrName.'
                        </a>
                      </li>';
                    }
                    ?>
                      <!-- end notification -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="styles/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="styles/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                    <p style="color:black !important;">
                      <?php echo $_SESSION['cid'] . ' - <strong>' . $_SESSION['atcrating'] . '</strong>'; ?>
                      <small>Created <?php echo substr($_SESSION['regdate'], 0, 10); ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">My Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="library/events/logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
      </nav>
  </header>