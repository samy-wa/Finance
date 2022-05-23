<?php
require_once('function.php');
session_start();
?>
<!doctype html>
<html><br>

<head>
    <!-- <link rel="stylesheet" type=" text/css"  href="css/nav.css">
    <link href="css/admin_panel.css" rel="stylesheet" type="text/css" /> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Create Account </title>

    <!-- <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" /> -->
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    </link>
    <script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>

    <script type="text/javascript">
    function validateForm1() {
        var j = document.forms["abc"]["id"].value;
        var a = document.forms["abc"]["fullname"].value;
        var b = document.forms["abc"]["username"].value;
        var d = document.forms["abc"]["password"].value;
        var g = document.forms["abc"]["confirm"].value;
        var h = document.forms["abc"]["phone_number"].value;
        var i = document.forms["abc"]["account_type"].value;
        var j = document.forms["abc"]["birthday"].value;
        var str = document.abc.id.value;
        var valid = "0123456789";
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
            alert("you must enter account Id");
            return false;
        }
        if ((a == null || a == "")) {
            alert("you must enter  fullname");
            return false;
        }
        if ((b == null || b == "")) {
            alert("you must enter  username");
            return false;
        }
        if ((j == null || b == "")) {
            alert("you must enter  birthday");
            return false;
        }
        if ((d == null || d == "")) {
            alert("you must enter  password");
            return false;
        }

        if ((g == null || g == "")) {
            alert("you must confirm your password");
            return false;
        }
        if ((h == null || h == "")) {
            alert("you must enter phone number");
            return false;
        }
        if ((i == null || i == "")) {
            alert("you must enter account type");
            return false;
        }
        if (d != g) {
            alert("the password dosn't match");
            document.abc.confirm.value = "";
            document.abc.confirm.focus();
            return false;
        }

        if (h.length != 10) {
            alert("Invalid phone number length please enter phone number")
            return false;
        }
        if (h.charAt(0) != "0") {
            alert("mobile no, should in the format of 09");
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
    </script>
    <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
</head>

<body>
    <form action="addaccount-exec.php" method="post" name="abc" onSubmit="return validateForm1()">
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
        <!-- <div align="center">Account ID:<input name="id" type="text" id="id" placeholder="Input account ID"
                onKeyPress="return isNumberKey(event)" size="50"></div><br>
        <div align="center">Full name:<input name="fullname" type="text" id="fullname" placeholder="Fill Your Full Name"
                onKeyPress="return ValidateAlpha(event)" size="50"></div><br>
        <div align="center">User Name:<input name="username" type="text" id="username"
                placeholder="Please input user name" onKeyPress="return ValidateAlpha(event)" size="50"></div><br>
        <div align="center">birth day:<input name="birthday" type="text" id="birthday"
                placeholder="Please input birthday" size="50"></div><br>
        <div align="center">Password:<input name="password" type="password" id="password"
                placeholder="Please fill your password" size="50"></div><br>

        <div align="center">Phone No.:<input placeholder="Enter Valid phone number" type="text" name="phone_number"
                tabindex="phone_number" onKeyPress="return isNumberKey(event)" size="50" /></div><br>
        <div align="center">Account Type:<select name="account_type" id="account_type" required>
                <option value="">--Select--</option>
                <option>Administrator</option>
                <option>General Casher</option>
                <option>System Admin</option>
                <option>Finance Officer</option>
                <option>Auditor</option>
            </select></div><br> -->

        <div class="container">
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Account ID</label>
                    <input class="form-control" name="id" type="text" id="id" placeholder="Input account ID"
                        onKeyPress="return isNumberKey(event)" required>
                </div>
            </div>
            <div class="form-group mb-3">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Full name</label>
                    <input class="form-control" name="fullname" type="text" id="fullname"
                        placeholder="Fill Your Full Name" onKeyPress="return ValidateAlpha(event)" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">User Name</label>
                    <input class="form-control" name="username" type="text" id="username"
                        placeholder="Please input user name" onKeyPress="return ValidateAlpha(event)" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Birth day</label>
                    <input class="form-control" name="birthday" type="text" id="birthday"
                        placeholder="Please input birthday" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input class="form-control" name="password" type="password" id="password"
                        placeholder="Please fill your password" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone No</label>
                    <input class="form-control" placeholder="Enter Valid phone number" type="text" name="phone_number"
                        tabindex="phone_number" onKeyPress="return isNumberKey(event)" required>
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
                <button class="btn btn-success" type="submit" name="Input" value="Create">Create</button>
                <button class="btn btn-danger" name="Input" type="reset" value="Clear">Clear</button>
            </div>
</body>

<!-- <body bgcolor="gold">
    <div style="clear:both"></div>
    </center>
    <p style="text-align:justify; font-size:18px; color:blue;">
    <form action="addaccount-exec.php" method="post" name="abc" onSubmit="return validateForm1()">
        <td>
            <div style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:12px;">
            <--?php
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

            <div align="center">Account ID:<input name="id" type="text" id="id" placeholder="Input account ID"
                    onKeyPress="return isNumberKey(event)" size="50"></div><br>
            <div align="center">Full name:<input name="fullname" type="text" id="fullname"
                    placeholder="Fill Your Full Name" onKeyPress="return ValidateAlpha(event)" size="50"></div><br>
            <div align="center">User Name:<input name="username" type="text" id="username"
                    placeholder="Please input user name" onKeyPress="return ValidateAlpha(event)" size="50"></div><br>
            <div align="center">birth day:<input name="birthday" type="text" id="birthday"
                    placeholder="Please input birthday" size="50"></div><br>
            <div align="center">Password:<input name="password" type="password" id="password"
                    placeholder="Please fill your password" size="50"></div><br>

            <div align="center">Phone No.:<input placeholder="Enter Valid phone number" type="text" name="phone_number"
                    tabindex="phone_number" onKeyPress="return isNumberKey(event)" size="50" /></div><br>
            <div align="center">Account Type:<select name="account_type" id="account_type" required>
                    <option value="">--Select--</option>
                    <option>Administrator</option>
                    <option>General Casher</option>
                    <option>System Admin</option>
                    <option>Finance Officer</option>
                    <option>Auditor</option>
                </select></div><br>

            <div align="center">
                <input name="Input" type="submit" value="Create" />
                &nbsp;&nbsp;<input name="Input" type="reset" value="Clear" />
        </td>
        </div>
        </tr>
        </table>
        </fieldset>
    </form>
    </div>
</body> -->

</html>