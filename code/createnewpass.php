<?php

session_start();

?> 
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Samara University Finance Management system</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<title>Change Password</title>

<script type="text/javascript" language="javascript">
function validateForm()
{
   
   
   if( document.myForm.newpass.value == "" )
   {
     alert( "Please fill the  new password!" );
     document.myForm. newpass.focus() ;
     return false;
   }
   if( document.myForm.repeatnewpass.value == "" )
   {
     alert("Please repeate new password!" );
     document.myForm.repeatnewpass.focus() ;
     return false;
   }
   return(true);
}
</script>
</head>
<div id="content">
<?php
//require('hedear.php');
$fn=$_POST['fullname'];
$un=$_POST['username'];
$un=base64_encode("$un");
require('config.php');
$query=mysql_query("select * from account where username='$un' and pin='$id'");
			  if($query && mysql_num_rows($query)== true)
			  { $_SESSION['pin'] = $id;
			  $_SESSION['u'] = $un;
			  
?>
<div id="content">

        <div class="container-fluid">
            <div class="row-fluid">
		
               <div class="span9" id="content">
                     <div class="row-fluid">
					  
					  <div class="alert alert-info"><i class="icon-info-sign"></i></div>
					
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                               <!-- <div id="" class="muted pull-left"><i class="icon-user"></i>&nbsp;<font color="blue"></font>-->
  								
								<body bgcolor="#00FF66">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<form action="newpass.php" method="POST" name="myForm" onSubmit="return validateForm();" enctype="multipart/form-data">
<fieldset>

 <legend><h4>Change Password</h4></legend>
<table>

<tr>
<td> New Password</td><td><input type="password" name="newpass" placeholder="new password" size="33"></td></tr>
<tr>
<td> Confirm</td><td><input type="password" name="repeatnewpass" placeholder="confirm new password"size="33"></td></tr>
<tr>
<td><input type="submit" name="submit" value="save"/></td></tr>

</form>
</table><br>
	</fieldset>			
 

                            </div>
                        </div>
                        <!-- /block -->
                    </div>
				 </div>
       
	 <?php }else{  
	 
	 ?>
	 <script>
  alert('Incorrect username or pin');
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
</div>
<div id="footer">
	<p><?php require('footer.php');?></p>
	
</div>
</body>
</html>
	

                       