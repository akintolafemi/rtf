<?php
  require ('members/connect.inc.php');
  $rtfname = $_SESSION['member'];
  $sql = "SELECT * FROM `tb_membersinrtf` WHERE `col_rtfname` = '$rtfname'";
  if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
  }
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $realpassword = $row['col_psword'];
      $member = $row['col_rtfname'];
      $avatar = $row['col_picture'];
      $phone = $row['col_yrphn'];
      $dob = $row['col_dob'];
      $rtfdep = $row['col_rtfdep'];
      $schdep = $row['col_schdep'];
      $level = $row['col_level'];
      $schaddress = $row['col_schaddress'];
      $homeaddress = $row['col_homeaddress'];
      $fname = $row['col_fname'];
      $lname = $row['col_lname'];
    }
  }


?>
