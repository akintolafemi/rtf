<?php
require_once('members/connect.inc.php');
include('data.php');
session_start();
if (!isset($_GET['member']) || empty($_GET['member'])) {
  header('Location: index.php');
}
$rtfname = $_GET['member'];
$sql = "SELECT * FROM `tb_rtfnames` WHERE `allrtfnames` = '$rtfname'";
if(!$result = $db->query($sql)){
  die('There was an error running the query [' . $db->error . ']');
}
if ($result->num_rows == 0) {
  header('Location: index.php');
}
?>
<!doctype html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="In Love In Prayer In Holiness, Royal Theatre Family, Ibadan Varsity Christian Union, RTF, IVCU">
    <meta name="description" content="Royal Theatre Family">
    <meta name="author" content="Royal Theatre Family">
    <meta name="author" content="Akintola Micheal Oluwafemi">
    <meta http-equiv="refresh" content="300">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Theatre Family</title>

    <link href="css/custom.css" rel="stylesheet" type="text/css">

    <link href="css/color.css" rel="stylesheet" type="text/css">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <link href="css/responsive.css" rel="stylesheet" type="text/css">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">

    <link href="css/iconmoon.css" rel="stylesheet" type="text/css">

    <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">

    <link href="css/yamm-menu.css" rel="stylesheet" type="text/css">

    <link rel="icon" href="images/fav.ico" type="image/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]-->
  </head>
  <body class="theme-style-1">
    <div id="wrapper">
      <header id="header">
        <section class="logo-row">
          <div class="sidebar-menu-box">
            <div class="cp-burger-nav">
              <div id="cp_side-menu-btn" class="cp_side-menu"><a href="#" class=""><span class="icon-icons-07"></span></a></div>
              <div id="cp_side-menu"> <a href="#" id="cp-close-btn" class="crose"><i class="fa fa-close"></i></a>
                <div class="cp-top-bar">
                  <div class="login-section">
                    <ul>
                      <li><a href="login.php" title="Login"><i class="fa fa-sign-in"></i>Log in <b>/</b></a></li>
                      <li><a href="signup.php" title="Sign In"> Sign up</a></li>
                    </ul>
                  </div>
                </div>
                <strong class="logo-2"><a href="index.php" title="Royal Theatre Family"><h2 style="color: #d94350;">Royal Theatre Family - IVCU</h2></a></strong>
                <form action="#">
                  <input type="text" placeholder="Search photos" required>
                  <button><span class="icon-icons-06"></span></button>
                  <em>... or choose a category on right.</em>
                </form>
                <div class="content mCustomScrollbar">
                  <div id="content-1" class="content">
                    <div class="cp_side-navigation">
                      <nav>
                        <ul class="navbar-nav">
                          <li class="active"><a href="index.php">Home</a></li>
                          <li><a href="error-page.html">Cover Photos</a></li>
                          <li><a href="error-page.html">Latest</a></li>
                          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <li> <a href="error-page.html">Birthday</a> </li>
                              <li> <a href="error-page.html">Drama Night</a> </li>
                              <li> <a href="error-page.html">Fellowship after Fellowship</a> </li>
                              <li> <a href="error-page.html">Unit Meeting</a> </li>
                              <li> <a href="error-page.html">Revelation Night</a> </li>
                            </ul>
                          </li>
                          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <li> <a href="error-page.html">Royal 7</a> </li>
                              <li> <a href="error-page.html">Alumni</a> </li>
                              <li> <a href="error-page.html">Events</a> </li>
                              <li> <a href="error-page.html">Join the Family</a> </li>
                              <li> <a href="error-page.html">About us</a> </li>
                              <li> <a href="error-page.html">Contact Us</a> </li>
                            </ul>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="login-section">
            <ul>
              <li><a href="login.php" title="Login"><i class="fa fa-sign-in"></i>Log in <b>/</b></a></li>
              <li><a href="signup.php" title="Sign In"> Sign up</a></li>
            </ul>
        </div>
        <div class="container"> <strong class="logo"><a href="index.php" title="Royal Theatre Family"><h2 style="color: #d94350;">Royal Theatre Family - IVCU</h2></a></strong> </div>
      </section>
      <section class="cp-navigation-row">
        <div class="container">
          <div class="navbar yamm navbar-default">
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div id="navbar-collapse-1" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="error-page.html">Cover Photos</a></li>
                <li><a href="error-page.html">Latests</a></li>
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Categories<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <ul class="col-sm-3 list-unstyled">
                            <li>
                              <h4>Birthdays</h4>
                            </li>
                            <li> <a href="error-page.html">January</a> </li>
                            <li> <a href="error-page.html">February</a> </li>
                            <li> <a href="error-page.html">March</a> </li>
                            <li> <a href="error-page.html">April</a> </li>
                            <li> <a href="error-page.html">May</a> </li>
                            <li> <a href="error-page.html">June</a> </li>
                            <li> <a href="error-page.html">July</a> </li>
                            <li> <a href="error-page.html">August</a> </li>
                            <li> <a href="error-page.html">September</a> </li>
                            <li> <a href="error-page.html">October</a> </li>
                            <li> <a href="error-page.html">November</a> </li>
                            <li> <a href="error-page.html">December</a> </li>
                          </ul>
                          <ul class="col-sm-3 list-unstyled">
                            <li>
                              <h4>Fellowship after Fellowship</h4>
                            </li>
                            <li> <a href="error-page.html">Photos</a> </li>
                            <li> <a href="error-page.html">Lessons</a> </li>
                            <li> <a href="error-page.html">Meetups</a> </li>
                          </ul>
                          <ul class="col-sm-3 list-unstyled">
                            <li>
                              <h4>Unit Meeting</h4>
                            </li>
                            <li> <a href="error-page.html">Notes</a> </li>
                            <li> <a href="error-page.html">Prayers</a> </li>
                          </ul>
                          <ul class="col-sm-3 list-unstyled">
                            <li>
                              <h4>Revelation Night</h4>
                            </li>
                            <li> <a href="error-page.html">2015</a> </li>
                            <li> <a href="error-page.html">2016</a> </li>
                            <li> <a href="error-page.html">2017</a> </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <ul class="col-sm-3 list-unstyled">
                            <li> <a href="error-page.html">Royal 7</a> </li>
                            <li> <a href="error-page.html">Alumni</a> </li>
                            <li> <a href="error-page.html">Events</a> </li>
                          </ul>
                          <ul class="col-sm-3 list-unstyled">
                            <li> <a href="error-page.html">Join the Family</a> </li>
                          </ul>
                          <ul class="col-sm-3 list-unstyled">
                            <li> <a href="error-page.html">About us</a> </li>
                          </ul>
                          <ul class="col-sm-3 list-unstyled">
                            <li> <a href="error-page.html">Contact Us</a> </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="cp-search-box"><a href="#" id="searchtoggl"><span class="icon-icons-06"></span></a></div>
                </li>
                <li> <a href="media-upload.php" class="upload-btn"><i class="fa fa-upload"></i></a> </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </header>

    <div class="cp-search-outer">
      <div id="searchbar">
        <form id="searchform" action="#">
          <input placeholder="Type your text here" type="text" required>
          <button type="submit" value=""><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>

    <section class="cp-inner-banner">
      <h1>Browse Pictures by <?php echo strtoupper($rtfname); ?> </h1>
      <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li><a href="member.profile.php?member=<?php echo $rtfname; ?>">Profile</a></li>
      </ol>
    </section>

    <section class="cp-category cp-photo-box">
      <ul>
        <?php
          if (!isset($_SESSION['member'])) $sql = "SELECT * FROM `tb_pictures_uploaded` WHERE `col_member` = '$rtfname' AND `col_share` != 'membersalone'";
          else { $sql = "SELECT * FROM `tb_pictures_uploaded` WHERE `col_member` = '$rtfname'"; }
          whatToShoot('members/picture.media', $sql);
        ?>
      </ul>
      <div class="cp-load-more"><a href="#" class="load"><span class="icon-icons-10"></span>Load More</a></div>
    </section>

    <section class="category-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="cp-box">
              <h2>Browse Images by Member Profiles</h2>
              <div class="row">
                <?php include('members.php'); ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="cp-box">
              <h2>Browse Images by Events</h2>
              <div class="row">
                <div class="col-md-4">
                  <ul>
                    <li><a href="#">Event 1</a></li>
                    <li><a href="#">Event 2</a></li>
                    <li><a href="#">Event 3</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul>
                    <li><a href="#">Event 4</a></li>
                    <li><a href="#">Event 5</a></li>
                    <li><a href="#">Event 6</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul>
                    <li><a href="#">Event 1</a></li>
                    <li><a href="#">Event 2</a></li>
                    <li><a href="#">Event 3</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <div class="footer-social">
        <div class="cp-sidebar-social"> <strong class="title">Connect us on</strong>
          <ul>
            <li><a href="#"><span class="icon-socialicons-01"></span></a></li>
            <li><a href="#"><span class="icon-socialicons-03"></span></a></li>
            <li><a href="#"><span class="icon-socialicons-04"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="copyrights"><strong class="copy"><a href="https://www.linkedin.com/in/michael-akinfemi-akintola-536432109/" target="_blank">Designed PoG<a/> &copy; 2017 All Rights Reserved </strong></div>
      </footer>
    </div>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src='js/bg-moving.js'></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
<?php
  $db->close();
?>
