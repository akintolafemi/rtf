<?php
  session_start();
  if (!$_SESSION['member']) header('Location: login.php');
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
                      <li><a href="#"><span></span><img src="images/author.jpg"</a></li>
                    </ul>
                  </div>
                </div>
                <strong class="logo-2"><a href="index.html" title="Royal Theatre Family"><h2 style="color: #d94350;">Royal Theatre Family - IVCU</h2></a></strong>
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
                          <li class="active"><a href="index.html">Home</a></li>
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
              <li><a href="#"><span></span><img src="images/author.jpg"</a></li>
            </ul>
        </div>
        <div class="container"> <strong class="logo"><a href="index.html" title="Royal Theatre Family"><h2 style="color: #d94350;">Royal Theatre Family - IVCU</h2></a></strong> </div>
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
                <li> <a href="error-page.html" class="upload-btn"><i class="fa fa-upload"></i></a> </li>
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

    <div class="cp-main-content top-50">
      <div class="cp-contactus">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="contact-info">
                <h2>Info</h2>
                <details>
                  <ul>
                    <li><span class="address-addon"><i class="fa fa-user"></i></span>
                      <p>Names: Akintola Micheal O [FMJ]</p>
                    </li>
                    <li><span class="address-addon"><i class="fa fa-phone"></i></span>
                      <p>Phone: 0123 456 7890</p>
                    </li>
                    <li><span class="address-addon"><i class="fa fa-unit"></i></span>
                      <p>Department: Light and Stage</p>
                    </li>
                    <li><span class="address-addon"><i class="fa fa-university"></i></span>
                      <p>Academic: Computer Science</p>
                    </li>
                    <li><span class="address-addon"><i class="fa fa-house"></i></span>
                      <p>Room Number: A25, Indy Hall, UI</p>
                    </li>
                    <li><span class="address-addon"><i class="fa fa-unit"></i></span>
                      <p>Birthday: Birthday</p>
                    </li>
                    <li><span class="address-addon"><i class="fa fa-unit"></i></span>
                      <p>Home Address: Home</p>
                    </li>
                  </ul>
                </details>
              </div>
            </div>
            <div class="col-md-8">
              <div class="cp-contact-form">
                <h2>EDIT INFO</h2>
                <form class="material" method="post" action="#">
                  <ul>
                    <li class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="RTF Name" name="rtfname" required>
                    </li>
                    <li class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Phone Number" name="yrphn" required>
                    </li>
                    <li class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Name" name="name" required>
                    </li>
                    <li>
                      <button type="submit" class="btn btn-submit"> Submit <i class="fa fa-angle-right"></i></button>
                    </li>
                  </ul>
                </form>
              </div>
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
                <div class="col-md-4">
                  <ul>
                    <li><a href="#">Member 1</a></li>
                    <li><a href="#">Member 2</a></li>
                    <li><a href="#">member 3</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul>
                    <li><a href="#">member 4</a></li>
                    <li><a href="#">member 5</a></li>
                    <li><a href="#">member 6</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul>
                    <li><a href="#">Member 7</a></li>
                    <li><a href="#">Member 8</a></li>
                    <li><a href="#">Member 9</a></li>
                  </ul>
                </div>
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
