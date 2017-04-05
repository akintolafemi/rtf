<?php
  session_start();//session is a way to store information (in variables) to be used across multiple pages.
  if (!$_SESSION['member']) header('Location: login.php');
  else {
    session_destroy();
    header("Location: login.php");//use for the redirection to some page
  }
?>
