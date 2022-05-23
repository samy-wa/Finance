 <?php
require_once('function.php');
session_start();
?>
 <!doctype html>
 <html>

 <head>
     <link rel="stylesheet" type=" text/css" href="css/nav.css">
     <!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
     <!-- <link href="css/admin_panel.css" rel="stylesheet" type="text/css" /> -->
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>Prepare payroll </title>
     <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
     </link>
     <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>

     <script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>

     <!-- <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" /> -->
     <script type="text/javascript">
     function validateForm1() {
         var j = document.forms["abc"]["accnum"].value;
         var a = document.forms["abc"]["fname"].value;
         var b = document.forms["abc"]["lname"].value;
         var d = document.forms["abc"]["salary"].value;
         var g = document.forms["abc"]["allowance"].value;
         var h = document.forms["abc"]["phone_number"].value;
         var r = document.forms["abc"]["overtime"].value;
         var o = document.forms["abc"]["punish"].value;
         var n = document.forms["abc"]["date"].value;
         var str = document.abc.accnum.value;
         var valid = "0123456789";
         //comparing user input with the characters one by one
         for (i = 0; i < str.length; i++) {
             //charAt(i) returns the position of character at specific index(i)
             //indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
             if (valid.indexOf(str.charAt(i)) == -1) {
                 alert("Account id Cannot Contain String Values");
                 document.abc.accnum.value = "";
                 document.abc.accnum.focus();
                 return false;
             }
         }


         if ((j == null || j == "")) {
             alert("you must enter account Account Number");
             return false;
         }
         if (j.length != 13) {
             alert("Account number must be 13 digit")
             return false;
         }
         if ((a == null || a == "")) {
             alert("please enter  First Name");
             return false;
         }
         if ((b == null || b == "")) {
             alert("Please enter  Last name");
             return false;
         }
         if ((d == null || d == "")) {
             alert("fill salary of an employee");
             return false;
         }

         if ((g == null || g == "")) {
             alert("please enter allowance");
             return false;
         }
         if ((h == null || h == "")) {
             alert("you must enter phone number");
             return false;
         }
         if ((r == null || r == "")) {
             alert("fill overtime");
             return false;
         }
         if ((o == null || o == "")) {
             alert("fill punishement");
             return false;
         }
         if ((n == null || n == "")) {
             alert("please enter date from combp box");
             return false;
         }
         if (h.length != 10) {
             alert("Invalid phone number length please enter phone number")
             return false;
         }
         if (h.charAt(0) != "0") {
             alert("mobile no, should in the format of 09 ");
             return false;
         }
         var str = document.abc.phone_number.value;
         var valid = "0123456789";
         //comparing user input with the characters one by one
         for (i = 0; i < str.length; i++) {
             //charAt(i) returns the position of character at specific index(i)
             //indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
             if (valid.indexOf(str.charAt(i)) == -1) {
                 alert("Phone number Cannot Contain String Values");
                 document.abc.phone_number.value = "";
                 document.abc.phone_number.focus();
                 return false;
             }
         }
         $(document).ready(function() {

             //called when key is pressed in textbox
             $("#price").keypress(function(h) {
                 //if the letter is not digit then display error and don't type anything
                 if (h.which != 8 && h.which != 0 && (h.which < 48 || h.which > 57)) {
                     //display error message
                     $("#errmsg").html("Number Only").show().fadeOut("slow");
                     return false;
                 }
             });


         });
         return true;
     }
     </script>
     <script type="text/javascript">
     $(function() {
         $('.column').equalHeight();
     });
     </script>
     <script>
     function ValidateAlpha(evt) {
         var keyCode = (evt.which) ? evt.which : evt.keyCode
         if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 && keyCode != 8 &&
             keyCode != 9) {
             alert("	Only letters are allowed! ")
             return false;
         }
     }

     function isNumberKey(evt) {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)) {
             alert("Only number is allwed!")
             return false;

         }

     }

     function isNumberKey2(event) {
         var regex = new RegExp("^[0-9?=.*!@#$%^&*]+$");
         var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
         if (!regex.test(key)) {
             event.preventDefault();
             alert("Only number and special character is allwed!")
             return false;
         }
     }
     </script>
 </head>

 <body>
     <form action="addpayroll.php" method="post" name="abc" onSubmit="return validateForm1()">
         <?php
				if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
					echo '<ul class="err">';
					foreach($_SESSION['ERRMSG_ARR'] as $msg) {
						echo '<li>',$msg,'</li>'; 
					}
					echo '</ul>';
					unset($_SESSION['ERRMSG_ARR']);
				}
			?>
         <div class="container">
             <div class="form-group mb-3">
                 <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Account Number</label>
                     <input class="form-control" placeholder="Insert account Number" name="accnum" type="text"
                         id="accnum" onKeyPress="return isNumberKey(event)" required>
                 </div>
             </div>
             <div class="form-group mb-3">
                 <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">First Name</label>
                     <select class="form-select" aria-label="Default select example" name="fname">
                         <?php
						  $con=mysqli_connect("localhost","root","");
                     			mysqli_select_db($con,"financedb");
								$result = mysqli_query($con,"SELECT * FROM  employee");
								while($test = mysqli_fetch_array($result)){
							?>
                         <option>
                             <?php echo $test['fname'];?>
                         </option>
                         <?php }mysqli_close($con);?>
                     </select>
                 </div>
             </div>
             <div class="form-group mb-3">
                 <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                     <select class="form-select" aria-label="Default select example" name="lname">
                         <?php
						  $con=mysqli_connect("localhost","root","");
                     			mysqli_select_db($con,"financedb");
								$result = mysqli_query($con,"SELECT * FROM  employee");
								while($test = mysqli_fetch_array($result)){
							?>
                         <option>
                             <?php echo $test['lname'];?>
                         </option>
                         <?php }mysqli_close($con);?>
                     </select>
                 </div>
             </div>
             <div class="form-group mb-3">
                 <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Sallary</label>
                     <input class="form-control" name="salary" type="text" id="salary"
                         onKeyPress="return isNumberKey2(event)" required>
                 </div>
             </div>
             <div class="form-group mb-3">
                 <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Allowance</label>
                     <input class="form-control" name="allowance" type="text" id="allowance"
                         onKeyPress="return isNumberKey2(event)">
                 </div>
             </div>
             <div class="form-group mb-3">
                 <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Phone No</label>
                     <input class="form-control" placeholder="Enter Valid phone number" name="phone_number" type="text"
                         tabindex="phone_number" onKeyPress="return isNumberKey(event)" required>
                 </div>
             </div>
             <div class="form-group mb-3">
                 <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Over Time</label>
                     <input class="form-control" name="overtime" type="text" id="overtime"
                         onKeyPress="return isNumberKey2(event)" required>
                 </div>
             </div>
             <div class="form-group mb-3">
                 <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Punishment</label>
                     <input class="form-control" name="punish" type="text" id="punish"
                         onKeyPress="return isNumberKey2(event)" required>
                 </div>
             </div>
             <div class="form-group mb-3">
                 <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Date Of Payment</label>
                     <input class="form-control" name="date" type="date" id="date"
                         onKeyPress="return isNumberKey(event)" required>
                 </div>
             </div>
             <div class="form-group mb-3">
                 <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Account Type</label>
                     <select class="form-select" aria-label="Default select example" name="account_type"
                         id="account_type">
                         <option value="">--Select--</option>
                         <option>Administrator</option>
                         <option>General Casher</option>
                         <option>System Admin</option>
                         <option>Finance Officer</option>
                         <option>Auditor</option>
                     </select>
                 </div>
             </div>
             <div class="col-12">
                 <button class="btn btn-success" name="Input2" type="submit" value="Create">Create</button>
                 <button class="btn btn-danger" name="Input" type="reset" value="Clear">Clear</button>
             </div>
     </form>
 </body>

 <!-- <body bgcolor="orange">
     <div style="clear:both"></div>
     </center><?php //include("labtechnicianverticalbar.php"); ?>
     <p style="text-align:justify; font-size:18px; color:#003366;">
         <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
     <form action="addpayroll.php" method="post" name="abc" onSubmit="return validateForm1()">
         <fieldset>
             <legend align="right" size="5"><b>Insert_payroll Data</b></legend>
             <table width="100" border="0" cellpadding="0">
                 <tr>
                     <td>
                         <div style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:12px;"><--?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?></div>
                     </td>
                 </tr>
                 <tr>
                     <td width="83" valign="top">
                         <div align="right">Account Number:</div>
                     </td>
                     <td width="246">
                         <div align="left">
                             <input name="accnum" type="text" id="accnum" onKeyPress="return isNumberKey(event)"
                                 size="40px">
                         </div>
                     </td>
                 </tr>
                 <tr>
                     <div align="left">
                         <td height="45" valign="left">
                             <div align="left" for="fname">first name:</div><select name="fname" style="width: 173px;">
                                 <option> </option>
                     </div>
                     <--?php
						  $con=mysqli_connect("localhost","root","");
                     mysqli_select_db($con,"financedb");
						  		
								$result = mysqli_query($con,"SELECT * FROM  employee");
								while($test = mysqli_fetch_array($result)){
							?>

                     <option>
                         <--?php echo $test['fname'];?>
                     </option>

                     <--?php }
							mysqli_close($con);
							 ?>
                     </select></td> <br>
                 </tr>
                 <tr>
                 <tr>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <td height="45" valign="top"><label for="fname">last name:</label><select name="lname"
                             style="width: 173px;">
                             <option> </option>
                             <--?php
						  $con=mysqli_connect("localhost","root","");
                     mysqli_select_db($con,"financedb");
						  		
								$result = mysqli_query($con,"SELECT * FROM  employee");
								while($test = mysqli_fetch_array($result)){
							?>
                             <option>
                                 <--?php echo $test['lname'];?>
                             </option>
                             <-?php }
							mysqli_close($con);
							 ?>
                         </select> <br>
                 </tr>
                 <!--<td width="83" height="45" valign="top"><div align="right">First name:</div></td>
                <td width="146"><div align="left"><input name="fname" type="text" id="fname"onKeyPress="return ValidateAlpha(event)" size="80"></div></td>
              </tr>
			    <tr>
                <td width="83" height="41" valign="top"><div align="right">Last name:</div></td>
                <td width="146"><div align="left"><input name="lname" type="text" id="lname"onKeyPress="return ValidateAlpha(event)" size="80"></div></td>
              </tr>-->
 <!-- <tr>
     <td height="45" valign="top">
         <div align="right">Salary:</div>
     </td>
     <td>
         <div align="left"><input name="salary" type="text" id="salary" onKeyPress="return isNumberKey2(event)"
                 size="40"></div>
     </td>
 </tr>
 <tr>
     <td height="39" valign="top">
         <div align="right">Allowance:</div>
     </td>
     <td>
         <div align="left"><input name="allowance" type="text" id="allowance" onKeyPress="return isNumberKey2(event)"
                 size="40"></div>
     </td>
 </tr>
 <tr>

     <td height="45">
         <div align="right">Phone No.:</div>
     </td>
     <td><input name="phone_number" type="text" tabindex="phone_number" onKeyPress="return isNumberKey(event)"
             size="40" /></td>
 </tr>
 <tr>

     <td height="42">
         <div align="right">overtime:</div>
     </td>
     <td>
         <div align="left"><input name="overtime" type="text" id="overtime" onKeyPress="return isNumberKey2(event)"
                 size="40px"></div>
     </td>
 </tr>
 <tr>
     <td height="30">
         <div align="right">punishment:</div>
     </td>
     <td><input name="punish" type="text" id="punish" onKeyPress="return isNumberKey2(event)" size="40px" /></td>
 </tr>
 <tr>
     <td>
         <div align="right">Date of Payment:</div>
     </td>
     <td><input name="date" type="date" id="date" onKeyPress="return isNumberKey(event)" size="40px" />
     </td>
 </tr>
 <tr>
     <td height="69" valign="top">
         <div align="right"></div>
     </td>
     <td>&nbsp;&nbsp;
         <input name="Input2" type="submit" value="Create" />
         <input name="Input" type="reset" value="Clear" />
     </td>

 </tr>
 </table>
 </fieldset>
 </form>
 </div>
 </body> -->

 </html>