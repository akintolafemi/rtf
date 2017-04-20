<?php

  function safeStrip($string) {
      $string = stripslashes($string);
      $string = strip_tags($string);
      $string = htmlspecialchars($string);
      return $string;
  }

  function pictureToShoot($foldername, $sql){
    $host = 'localhost';
    $username = 'PoG';
    $password = 'phpmyadmin';
    $database = 'wearertfitesofivcu-nifes';
    $db = new mysqli($host, $username, $password, $database);
    if(!$result = $db->query($sql)){
      die('There was an error running the query [' . $db->error . ']');
    }
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $file_id = $row['col_id'];
        $file_name = $row['col_name'];
        $file_title = $row['col_title'];
        $file_description = $row['col_description'];
        $File_tagged = $row['col_tagged_member'];
        $file_share = $row['col_share'];
        $file_event = $row['col_event'];
        $file_location = $row['col_location'];
        $file_date = $row['col_date'];
        echo '
          <li>
            <div class="cp-box">
              <a href="#"><img src="'.$foldername.'/'.$file_name.'" alt="'.$file_title.'"></a>
              <div class="cp-text-box">
                <h2><a href="#">'.$file_title.'</a></h2>
                <strong class="title">'.$file_event.'</strong>
                <div class="detail-row">
                  <ul>
                    <button class="btn btn-view"><a href="'.$foldername.'/'.$file_name.'" download> save </a> <i class="fa fa-arrow-down"></i></button>
                  </ul>
                </div>
              </div>
            </div>
          </li>
        ';
      }
    }
  }

  function videoToShoot($foldername, $sql){
    $host = 'localhost';
    $username = 'PoG';
    $password = 'phpmyadmin';
    $database = 'wearertfitesofivcu-nifes';
    $db = new mysqli($host, $username, $password, $database);
    if(!$result = $db->query($sql)){
      die('There was an error running the query [' . $db->error . ']');
    }
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $file_id = $row['col_id'];
        $file_name = $row['col_name'];
        $file_title = $row['col_title'];
        $file_description = $row['col_description'];
        $File_tagged = $row['col_tagged_member'];
        $file_share = $row['col_share'];
        $file_event = $row['col_event'];
        $file_location = $row['col_location'];
        $file_date = $row['col_date'];
        echo '
          <li>
            <div class="cp-box">
              <a href="#">
                <video width="320" height="240" src="'.$foldername.'/'.$file_name.'" type="video/*">
                  Your browser does not support the video tag.
                </video>
              </a>
              <div class="detail-row">
                <ul>
                  <li>'.$file_title.'</li>
                  <li>'.$file_event.'</li>
                  <li><a href="'.$foldername.'/'.$file_name.'" download> save </a> <i class="fa fa-arrow-down"></i></li>
                </ul>
              </div>
            </div>
          </li>
        ';
      }
    }
  }

?>
