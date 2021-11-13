

<?php
require('connectlms.php');
$coursename = $_POST['uname'];
$coursedesc = $_POST['udesc'];
$coursecategory = $_POST['ucat'];
$coursesubcategory = $_POST['usubcat'];
$courseduration = $_POST['uduration'];
$coursefees = $_POST['ufees'];
$courseofferfees = $_POST['uofees'];
$courselang= $_POST['ulang'];
$courselastupdate = $_POST['ulastupdate'];
$courseorder = $_POST['uorder'];
$coursestatus = $_POST['ustatus'];

print_r($_FILES);

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$filename = $_FILES["myfile"]["name"];
move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);

$target_dir1 = "images/";
$target_file1 = $target_dir1.basename($_FILES["uimg"]["name"]);
$filename1 = $_FILES["uimg"]["name"];
move_uploaded_file($_FILES["uimg"]["tmp_name"], $target_file1);


$sql = "insert into course_tbl (course_title,course_desc,course_banner,course_img,course_category,course_subcategory,course_duration,course_fees,course_offerfess,course_language,course_lastupdated,course_order,course_status) values('$coursename','$coursedesc','$filename','$filename1','$coursecategory','$coursesubcategory','$courseduration','$coursefees','$courseofferfees','$courselang','$courselastupdate','$courseorder','$coursestatus')";
echo $sql;
mysql_query($sql, $con);

header('location:viewallcourse.php');
?>