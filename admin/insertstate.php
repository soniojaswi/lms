<?php
require("connectlms.php");
//print_r($_POST);
$userstate=$_POST['u_statetitle'];
$usercountry=$_POST['u_statecountry'];

// $upincode=$_POST['pincode'];
// $uemailid=$_POST['emailid'];
// $umobileno=$_POST['mobileno'];

 $sql = "insert into state_tbl( m_state_title,m_state_country) values('$userstate', '$usercountry')";

mysql_query($sql, $con);

header('location:state.php?status=1');
?>