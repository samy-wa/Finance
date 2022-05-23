<?php
require_once('function.php');
session_start();
?>
<!doctype html>
<html><br>
<head>
<html>
<head><title> Home page</title></head>
 <link rel="stylesheet" href="mystyle1.css">
 <script type="text/javascript">
function validateForm()
{

var y=document.forms["login1"]["username"].value;
var a=document.forms["login1"]["password"].value;
if( document.login.position.value == "-1" )
   {
     alert( "Please select your account type!" );
     document.login1.position.focus() ;
     return false;
   }
if ((y==null || y==""))
  {
  alert("you must enter your username");
  return false;
  }
  if ((a==null || a==""))
  {
  alert("you must enter your password");
  return false;
  }
return true
}
</script>

</head>
<link rel="stylesheet" type=" text/css"  href="css/nav.css">
<!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
<link href="css/admin_panel.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login page </title>

<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<!--<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>-->
	<!--<script type="text/javascript" src="js/jquery.equalHeight.js"></script>-->
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php

$account_type=$_POST['account_type'];
$username=$_POST['username'];
$password=md5($_POST['password']);

if($account_type=="System Admin")
{
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"financedb");

$sql = "select * from account where username='".$username."' and password='".$password."' and account_type='System Admin'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo "<script>window.location='loginp-error1.php';</script>";
}
else
{

header("location:Systemadminpage.php");
$_SESSION['username']=$row['username'];
} 
mysqli_close($con);
}
else if($account_type=="Administrator")
{
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"financedb");
$sql = "select * from account where username='".$username."' and password='".$password."' and account_type='Administrator'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo "<script>window.location='loginp-error1.php';</script>";
}
else
{

header("location:administratorlastpage.php");
$_SESSION['UserName']=$row['username'];
} 
mysqli_close($con);
}
else if($account_type=="General Casher")
{
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"financedb");
$sql = "select * from account where username='".$username."' and password='".$password."' and account_type='General Casher'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo "<script>window.location='loginp-error1.php';</script>";
}
else
{
	header("location:Casherpage.php");
$_SESSION['usertype']=$row['account_type'];
$_SESSION['UserName']=$row['username'];

} 
mysqli_close($con);
}
else if($account_type=="Cost and Inventory")
{
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"financedb");
$sql = "select * from account where username='".$username."' and password='".$password."' and account_type='Cost and Inventory'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo "<script>window.location='loginp-error1.php';</script>";
}
else
{
$_SESSION['usertype']=$row['usertype'];
$_SESSION['UserName']=$row['UserName'];
header("location:inventorypagelast.php");

} 
mysqli_close($con);
}
else if($account_type=="Finance Officer")
{
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"financedb");
$sql = "select * from account where username='".$username."' and password='".$password."' and account_type='Finance Officer'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo "<script>window.location='loginp-error1.php';</script>";
}
else
{
	header("location:Financeofficerpage.php");
$_SESSION['usertype']=$row['account_type'];
$_SESSION['UserName']=$row['username'];


} 
mysqli_close($con);
}
else if($account_type=="Auditor")
{
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"financedb");
$sql = "select * from account where username='".$username."' and password='".$password."' and account_type='Auditor'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo "<script>window.location='loginp-error1.php';</script>";
}
else
{
	header("location:auditorpage.php");
$_SESSION['usertype']=$row['account_type'];
$_SESSION['UserName']=$row['username'];


} 
mysqli_close($con);
}
?>

</body>
</html>
