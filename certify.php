<?php
  require ('members/connect.inc.php');
  if ($_POST) {
    $rtfname = $_POST['rtfname'];
    $sql = "SELECT * FROM `tb_rtfnames` WHERE `allrtfnames` = '$rtfname'";
    if(!$result = $db->query($sql)){
        die('There was an error running the query [' . $db->error . ']');
    }
    if ($result->num_rows > 0) {

    }
    else{
      header('signup.php?error=2');
    }
  }

?>
