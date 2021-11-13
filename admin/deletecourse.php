<?php
require('connectlms.php');
  $userid = $_GET['user'];

  $sql = "delete from course_tbl where course_id='$userid'";
  mysql_query($sql, $con);

  //header('location:logintbl.php');
  header('location:viewallcourse.php?status=1');
?>