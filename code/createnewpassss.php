<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Samara University Finance Management System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<title>Change Password</title>

<script type="text/javascript" language="javascript">
function validateForm()
{
   if(document.myForm.username.value == "")
   {
     alert( "Please FILL username!");
     document.myForm.username.focus();
     return false;
   }
   if(document.myForm.id.value == "")
   {
     alert( "Please Fill your id!");
     document.myForm.username.focus();
     return false;
   }
   
   
   
   
   return(true);
}
</script>
</head>
<div id="content">
<?php
//require('hedear.php');

$u=$_POST['username'];
$fn=$_POST['id'];
//$u=base64_encode("$u");
require('config.php');
$query=mysqli_query($ATA,"select * from account where username='$u' and id='$fn'");
			  if($query && mysqli_num_rows($query)== true)
			  { $_SESSION['username']=$u;
		        $_SESSION['id']=$fn;
?>
<form action="newpass.php" method="POST" name="myForm" onSubmit="return validateForm();" enctype="multipart/form-data">

<center>
<div id="change">
 <legend><h4>Change Password</h4></legend>
<table>

<tr>
<td> New Password</td><td><input type="password" name="newpass" placeholder="new password" size="33"></td></tr>
<tr>
<td> Confirm</td><td><input type="password" name="repeatnewpass" placeholder="confirm new password"size="33"></td></tr>
<tr>
<td><input type="submit" name="submit" value="save"/></td></tr>

</form>
</table>
</div>
</center>
<br>
	</fieldset>			
 

                            </div>
                        </div>
                        <!-- /block -->
                    </div>
				 </div>
       
	 <?php }else{  
	 
	 ?>
	 <script>
  alert('Incorrect username or id');
  window.location='Adminfogot.php';
 </script>
 <?php
 }?>
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
</div><div id="footer">
	<p><?php //require('footer.php');?></p>
	
</div>
</body>
</html>
	

                       