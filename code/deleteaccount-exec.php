<?php
session_start();

include('config.php');
$id=$_POST['id'];
$full_name=$_POST['fullname'];
$user_name=$_POST['username'];
$password=$_POST['password'];
//$numberof_page=$_POST['confirm'];
$phone_number=$_POST['phone_number'];
$account_type=$_POST['account_type'];
if(mysql_query("DELETE FROM Account  WHERE id='$id'"))
header("location: admin_commit.php");
else
echo "error delete news"."".mysql_error();
?> 