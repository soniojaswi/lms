<?php
require('connectlms.php');
$userid = $_POST['user'];
  $statetitle = $_POST['u_statetitle'];
  $statecountry = $_POST['u_statecountry'];
  

  $sql = "update state_tbl set m_state_title='$statetitle', m_state_country='$statecountry'
   where m_state_id= '$userid'";
  //echo $sql;
  mysql_query($sql, $con);

  header('location:state.php?status=1');
?>