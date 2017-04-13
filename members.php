<?php

//$com = "SELECT COUNT(*) AS c FROM `tb_membersinrtf`";
//if (!$comr = $db->query($com)){
  //  die('There was an error running the query [' . $db->error . ']');
//}
//$cw = $comr->fetch_assoc();
//$rowdiv = $cw['c'] / 3;

$sql = "SELECT * FROM `tb_membersinrtf` ORDER BY col_rtfname";
if(!$result = $db->query($sql)){
  die('There was an error running the query [' . $db->error . ']');
}
if ($result->num_rows > 0) {
  echo '<div class="col-md-4">
    <ul>
  ';
  while($row = $result->fetch_assoc()) {
    $member_fname = $row['col_fname'];
    $member_lname = $row['col_lname'];
    echo '
      <li><a href="member.profile.php?member='.$row['col_rtfname'].'" title="'.$row['col_rtfname'].'">'.$member_lname.' '.$member_fname.'</a></li>  ';
  }
  echo '</ul></div>';
}

?>
