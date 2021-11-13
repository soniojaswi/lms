<?php
require("connectlms.php");
$userid = $_POST['user'];
  $newpass = $_POST['cnupassword'];
  $currnew = $_POST['cupassword'];
  

  $sql = "update admin_tbl set m_admin_password='$newpass'
   where m_admin_id= '$userid'";
  //echo $sql;
  mysql_query($sql, $con);

  header('location:index.php?status=1');
?>
