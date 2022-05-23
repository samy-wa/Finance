<?php
require_once('function.php');
session_start();
?>
<!doctype html>
<html>

<head>
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>

    <!-- <link rel="stylesheet" type=" text/css" href="css/nav.css"> -->
    <!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
    <!-- <link href="css/admin_panel.css" rel="stylesheet" type="text/css" /> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Edit payroll</title>

    <!-- <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" /> -->
    <!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
    <script src="js/hideshow.js" type="text/javascript"></script>
    <!--<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>-->
    <!--<script type="text/javascript" src="js/jquery.equalHeight.js"></script>-->
    <script type="text/javascript">
    function validateForm1() {
        var j = document.forms["abc"]["payingid"].value;
        var a = document.forms["abc"]["accnum"].value;
        var b = document.forms["abc"]["materialtype"].value;
        var d = document.forms["abc"]["materialcost"].value;
        var g = document.forms["abc"]["quantity"].value;
        var h = document.forms["abc"]["product"].value;
        var l = document.forms["abc"]["date"].value;
        var str = document.abc.payingid.value;
        var valid = "0123456789";
        //comparing user input with the characters one by one
        for (i = 0; i < str.length; i++) {
            //charAt(i) returns the position of character at specific index(i)
            //indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
            if (valid.indexOf(str.charAt(i)) == -1) {
                alert("Account id Cannot Contain String Values");
                document.abc.payingid.value = "";
                document.abc.payingid.focus();
                return false;
            }
        }


        if ((j == null || j == "")) {
            alert("you must enter payingid ");
            return false;
        }
        if ((a == null || a == "")) {
            alert("please enter  material name");
            return false;
        }
        if (a.length != 13) {
            alert("Account number must be 13 digit")
            return false;
        }
        if ((b == null || b == "")) {
            alert("you must enter  type of material");
            return false;
        }
        if ((d == null || d == "")) {
            alert("you must enter  copt of material");
            return false;
        }

        if ((g == null || g == "")) {
            alert("please fill number of materials");
            return false;
        }
        if ((h == null || h == "")) {
            alert("please enter the material that can be syntesize");
            return false;
        }
        if ((l == null || l == "")) {
            alert("please select date from cobo box");
            return false;
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
            alert("	Only Characters are allowed! ")
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



    $(document).ready(function() {
        $(".tablesorter").tablesorter();
    });
    $(document).ready(function() {

        //When page loads...
        $(".tab_content").hide(); //Hide all content
        $("ul.tabs li:first").addClass("active").show(); //Activate first tab
        $(".tab_content:first").show(); //Show first tab content

        //On Click Event
        $("ul.tabs li").click(function() {

            $("ul.tabs li").removeClass("active"); //Remove any "active" class
            $(this).addClass("active"); //Add "active" class to selected tab
            $(".tab_content").hide(); //Hide all tab content

            var activeTab = $(this).find("a").attr(
                "href"); //Find the href attribute value to identify the active tab + content
            $(activeTab).fadeIn(); //Fade in the active ID content
            return false;
        });

    });
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
            alert("	Only Characters are allowed! ")
            return false;
        }
    }

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            alert("Only  Number is allwed!")
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
    <!-- <form id="form1" name="abc" method="post" action="editpayrollaction.php" onSubmit="return validateForm1()"> -->
    <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
				echo '<ul class="err">';
				foreach($_SESSION['ERRMSG_ARR'] as $msg) {
					echo '<li>',$msg,'</li>'; 
				}
				echo '</ul>';
				unset($_SESSION['ERRMSG_ARR']);
			}
//include('allmembers.php');
	if (isset($_GET['payingid']))
	{
	?>
    <form action="editpayrollaction.php" method="post" name="abc" onsubmit="return validateForm1()">
        <div class="container">
            <div class="form-group mb-3">
                <img width=200 height=180 alt='Unable to View' src='" . $row1["image"] . "'>
            </div>
            <?php   include('config.php');
        		$payingid=$_GET['payingid'];
        		$result = mysqli_query($ATA,"SELECT * FROM payroll WHERE payingid = $payingid");
			
        		while($row = mysqli_fetch_array($result))
        		{
			?>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Account Id</label>
                    <input class="form-control" type="text" name="payingid" value="<?php echo $row['payingid'];?>"
                        onKeyPress="return isNumberKey(event)">
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Account Number</label>
                    <input class="form-control" type="text" name="accnum" value="<?php echo $row['accnum'];?>"
                        onKeyPress="return isNumberKey(event)">
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                    <input class="form-control" type="text" name="fname" value="<?php echo $row['fname'];?>"
                        onKeyPress="return ValidateAlpha(event)">
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                    <input class="form-control" type="text" name="lname" value="<?php echo $row['lname'];?>"
                        onKeyPress="return ValidateAlpha(event)">
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Salary</label>
                    <input class="form-control" type="text" name="salary" value="<?php echo $row['salary'];?>"
                        onKeyPress="return isNumberKey2(event)">
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Allowance</label>
                    <input class="form-control" type="text" name="allowance" value="<?php echo $row['allowance'];?>"
                        onKeyPress="return isNumberKey2(event)">
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                    <input class="form-control" type="text" name="phone_number"
                        value="<?php echo $row['phone_number'];?>" onKeyPress="return isNumberKey2(event)">
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Over Time</label>
                    <input class="form-control" type="text" name="overtime" value="<?php echo $row['overtime'];?>"
                        onKeyPress="return isNumberKey2(event)">
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Punishment</label>
                    <input class="form-control" type="text" name="punish" value="<?php echo $row['punish'];?>"
                        onKeyPress="return isNumberKey2(event)">
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date</label>
                    <input class="form-control" type="date" name="date" value="<?php echo $row['date'];?>"
                        onKeyPress="return isNumberKey(event)">
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-success" name="" type="submit" value="Update">Update</button>
                <!-- <button class="btn btn-danger" name="Clear" type="Reset" value="Clear">Clear</button> -->
            </div>
            <?php }?>
        </div>
    </form>
    <?php }
	?>
