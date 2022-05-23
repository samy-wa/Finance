<html>
	<head>
<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" ></link>
<script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>
</head>
<body>
<h2><br>CHANGE YOUR PASSWORD HERE!</h2><br>
<form action="" method="POST" name="myForm" onSubmit="return validateForm();" enctype="multipart/form-data">
<div class="container">
<div class="form-group mb-3">
	<div class="mb-3">
	  <label for="exampleFormControlInput1" class="form-label">User Name</label>
	  <input  class="form-control"  type="usename" name="username" placeholder="user name" required>
	</div>
</div>
<div class="form-group mb-3">
	
	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">Old Password</label>
		<input  class="form-control"  type="password" name="password" placeholder="old password" required>
	</div>
</div>
<div class="form-group mb-3">
	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">New Password</label>
		<input  class="form-control"  type="password" name="newpass" placeholder="new password" required>
	</div>
</div>
<div class="form-group mb-3">
	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">Confirm New Password</label>
		<input  class="form-control"  type="password" name="repeatnewpass" placeholder="confirm new password" required>
	</div>
</div>
<div class="col-12">
<button class="btn btn-success" type="submit" name="submit" value="save">Send</button>
<button class="btn btn-danger" name="Clear" type="Reset" value="Clear">Clear</button>
</div>
<!-- 
<fieldset background="yellow">
<legend><h1>Change Password</h1></legend>

<table align="center">
 <tr>
<td><h3>User Name</h3></td> <td>&nbsp;&nbsp;<input type="usename" name="username" placeholder="user name" size="33"></td></tr>
<tr>
<td> <h3>Old Password</h3></td><td>&nbsp;&nbsp;<input type="password" name="password" placeholder="old password" size="33"></td></tr>
<tr>
<td><h3> New Password</h3></td><td>&nbsp;&nbsp;<input type="password" name="newpass" placeholder="new password" size="33"></td></tr>
<tr>
<td><h3> Confirm New</h3></td><td>&nbsp;&nbsp;<input type="password" name="repeatnewpass" placeholder="confirm new password"size="33"></td></tr>
<tr>
<td><input type="submit" name="submit" value="save"/></td></tr>
</table><br>
</fieldset>	
</center> -->
</form>

  <?php
//session_start();
if(isset($_POST['submit']))
			  {
			  $oldu=$_POST['username'];
			  $oldp=$_POST['password'];
			  $newp=$_POST['newpass'];
			  $confirm=$_POST['repeatnewpass'];
			 
			  if(!$oldu || !$oldp || !$newp  || !$confirm)	
			echo"invalid password";
			  else if ($newp != $confirm)
			 echo"new-password doesn't match!";
			  else
			  {
			  $oldp=md5($oldp);
			  $newp=md5($newp);
			  
			$ATA=mysqli_connect("localhost","root","") or die("Cannot Connect to the database!");
	 mysqli_select_db($ATA,"financedb") or die ("Cannot select the database!");
			  $query=mysqli_query($ATA,"select * from account where username='$oldu' and password='$oldp'");
			  if($query && mysqli_num_rows($query)== 1)
			  {
			  mysqli_query($ATA,"update account set password='$newp' where username='$oldu' and password='$oldp'");
			  echo ' password changed successfully!';
			  }
			  else
			  echo "Invalid combination of old username and old password ." .mysql_error();	
				  
			  }		 
}
?>

