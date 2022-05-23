<?php

session_start();

?> 





<?php 

if(isset($_POST['submit']))
			  {
			
			  $newp=md5($_POST['newpass']);
			  $confirm=md5($_POST['repeatnewpass']);
			 
			  if( !$newp  || !$confirm)	
			echo"invalid password";
			  else if ($newp != $confirm)
			 echo"new-password doesn't match!";
			  else
			  {
			  //$newp=base64_encode("$newp");
			
			  //$newp=md5($newp);
			 // $fn = $_SESSION['id'];
			  $u=$_SESSION['username'];
			  require('config.php');
			 
			  $query=mysqli_query($ATA,"select * from account where username='$u';");
			  if($query && mysqli_num_rows($query)== true)
			  {
			  mysqli_query($ATA,"update account set password='$newp' where username='$u';");
			  echo"
			  <script>
			  alert('password changing success');
			  window.location='loginp1.php';
			  </script>";
			  break;
			  }
			  else{
			  echo"
			  <script>
			  alert('try again invalid combination of username and password');
			  window.location='loginp1.php'
			  </script>";
			 break;
			  }		 } 
mysqli_close($ATA);
}
?>