</body>

<!-- <body bgcolor=" yellow">
    <div style="clear:both"></div>
    </center>
    <p style="text-align:justify; font-size:18px; color:#003366;">
        <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>

    <form id="form1" name="abc" method="post" action="editpayrollaction.php" onSubmit="return validateForm1()">

        <div style="float:left;"><strong>Update payroll information</strong></div>
        <div
            style="float:right; margin-right:3px; background-color:#cccccc; width:25px; text-align:center; height:22px;">
            <a href="#.php"></a>
        </div>


        </div>
        <table width="368" align="center">
            <tr>
                <td colspan="2">
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
                <td>
                    <--?php
//include('allmembers.php');
				  if (isset($_GET['payingid']))
	{
	
 echo '<form action="editpayrollaction.php" method="post" name="abc" onsubmit="return validateForm1()">';
	//echo "<img width=200 height=180 alt='Unable to View' src='" . $row1["image"] . "'>"
			include('config.php');
			$payingid=$_GET['payingid'];
			$result = mysqli_query($ATA,"SELECT * FROM payroll WHERE payingid = $payingid");

			while($row = mysqli_fetch_array($result))
  			{
			echo '<br> <strong>Account Id:</strong>'.'<input type="text" name="payingid" value="'. $row['payingid'] .'" onKeyPress="return isNumberKey(event)">'; 
			echo '<br>';
			echo '<br> <strong>Account Id:</strong>'.'<input type="text" name="accnum" value="'. $row['accnum'] .'" onKeyPress="return isNumberKey(event)">'; 
			echo '<br>';
			echo '<br> <strong>First Name:</strong>'.'<input type="text" name="fname" value="'. $row['fname'] .'" onKeyPress="return ValidateAlpha(event)">'; 
			echo '<br>';
  			echo '<br> <strong>Last Name:</strong> '.'<input type="text" name="lname" value="'. $row['lname'] .'" onKeyPress="return ValidateAlpha(event)">'; 
			   echo '<br>';
			  echo '<br> <strong>&nbsp;&nbsp&nbsp;&nbsp &nbsp;&nbspSalary:</strong> '.'<input type="text" name="salary" value="'. $row['salary'] .'" onKeyPress="return isNumberKey2(event)">'; 
			   echo '<br>';
			   echo '<br> <strong>Allowance :</strong> '.'<input type="text" name="allowance" value="'. $row['allowance'] .'" onKeyPress="return isNumberKey2(event)">'; 
			   echo '<br>';
			  echo '<br><strong>Phone num: </strong>'.'<input type="text" name="phone_number" value="'. $row['phone_number'] .'" onKeyPress="return isNumberKey2(event)">';
			   echo '<br>';
			   echo '<br> <strong>&nbsp;&nbsp&nbsp;  Overtime: '.'<input type="text" name="overtime" value="'. $row['overtime'] .'" onKeyPress="return isNumberKey2(event)">';
			   echo '<br>';
			   echo '<br> <strong>Punishmet:</strong> '.'<input type="text" name="punish" value="'. $row['punish'] .'" onKeyPress="return isNumberKey2(event)">'; 
			   echo '<br>';
			  echo '<br> <strong>Date : </strong>'.'<input type="date" name="date" value="'. $row['date'] .'" onKeyPress="return isNumberKey(event)">';
			   echo '<br>';
			   echo '<br>';
			   echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
			  echo '<br> <input name="" type="submit" value="Update" />';
  			}
	echo '</form>';
			}
			?>
                </td>
            </tr>
        </table>
    </form>
    </center>

    <br />
</body>

</html>
</body> -->

</html>