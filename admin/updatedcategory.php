<?php
require('connectlms.php');
$userid = $_POST['user'];
  $catetitle = $_POST['up_categoryt'];
  $catedesc = $_POST['up_categoryd'];
  
//print_r($sql);
  $sql = "update category_tbl 
  set m_category_title='$catetitle', m_category_desc='$catedesc' 
  where m_category_id='$userid'";
  //echo $sql;
  mysql_query($sql, $con);

  header('location:category.php?status=1');
?>