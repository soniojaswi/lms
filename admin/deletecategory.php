<?php
require('connectlms.php');
  $userid = $_GET['user'];

  $sql = "delete from category_tbl where m_category_id='$userid'";
  mysql_query($sql, $con);

  //header('location:logintbl.php');
  header('location:category.php?status=1');
?>