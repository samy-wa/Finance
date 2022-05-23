<?php
	include("config.php");  
 session_start();
 ?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Samara University Finance Managment System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<title>Change Password</title>


</head>

<center>
 <div id= forgot>
<form action="createnewpassss.php" method="POST" name="myForm" onSubmit="return validateForm();" enctype="multipart/form-data">
<fieldset>
<legend><h1>Recover Password</h1></legend>
<table align="center">
 <tr>
<td>User Name</td> <td>&nbsp;&nbsp;<input type="usename" name="username" placeholder="user name" size="33"></td></tr>
<tr>

<tr>
<td> Enter user id</td><td>&nbsp;&nbsp;<input type="text" name="id" placeholder="id"size="33"></td></tr>
<tr>
<td><input type="submit" name="submit" value="submit"/></td></tr>
</table><br>
</fieldset>	
</form>
</div>
</center>

  
		<h2>&nbsp;</h2>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
	</div>
</div>
<div id="footer">
	<p><?php //require('footer.php');?></p>
	
</div>
</body>
</html>