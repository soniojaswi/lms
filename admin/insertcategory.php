<?php
require("connectlms.php");
print_r($_POST);
$ucatetitle=$_POST['u_catetitle'];
$ucatedesc=$_POST['u_catedesc'];
$ucatestatus=$_POST['status'];
 
$target_dir="images/";
$target_file=$target_dir.basename($_FILES["img"]["name"]);
$filename=$_FILES["img"]["name"];
move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);

//print_r($_FILES);

 $sql = "insert into category_tbl( m_category_title,m_category_desc,m_category_status,m_category_img) values('$ucatetitle', '$ucatedesc','$ucatestatus','')";

mysql_query($sql, $con);

header('location:category.php?status=1');
?>