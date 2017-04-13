<?php
  require ('connect.inc.php');
  require ('../data.php');
  //echo 'twas a video file';
  if ($_POST) {
    $media_upload = ($_FILES['media_upload']['name']);
    if (isset($_POST['share']) && isset($_POST['itstitle']) && isset($_POST['itsdescription'])
     && isset($_POST['itslocation']) && isset($_POST['eventtype']) && isset($_POST['tagged'])){

      if (empty($_POST['share'])) $_POST['share'] = 'public';
      if (empty($_POST['eventtype'])) $_POST['eventtype'] = 'other';
      $share = $_POST['share'];
      $itstitle = $_POST['itstitle'];
      $itslocation = $_POST['itslocation'];
      $itsdescription = $_POST['itsdescription'];
      $tagged = $_POST['tagged'];
      $eventtype = $_POST['eventtype'];
      $date = date('Y-m-d');
      $insert = "INSERT INTO `tb_videos_uploaded` (col_name, col_title, col_description, col_member, col_tagged_member, col_share, col_event, col_location, col_date)
        VALUES ('".mysqli_real_escape_string($db, $media_upload)."', '".mysqli_real_escape_string($db, $itstitle)."',
        '".mysqli_real_escape_string($db, $itsdescription)."', '".mysqli_real_escape_string($db, $member)."',
        '".mysqli_real_escape_string($db, $tagged)."', '".mysqli_real_escape_string($db, $share)."',
        '".mysqli_real_escape_string($db, $eventtype)."', '".mysqli_real_escape_string($db, $itslocation)."', '$date')";
      if(!$res = $db->query($insert)){
        die('There was an error running the query [' . $db->error . ']');
      }

      else {
        $db->close();
        $tmp_name = ($_FILES['media_upload']['tmp_name']);
        $location = 'video.media/';
        $location.$media_upload = $media_upload;
        if(move_uploaded_file($tmp_name, $location.$media_upload)){
          echo '<script type="javascript"> alert("Uploaded Successfully"); </script>';
        }
      }
    }
  }
?>
