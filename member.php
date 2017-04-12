<?php
  session_start();
  include('data.php');
  if (!$_SESSION['member']) header('Location: login.php');
?>

<?php

  if ($_POST) {
    if (isset($_POST['yrphn']) && isset($_POST['dob']) && isset($_POST['rtfdep']) && isset($_POST['schdep']) && isset($_POST['schaddress']) && isset($_POST['homeaddress']) && isset($_POST['biography']) && isset($_POST['email'])){
      if (empty($_POST['yrphn'])) $_POST['yrphn'] = $phone;
      if (empty($_POST['dob'])) $_POST['dob'] = $dob;
      if (empty($_POST['rtfdep'])) $_POST['rtfdep'] = $rtfdep;
      if (empty($_POST['schdep'])) $_POST['schdep'] = $schdep;
      if (empty($_POST['level'])) $_POST['level'] = $level;
      if (empty($_POST['schaddress'])) $_POST['schaddress'] = $schaddress;
      if (empty($_POST['homeaddress'])) $_POST['homeaddress'] = $homeaddress;
      if (empty($_POST['biography'])) $_POST['biography'] = $biography;
      if (empty($_POST['email'])) $_POST['email'] = $mail;
      $phone = $_POST['yrphn'];
      $dob = $_POST['dob'];
      $rtfdep = $_POST['rtfdep'];
      $schdep = $_POST['schdep'];
      $level = $_POST['level'];
      $schaddress = $_POST['schaddress'];
      $homeaddress = $_POST['homeaddress'];
      $mail = $_POST['email'];
      $biography = $_POST['biography'];

      $update = "UPDATE `tb_membersinrtf` SET
        col_yrphn = '".mysqli_real_escape_string($db, $phone)."',
        col_dob = '".mysqli_real_escape_string($db, $dob)."',
        col_rtfdep = '".mysqli_real_escape_string($db, $rtfdep)."',
        col_schdep = '".mysqli_real_escape_string($db, $schdep)."',
        col_level = '".mysqli_real_escape_string($db, $level)."',
        col_schaddress = '".mysqli_real_escape_string($db, $schaddress)."',
        col_homeaddress = '".mysqli_real_escape_string($db, $homeaddress)."',
        col_email = '".mysqli_real_escape_string($db, $mail)."',
        col_biography = '".mysqli_real_escape_string($db, $biography)."' WHERE `col_rtfname` = '$member'";
      if(!$res = $db->query($update)){
          die('There was an error running the query [' . $db->error . ']');
      }

    }

    if (isset($_GET['skill'])){
      $value = $_GET['skill'];
      function updateskill($skill, $skillvalue, $col, $colvalue){
        $host = 'localhost';
      	$username = 'PoG';
      	$password = 'phpmyadmin';
      	$database = 'wearertfitesofivcu-nifes';
      	$db = new mysqli($host, $username, $password, $database);
      	if($db->connect_error > 0){
      		die('Unable to connect to database [' . $db->connect_error . ']');
      	}
        $member = $_SESSION['member'];
        $update = "UPDATE `tb_membersinrtf` SET
          $col = '".mysqli_real_escape_string($db, $skill)."',
          $colvalue = '".mysqli_real_escape_string($db, $skillvalue)."' WHERE `col_rtfname` = '$member'";
        if(!$res = $db->query($update)){
            die('There was an error running the query [' . $db->error . ']');
        }
      }
      switch ($value) {
        case 1:
          if (empty($_POST['skill1'])) {}
          else {
            $skill = $_POST['skill1'];
            $skillvalue = $_POST['skill1_score'];
            $col = 'col_skill1';
            $colvalue = 'col_skill1_score';
            updateskill($skill, $skillvalue, $col, $colvalue);
          }
          break;

        case 2:
          if (empty($_POST['skill2'])) {}
          else {
            $skill = $_POST['skill2'];
            $skillvalue = $_POST['skill2_score'];
            $col = 'col_skill2';
            $colvalue = 'col_skill2_score';
            updateskill($skill, $skillvalue, $col, $colvalue);
          }
          break;

        case 3:
          if (empty($_POST['skill3'])) {}
          else {
            $skill = $_POST['skill3'];
            $skillvalue = $_POST['skill3_score'];
            $col = 'col_skill3';
            $colvalue = 'col_skill3_score';
            updateskill($skill, $skillvalue, $col, $colvalue);
          }
          break;

        case 4:
          if (empty($_POST['skill4'])) {}
          else {
            $skill = $_POST['skill4'];
            $skillvalue = $_POST['skill4_score'];
            $col = 'col_skill4';
            $colvalue = 'col_skill4_score';
            updateskill($skill, $skillvalue, $col, $colvalue);
          }
          break;

        case 5:
          if (empty($_POST['skill5'])) {}
          else {
            $skill = $_POST['skill5'];
            $skillvalue = $_POST['skill5_score'];
            $col = 'col_skill5';
            $colvalue = 'col_skill5_score';
            updateskill($skill, $skillvalue, $col, $colvalue);
          }
          break;

        default:

          break;
      }
    }
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
                      <li><a href="signout.php" title="Sign Out"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                      <!--<li><a href="#"><span id="profilepic"><img src="members/profile.pictures/<?php echo $avatar; ?>"/></span></a></li>-->
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
                          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Photo Speaks<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a tabindex="-1" href="error-page.html">Album One</a></li>
                              <li><a tabindex="-1" href="error-page.html">Album Two</a></li>
                              <li><a tabindex="-1" href="error-page.html">Album Three</a></li>
                              <li><a tabindex="-1" href="error-page.html">Members Profile</a></li>
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
                              <li> <a href="error-page.html">Contact 2</a> </li>
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
              <li><a href="signout.php" title="Sign Out"><span class="fa fa-sign-out"></span> Sign Out</a></li>
              <!--<li><a href="#"><span id="profilepic"><img src="members/profile.pictures/<?php echo $avatar; ?>"/></span></a></li>-->
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
                <li><a href="home.php">Home</a></li>
                <li class="active"><a href="member.php">Profile</a></li>
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
    <div class="cp-main-content tb-50">
      <div class="cp-team-details">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="cp-team-info">
                <form>
                  <a class="btn-view">Change Display Picture<input type="file" accept="image/jpeg, image/png" name="img" /></a>
                </form>
                <div class="cp-thumb">
                  <img src="members/profile.pictures/<?php echo $avatar; ?>" alt="<?php echo $rtfname;?>" />
                </div>
                <div class="contact-title">
                  <h2><?php echo $rtfname; ?></h2>
                  <strong><?php echo $rtfdep ?></strong>
                </div>
                <address>
                  <ul>
                    <li><i class="fa fa-home"></i><?php echo $schaddress; ?></li>
                    <li><span class="address-addon"><i class="fa fa-leaf"></i><?php echo $rtfdep; ?></li>
                    <li><i class="fa fa-university"></i><?php echo $schdep; ?></li>
                    <li><i class="fa fa-trophy"></i><?php echo $level; ?></li>
                    <li><i class="fa fa-location-arrow"></i><?php echo $schaddress; ?></li>
                    <li><i class="fa fa-map-marker"></i><?php echo $homeaddress; ?></li>
                    <li><i class="fa fa-calendar-o"></i><?php echo $dob; ?></li>
                    <li><i class="fa fa-mobile-phone"></i><?php echo $phone; ?></li>
                    <li><i class="fa fa-envelope-o"></i><?php echo $mail; ?></li>
                  </ul>
                </address>
              </div>
              <div class="cp-prograss-bars tb-50">
                <h2 class="cp-sec-title">My Skills</h2><h5>click Icons to Add Skill</h5>
                <ul>
                  <li>
                    <label><?php echo $skill1; ?></label>
                    <div class="progress">
                      <div style="width: <?php echo $skill1_score; ?>%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo $skill1_score; ?>" role="progressbar" class="progress-bar"><strong onclick="showskill('skill1_form')"><?php echo $skill1_score; ?>%</strong></div>
                      <form action="member.php?skill=1" method="POST" style="display: none;" id="skill1_form"><input type="text" name="skill1" value="<?php echo $skill1; ?>" /><input value="<?php echo $skill1_score; ?>" type="number" min="1" max="100" name="skill1_score"/><input type="submit" value="GO" /></form>
                    </div>
                  </li>
                  <li>
                    <label><?php echo $skill2; ?></label>
                    <div class="progress">
                      <div style="width: <?php echo $skill2_score; ?>%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo $skill2_score; ?>" role="progressbar" class="progress-bar"><strong onclick="showskill('skill2_form')"><?php echo $skill2_score; ?>%</strong> </div>
                      <form action="member.php?skill=2" method="POST" style="display: none;" id="skill2_form"><input type="text" name="skill2" value="<?php echo $skill2; ?>" /><input value="<?php echo $skill2_score; ?>" type="number" min="1" max="100" name="skill2_score"/><input type="submit" value="GO" /></form>
                    </div>
                  </li>
                  <li>
                    <label><?php echo $skill3; ?></label>
                    <div class="progress">
                      <div style="width: <?php echo $skill3_score; ?>%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo $skill3_score; ?>" role="progressbar" class="progress-bar"> <strong onclick="showskill('skill3_form')"><?php echo $skill3_score; ?>%</strong></div>
                      <form action="member.php?skill=3" method="POST" style="display: none;" id="skill3_form"><input type="text" name="skill3" value="<?php echo $skill3; ?>" /><input value="<?php echo $skill3_score; ?>" type="number" min="1" max="100" name="skill3_score"/><input type="submit" value="GO" /></form>
                    </div>
                  </li>
                  <li>
                    <label><?php echo $skill4; ?></label>
                    <div class="progress">
                      <div style="width: <?php echo $skill4_score; ?>%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo $skill4_score; ?>" role="progressbar" class="progress-bar"> <strong onclick="showskill('skill4_form')"><?php echo $skill4_score; ?>%</strong></div>
                      <form action="member.php?skill=4" method="POST" style="display: none;" id="skill4_form"><input type="text" name="skill4" value="<?php echo $skill4; ?>" /><input value="<?php echo $skill4_score; ?>" type="number" min="1" max="100" name="skill4_score"/><input type="submit" value="GO" /></form>
                    </div>
                  </li>
                  <li>
                    <label><?php echo $skill5; ?></label>
                    <div class="progress">
                      <div id="progresscolor" style="width: <?php echo $skill5_score; ?>%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo $skill5_score; ?>" role="progressbar" class="progress-bar"> <strong onclick="showskill('skill5_form')"><?php echo $skill5_score; ?>%</strong></div>
                      <form action="member.php?skill=5" method="POST" style="display: none;" id="skill5_form"><input type="text" name="skill5" value="<?php echo $skill5; ?>" /><input id="progress" value="<?php echo $skill5_score; ?>" type="number" min="1" max="100" name="skill5_score"/><input type="submit" value="GO" /></form>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="team-detail">
                <h2>Biography</h2>
                <p>
                  <?php echo $biography; ?>
                </p>
              </div>
              <div class="cp-prograss-bars tb-50">
                <div class="cp-contact-form">
                  <h2>EDIT PROFILE</h2><h6>You can Edit just a field</h6>
                  <form class="material" method="post" action="member.php">
                    <ul>
                      <li class="input-group"> <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span>
                        <input type="text" class="form-control" placeholder="Phone Number" name="yrphn" />
                      </li>
                      <li class="input-group"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" placeholder="Date of Birth" name="dob" />
                      </li>
                      <li class="input-group"> <span class="input-group-addon"><i class="fa fa-leaf"></i></span>
                        <input type="text" class="form-control" placeholder="RTF Department" name="rtfdep" />
                      </li>
                      <li class="input-group"> <span class="input-group-addon"><i class="fa fa-university"></i></span>
                        <input type="text" class="form-control" placeholder="School Department" name="schdep" />
                      </li>
                      <li class="input-group"> <span class="input-group-addon"><i class="fa fa-dashboard"></i></span>
                        <input type="text" class="form-control" placeholder="Level" name="level" />
                      </li>
                      <li class="input-group"> <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                        <input type="text" class="form-control" placeholder="School Address" name="schaddress" />
                      </li>
                      <li class="input-group"> <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input type="text" class="form-control" placeholder="Home Address" name="homeaddress" />
                      </li>
                      <li class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                        <textarea type="text" class="form-control" placeholder="Email" name="email"></textarea>
                      </li>
                      <li class="input-group"> <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                        <textarea type="text" class="form-control" placeholder="your Biography" name="biography"></textarea>
                      </li>
                      <li>
                        <button type="submit" class="btn btn-submit"> Update Profile <i class="fa fa-angle-right"></i></button>
                      </li>
                    </ul>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cp-main-content top-50">
      <div class="cp-contactus">
        <div class="container">
          <div class="row">
            <div class="col-md-8">

            </div>
          </div>
        </div>
      </div>
    </div>

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
    <script src="./vendor/canvas-to-blob.min.js"></script>
		<script src="./js/resizeavatar.js"></script>
		<script src="./js/appavatar.js"></script>
    <script src="./js/skillform.js"></script>
  </body>
</html>

<?php
  $db->close();
?>
