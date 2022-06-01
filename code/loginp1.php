<?php
require_once('function.php');
//session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>LOGIN PAGE</title>
    <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
    <script type="text/javascript">
    function validateForm() {

        var y = document.forms["login1"]["username"].value;
        var a = document.forms["login1"]["password"].value;
        if (document.loginp1.position.value == "-1") {
            alert("Please select your account type!");
            document.login1.position.focus();
            return false;
        }
        if ((y == null || y == "")) {
            alert("you must enter your username");
            return false;
        }
        if ((a == null || a == "")) {
            alert("you must enter your password");
            return false;
        }
        return true
    }
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

<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
    <form id="form1" name="login1" method="post" action="login1.php">
        <div class="container">
            <img src="images/user1.jpg" align="CENTER" width="300" height="100">
            <div class="form-group mb-3">
                <label>
                    To
                </label>
                <select class="form-select" name="account_type" placeholder="account_type" required
                    aria-label="Default select example">
                    <option value="" selected="selected">--Select--</option>
                    <option value="Administrator">Administrator</option>
                    <option value="System Admin">System Admin</option>
                    <option value="General Casher">General Casher</option>
                    <option value="Finance Officer">finance officer</option>
                    <option value="Auditor">Auditor</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">UserName</label>
                    <input class="form-control" name="username" type=TEXT onKeyPress="return ValidateAlpha(event)"
                        required>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">UserName</label>
                    <input class="form-control" name="password" type=PASSWORD required>
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-success" name="Submit" type="submit" value="Login">Login</button>
                <button class="btn btn-danger" name="Clear" type="Reset" value="Clear">Clear</button>
            </div>
            <div class="col-12">
                <a href="Adminfogot.php">
                    <p font size="20px"> Forgot </P>
                </a>
            </div>
        </div>
    </form>
</body>
<!-- 
<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">

    <body>
        <div width="200" align="center">
            </head>

            <MARQUEE behavior="scroll" direction="left" width="650" font-size="100px" scrollamount="12">
                <p> &nbsp;WELCOME TO SAMARA UNIVERSITY FINANCIAL MANAGMENT SYSTEM LOGIN PAGE</p>
            </MARQUEE>
            <div id="log">
                <form action="loginp.php" method="post"><br>
                    <center>
                        <div style="width:840px;height:480px;border:50px ridge 
yellowgreen;  border-color: #dd43125 #00430dd; alignment=" center">

                            <body bgcolor="#red">

                                <body link="#0066FF" vlink="#6633CC" bgcolor="#FFFFCC" background="images/image001.jpg">

                                    <form>
                                    </form>
                                    <form>
                                        <form>
                                        </form>
                                        <script src="js/validateaccount.js" language="javascript"
                                            type="text/javascript"></script>


                                        <br><br><br><br>
                                        <center>
                                            <form id="form1" name="login1" method="post" action="login1.php"
                                                onSubmit="return validateForm()">

                                                <img src="images/user1.jpg" align="CENTER" width="300" height="100">
                                                <div
                                                    style="background-color:#MELKAMU; font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:10px;">


                                                </div><br>

                                                <DIV ALIGN=CENTER>
                                                    <DIV ALIGN=down>
                                                        <div id="log">
                                                            <B>
                                                                <font color="#9555555" SIZE="5px"> Login as<B>
                                                                        <select size="1" name="account_type"
                                                                            placeholder="account_type" required>
                                                                            <option value="">--Select--</option>
                                                                            <OPTION>System Admin</option>
                                                                            <OPTION>Administrator</option>
                                                                            <OPTION>General Casher</option>
                                                                            <OPTION>Finance Officer</option>
                                                                            <OPTION>Auditor</option>
                                                                        </SELECT></font>
                                                        </DIV><br />

                                                        <font color="#9555555" SIZE="5px"
                                                            placeholder="please enter user name"><B>User Name:</B>
                                                        </font>
                                                        <INPUT NAME="username" TYPE=TEXT
                                                            onKeyPress="return ValidateAlpha(event)" required /><BR><BR>
                                                        <font color="#9555555" SIZE="5px"
                                                            placeholder="please enter your password"><B>Password:</B>
                                                        </font>
                                                        <INPUT NAME="password" TYPE=PASSWORD required>



                                                        <pre>            <INPUT NAME="Submit" TYPE=SUBMIT VALUE=Login> <INPUT  NAME="Reset" TYPE=RESET VALUE=Clear><h3><a href="Adminfogot.php"><p font size="20px"> Forgot </P></a></h3>

		 </pre>


                                                    </DIV>
                                            </form>
                                        </center>

                                </body>

                        </div> -->

</html>