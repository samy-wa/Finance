<?php
require_once('function.php');
session_start();
?>
<!doctype html>
<html><br>

<head>
    <!-- <link rel="stylesheet" type=" text/css"  href="css/nav.css"> -->
    <!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
    <!-- <link href="css/admin_panel.css" rel="stylesheet" type="text/css" /> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Prepare payroll </title>
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    </link>
    <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>

    <!-- <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" /> -->
    <script type="text/javascript">
    function validateForm1() {
        var j = document.forms["abc"]["id"].value;
        var a = document.forms["abc"]["expediturecuse"].value;
        var b = document.forms["abc"]["amount"].value;
        var n = document.forms["abc"]["date"].value;
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
            alert("you must enter Expenditure ID");
            return false;
        }
        if ((a == null || a == "")) {
            alert("please enter  Cause of expenditure");
            return false;
        }
        if ((b == null || b == "")) {
            alert("Please enter  Amount of expenditure");
            return false;
        }
        if ((n == null || n == "")) {
            alert("please enter date from combp box");
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
    <form action="addexpenditure.php" method="post" name="abc" onSubmit="return validateForm1()">
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
            <legend><b>Insert Expenditure Form</b></legend>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Expenditure Id</label>
                    <input class="form-control" name="id" type="text" id="id" onKeyPress="return isNumberKey(event)"
                        required>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Expenditure Cause</label>
                    <input class="form-control" name="expediturecuse" type="text" id="expediturecuse"
                        onKeyPress="return ValidateAlpha(event)">
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Amount</label>
                    <input class="form-control" name="amount" type="text" id="amount"
                        onKeyPress="return isNumberKey2(event)" required>
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
                    <input class="form-control" name="date" type="date" id="date" onKeyPress="return isNumberKey(event)"
                        required>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-success" name="Input2" type="submit" value="Create">Create</button>
                <button class="btn btn-danger" name="Input" type="reset" value="Clear">Clear</button>
            </div>
        </div>
    </form>
</body>

<!-- <body bgcolor="orange">
    <div style="clear:both"></div>
    </center>
    <p style="text-align:justify; font-size:18px; color:#003366;">
        <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
    <form action="addexpenditure.php" method="post" name="abc" onSubmit="return validateForm1()">
        <fieldset>
            <legend align="right" size="5"><b>Insert Expenditure Form</b></legend>
            <table width="235" border="0" cellpadding="0">
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
?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="83" valign="top">
                        <div align="right">Expenditure ID:</div>
                    </td>
                    <td width="146">
                        <div align="left">
                            <input name="id" type="text" id="id" onKeyPress="return isNumberKey(event)" size="80px">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="83" height="45" valign="top">
                        <div align="right">Expenditure Cause:</div>
                    </td>
                    <td width="146">
                        <div align="left"><input name="expediturecuse" type="text" id="expediturecuse"
                                onKeyPress="return ValidateAlpha(event)" size="80"></div>
                    </td>
                </tr>
                <tr>
                    <td height="45" valign="top">
                        <div align="right">Amount:</div>
                    </td>
                    <td>
                        <div align="left"><input name="amount" type="text" id="amount"
                                onKeyPress="return isNumberKey2(event)" size="80"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div align="right">Date of Payment:</div>
                    </td>
                    <td><input name="date" type="date" id="date" onKeyPress="return isNumberKey(event)" size="80px" />
                    </td>
                </tr>
                <tr>
                    <td height="69" valign="top">
                        <div align="right"></div>
                    </td>
                    <td>&nbsp;&nbsp;
                        <input name="Input" type="reset" value="Clear" />
                        <input name="Input2" type="submit" value="Create" />
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    </div>
</body> -->

</html>