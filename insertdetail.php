<?php
require("connect.php");
//print_r($_POST);
$uname=$_POST['uname'];
$uemail=$_POST['email'];
$upnumber=$_POST['pnumber'];
$udob=$_POST['dob'];
//$uemail=$_POST['email'];

// $upincode=$_POST['pincode'];
// $uemailid=$_POST['emailid'];
// $umobileno=$_POST['mobileno'];
$enrolno=rand(0,99);
$enroldate=date('Y-m-d');
$enroltime=date('h:m:s');
$enrolcourse="2";
$enrolfees="5000";
$enrolofferfees="4000";
$enroltransid="1234";
$enrolstatus="0";
$sql = "insert into student_tbl(student_name,student_email,student_phone,student_dob) values('$uname', '$uemail','$upnumber','$udob')";

mysql_query($sql, $con);
$id = mysql_insert_id();
$sql = "insert into enrolment_tbl(enrol_number,enrol_date,enrol_time,enrol_student,enrol_course,enrol_fees,enrol_offerfees,enrol_transid,enrol_status) values('$enrolno', '$enroldate','$enroltime','$id','$enrolcourse','$enrolfees','$enrolofferfees','$enroltransid','$enrolstatus')";

mysql_query($sql, $con);

//header('location:courses.php?status=1');
?>