<?php
require_once('function.php');
session_start();
?>
<!doctype html>
<html>

<head>
    <!-- <link rel="stylesheet" type=" text/css" href="css/nav.css"> -->
    <!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
    <!-- <link href="css/admin_panel.css" rel="stylesheet" type="text/css" /> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Register new employee </title>
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    </link>
    <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>

    <script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>

    <!-- <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" /> -->
    <script type="text/javascript">
    function validateForm1() {
        var j = document.forms["abc"]["id"].value;
        var a = document.forms["abc"]["fname"].value;
        var b = document.forms["abc"]["lname"].value;
        var d = document.forms["abc"]["proffession"].value;
        var g = document.forms["abc"]["email"].value;
        var h = document.forms["abc"]["phone"].value;
        var n = document.forms["abc"]["qualification"].value;
        var f = document.forms["abc"]["date"].value;
        var str = document.abc.id.value;
        var valid = "0123456789";
        //comparing user input with the characters one by one
        for (i = 0; i < str.length; i++) {
            //charAt(i) returns the position of character at specific index(i)
            //indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
            if (valid.indexOf(str.charAt(i)) == -1) {
                alert("Account id Cannot Contain String Values");
                document.abc.id.value = "";
                document.abc.id.focus();
                return false;
            }
        }


        if ((j == null || j == "")) {
            alert("you must enter id ");
            return false;
        }
        if ((a == null || a == "")) {
            alert("you must enter  first name");
            return false;
        }
        if ((b == null || b == "")) {
            alert("you must enter  last name");
            return false;
        }
        if ((d == null || d == "")) {
            alert("you must enter  your profession");
            return false;
        }
        /*if( document.abc.email.value == "" )
          {
            alert( "User's email is empity!" );
            document.abc.email.focus() ;
            return false;
          }
            var umailval=document.abc.email.value;
          var indexat=umailval.indexOf('@');
          var indexdot=umailval.indexOf('.');
          

          if(indexat==0||indexdot==0||indexat==umailval.length-1||indexdot==umailval.length-1||indexdot-indexat<2)
          {
          alert("Invalid email");
          document.abc.email.focus();
            return false
          }
            /*
            
          if ((g==null || g==""))
            {
            alert("please insert your email address");
            return false;
          }
            var umailval=document.abc.email.value;
            var indexat=umailval.indexOf('@');
            var indexdot=umailval.indexOf('.');
            

          if(indexat==0||indexdot==0||indexat==umailval.length-1||indexdot==umailval.length-1||indexdot-indexat<2)
          {
          alert("Invalid Email");
          document.abc.email.focus();
            return false
          }*/
        if ((h == null || h == "")) {
            alert("you must enter phone number");
            return false;
        }
        if ((n == null || n == "")) {
            alert("Please insert your status");
            return false;
        }
        if ((f == null || f == "")) {
            alert("Please insert date");
            return false;
        }

        /*if(d!=g){
        alert("the password dosn't match");
        document.abc.confirm.value="";
        document.abc.confirm.focus();
        return false;
        }*/
        if (h.length != 10) {
            alert("Invalid phone number length please enter phone number")
            return false;
        }
        if (h.charAt(0) != "0") {
            alert("mobile no, should in the format of 09 ");
            return false;
        }
        var str = document.abc.phone.value;
        var valid = "0123456789";
        //comparing user input with the characters one by one
        for (i = 0; i < str.length; i++) {
            //charAt(i) returns the position of character at specific index(i)
            //indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
            if (valid.indexOf(str.charAt(i)) == -1) {
                alert("Phone number Cannot Contain String Values");
                document.abc.phone.value = "";
                document.abc.phone.focus();
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
    /*  function ValidateEmail(mail)   
      {  
       if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))  
        {  
          return (true)  
        }  
          alert("You have entered an invalid email address!")  
          return (false)  
      }  
      function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      }

      function validate() {
        $("#abc").text("");
        var email = $("#email").val();
        if (validateEmail(email)) {
          $("#abc").text(email + " is valid :)");
          $("#abc").css("color", "green");
        } else {
          $("#abc").text(email + " is not valid :(");
          $("#abc").css("color", "red");
        }
        return false;
      }

      $("validateForm1").bind("submit", validate);*/
    </script>
    <script language="javascript">
    function checkEmail() {

        var email = document.getElementById('email');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(email.value)) {
            alert('Please provide a valid email address');
            email.focus;
            return false;
        }
    }
    </script>
</head>

<body>
    <form action="addemployee.php" method="post" name="abc" onSubmit="return validateForm1()"><?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?><div class="container">
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Employe Id</label>
                    <input class="form-control" placeholder="Insert Employe Id" name="id" type="number" id="id"
                        onKeyPress="return isNumberKey(event)" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                    <input class="form-control" name="fname" type="text" id="fname"
                        onKeyPress="return ValidateAlpha(event)" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                    <input class="form-control" name="lname" type="text" id="lname"
                        onKeyPress="return ValidateAlpha(event)">
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Gender</label>
                    <select class="form-select" aria-label="Default select example" name="Sex" placeholder="Sex"
                        required>
                        <option value="">--Select--</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Profession</label>
                    <input class="form-control" placeholder="Insert Profession" name="proffession" type="text"
                        id="proffession" onKeyPress="return ValidateAlpha(event)" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                    <input class="form-control" type="text" name="phone" type="phone" id="phone"
                        onKeyPress="return isNumberKey(event)" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input class="form-control" type="Email" name="email" type="e-mail" id="email"
                        onKeyPress="return  ValidateEmail(event)" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Qualification </label>
                    <input class="form-control" type="qualification" name="qualification" type="text" id="qualification"
                        onKeyPress="return ValidateAlpha(event)" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date</label>
                    <input class="form-control" type="date" name="date" type="date" id="date"
                        onKeyPress="return ValidateAlpha(event)" required>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-success" name="Input" type="submit" value="Record">Create</button>
                <button class="btn btn-danger" name="Input" type="reset" value="Clear">Clear</button>
            </div>
    </form>
</body>

<!-- <body bgcolor="white-blue">
    <div style="clear:both"></div>
    </center>
    <p style="text-align:justify; font-size:18px; color:#003366;">
        <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
    <form action="addemployee.php" method="post" name="abc" onSubmit="return validateForm1()">
        <fieldset>
            <legend align="right" size="5"><b>RegisterEmployee </b></legend>
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
                    <td width="100" valign="top">
                        <div align="right">Employee ID:</div>
                    </td>
                    <td width="300">
                        <div align="left"><input name="id" type="number" id="id" onKeyPress="return isNumberKey(event)">
                        </div>
                    </td>
                </tr><br>
                <tr>
                    <td width="100" valign="top">
                        <div align="right"> First Name:</div>
                    </td>
                    <td width="300">
                        <div align="left"><input name="fname" type="text" id="fname"
                                onKeyPress="return ValidateAlpha(event)"></div>
                    </td>
                </tr><br>
                <tr>
                    <td valign="top">
                        <div align="right">Last Name:</div>
                    </td>
                    <td>
                        <div align="left"><input name="lname" type="text" id="lname"
                                onKeyPress="return ValidateAlpha(event)"></div>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td height="24"><b>
                            <label class="contact"></label>
                            <strong>Sex:</strong></b></td>
                    <td><select size="1" name="Sex" placeholder="Sex" required>
                            <option value="" selected="selected">--Select--</option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select></td>
                </tr>

                <td>
                    <div align="right">Proffession:</div>
                </td>
                <td><input type="text" name="proffession" type="text" id="proffession"
                        onKeyPress="return ValidateAlpha(event)" /></td>
                </tr>
                <tr>

                    <td>
                        <div align="right">Phone Number:</div>
                    </td>
                    <td><input type="text" name="phone" type="phone" id="phone"
                            onKeyPress="return isNumberKey(event)" /></td>
                </tr>
                <tr>
                    <h2 id='result'></h2>
                    <td>
                        <div align="right">Email Address:</div>
                    </td>
                    <td><input type="text" name="email" type="e-mail" id="email"
                            onKeyPress="return  ValidateEmail(event)" /></td>
                </tr>
                <tr>
                    <td>
                        <div align="right">Qualification:</div>
                    </td>
                    <td><input type="qualification" name="qualification" type="text" id="qualification"
                            onKeyPress="return ValidateAlpha(event)" /></td>
                </tr>
                <tr>
                    <td>
                        <div align="right">Date:</div>
                    </td>
                    <td><input type="date" name="date" type="date" id="date" onKeyPress="return ValidateAlpha(event)" />
                    </td>
                </tr>
                </tr>
                <tr>
                    <td valign="top">
                        <div align="right"></div>
                    </td>
                    <td><input name="Input" type="submit" value="Record" />
                        &nbsp;&nbsp;<input name="Input" type="reset" value="Clear" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
    </div> -->

</html>