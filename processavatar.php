<?php
session_start();
include ('data.php');
require ('members/connect.inc.php');
$filename = $avatar;
$where = $_SESSION['member'];
$update = "UPDATE `tb_membersinrtf` SET col_picture = '".mysqli_real_escape_string($db, $filename)."' WHERE `col_rtfname` = '".mysqli_real_escape_string($db, $where)."'";
if(!$res = $db->query($update)){
	//die('There was an error running the query [' . $db->error . ']');
}
$status = (boolean) move_uploaded_file($_FILES['photo']['tmp_name'], './members/profile.pictures/'.$filename);

if ($status) {
	//echo '<script type="text/Javascript">Location.reload();</script>';
}
