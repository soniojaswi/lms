<?php
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass);
if($con){
//echo"connected sucessfully";
mysql_select_db("lms_db");
}else{
echo"some problem occured";
} 
?>