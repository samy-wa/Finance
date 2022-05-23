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
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" /> -->
    <script type="text/javascript">
    function validateForm1() {
        var j = document.forms["abc"]["payingid"].value;
        var str = document.abc.payingid.value;
        var valid = "0123456789";
        //comparing user input with the characters one by one
        if ((j == null || j == "")) {
            alert("please fill purchase ID");
            return false;
        }
        if ((a == null || a == "")) {
            alert("please select ending date");
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
    </script>
</head>

<body>
    <form action="updateparollaction.php" method="post" name="abc" onSubmit="return validateForm1()"><?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
        <h4 class="d-flex justify-content-center">search account by account ID<h4>

                <div class="d-flex col-5 mx-auto form-group mb-3">
                    <div class="col-6 m-3">
                        <input class="form-control" type="text" name="payingid" onKeyPress="return isNumberKey(event)"
                            required>
                    </div>
                    <div class="col-6 m-3" id="searchWithDate">
                        <button class="btn btn-outline-success" type="submit" name="submit" value="Search"><i
                                class="fa fa-search"></i> Search</button>
                    </div>
                </div>
    </form>
</body>

</html>