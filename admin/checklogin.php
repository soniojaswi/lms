<?php
require("connectlms.php");
session_start();
//print_r($_POST);
$useremail=$_POST['uemail'];
$userpassword=$_POST['upassword'];
$sql="select * from admin_tbl where m_admin_email='$useremail' and m_admin_password='$userpassword'";
$res= mysql_query($sql,$con);
$numrows = mysql_num_rows($res);
echo $numrows;
if ($numrows>=1){
    $data = mysql_fetch_assoc($res);
    $_SESSION['m_admin_id']=$data['m_admin_id'];
    $_SESSION['m_admin_name']=$data['m_admin_name'];
    $_SESSION['admin_login']=1;
    header('location:index.php');
}else{
    header('location:login.php?error=1');
}

?>
