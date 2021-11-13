<?php
require("connectlms.php");
//print_r($_POST);
$studentname=$_POST['s_name'];
$studentphone=$_POST['s_phone'];
$studentdob=$_POST['s_dob'];
$studentgender=$_POST['s_gender'];
$studentcity=$_POST['s_city'];

// $upincode=$_POST['pincode'];
// $uemailid=$_POST['emailid'];
// $umobileno=$_POST['mobileno'];

 $sql = "insert into student_tbl(student_name,student_phone,student_dob,student_gender,student_city) values('$studentname', '$studentphone','$studentdob','$studentgender','$studentcity')";

mysql_query($sql, $con);

header('location:newstutbl.php?status=1');
?>