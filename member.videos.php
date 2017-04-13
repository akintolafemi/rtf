<?php
require_once('members/connect.inc.php');
include('data.php');
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
