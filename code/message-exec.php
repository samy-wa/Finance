<?php
session_start();

include('config.php');
$id=$_POST['id'];
$from=$_POST['frm'];
$too=$_POST['too'];
$pnumber=$_POST['pnumber'];
$message=$_POST['message'];

if(mysql_query("INSERT INTO message(id,frm,too,pnumber,message) VALUES('$id','$from','$too','$pnumber','$message')")){
header("location: admin_commit.php");
}
else 
header("location: error.php");
mysql_close($ATA);
?> 