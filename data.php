<?php
require ('members/connect.inc.php');
if (isset($_GET['member'])) $rtfname = $_GET['member'];
else { $rtfname = $_SESSION['member']; }
$sql = "SELECT * FROM `tb_membersinrtf` WHERE `col_rtfname` = '".mysqli_real_escape_string($db, $rtfname)."'";
if(!$result = $db->query($sql)){
  die('There was an error running the query [' . $db->error . ']');
}
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $realpassword = $row['col_psword'];
    $member = $row['col_rtfname'];
    $avatar = $row['col_picture'];
    if ($avatar == '') $avatar = 'memberdefault.png';
    $phone = $row['col_yrphn'];
    $dob = $row['col_dob'];
    $rtfdep = $row['col_rtfdep'];
    $schdep = $row['col_schdep'];
    $level = $row['col_level'];
    $schaddress = $row['col_schaddress'];
    $homeaddress = $row['col_homeaddress'];
    $fname = $row['col_fname'];
    $lname = $row['col_lname'];
    $mail = $row['col_email'];
    $biography = $row['col_biography'];
    $skill1 = $row['col_skill1'];
    $skill1_score = $row['col_skill1_score'];
    $skill2 = $row['col_skill2'];
    $skill2_score = $row['col_skill2_score'];
    $skill3 = $row['col_skill3'];
    $skill3_score = $row['col_skill3_score'];
    $skill4 = $row['col_skill4'];
    $skill4_score = $row['col_skill4_score'];
    $skill5 = $row['col_skill5'];
    $skill5_score = $row['col_skill5_score'];
  }
}

function doThis($tbname, $media_upload, $foldername, $extension, $member) {
  if (isset($_POST['share']) && isset($_POST['itstitle']) && isset($_POST['itsdescription'])
   && isset($_POST['itslocation']) && isset($_POST['eventtype']) && isset($_POST['tagged'])){
    $host = 'localhost';
    $username = 'PoG';
    $password = 'phpmyadmin';
    $database = 'wearertfitesofivcu-nifes';
    $db = new mysqli($host, $username, $password, $database);
    $share = $_POST['share'];
    $itstitle = $_POST['itstitle'];
    $itslocation = $_POST['itslocation'];
    $itsdescription = $_POST['itsdescription'];
    $tagged = $_POST['tagged'];
    $eventtype = $_POST['eventtype'];
    $date = date('Y-m-d');
    $sql = "SELECT * FROM `$tbname` WHERE `col_name` = '".mysqli_real_escape_string($db, $media_upload)."'";
    if(!$result = $db->query($sql)){
      die('There was an error running the query [' . $db->error . ']');
    }
    if ($result->num_rows == 0) {
      $insert = "INSERT INTO `$tbname` (col_name, col_title, col_description, col_member, col_tagged_member, col_share, col_event, col_location, col_date)
      VALUES ('".mysqli_real_escape_string($db, $media_upload)."', '".mysqli_real_escape_string($db, $itstitle)."',
      '".mysqli_real_escape_string($db, $itsdescription)."', '".mysqli_real_escape_string($db, $member)."',
      '".mysqli_real_escape_string($db, $tagged)."', '".mysqli_real_escape_string($db, $share)."',
      '".mysqli_real_escape_string($db, $eventtype)."', '".mysqli_real_escape_string($db, $itslocation)."', '$date')";
      if(!$res = $db->query($insert)){
        die('There was an error running the query [' . $db->error . ']');
      }

      else {
        $tmp_name = ($_FILES['media_upload']['tmp_name']);
        $location = 'members/'.$foldername.'/';
        $location.$media_upload = $media_upload;
        if(move_uploaded_file($tmp_name, $location.$media_upload)){
          echo '<script type="text/javascript">
                alert("File Uploaded Successfully");
              </script>';
        }
      }
    }
  }
}


?>
