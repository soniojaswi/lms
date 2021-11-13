<?php
require("connectlms.php");
//print_r($_POST);
$usercitytitle=$_POST['u_citytitle'];
$userstate=$_POST['u_citystate'];

// $upincode=$_POST['pincode'];
// $uemailid=$_POST['emailid'];
// $umobileno=$_POST['mobileno'];

$sql = "insert into city_tbl( m_city_title,m_city_state) values('$usercitytitle', '$userstate')";

mysql_query($sql, $con);

header('location:city.php?status=1');
?>1