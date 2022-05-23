<!doctype html>
<html><br>

<head>
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>

    <!-- <link rel="stylesheet" type=" text/css" href="css/nav.css"> -->
    <!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
    <!-- <link href="css/admin_panel.css" rel="stylesheet" type="text/css" /> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


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
</head>

<body>
    <div class="container card p-0" style="border-radius: 0 0 15px 15px !important;">
        <table class="table table-borderless">
            <thead class="section-header"
                style="background-color: #dedede !important; padding: 0.5em 1em !important; font-weight: 600 !important;">
                <tr>
                    <th scope="col">Paying ID</th>
                    <th scope="col">Account Num</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Allowance</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">OverTime</th>
                    <th scope="col">Punishment</th>
                    <th scope="col">Date Of Payment</th>
                </tr>
            </thead>
            <tbody>
                <form name="search" action="updateparollaction.php" method="post" onsubmit="return validateForm1()">
                    <div id="UILabel" align="center">
                        <h3>search payroll by paying id<h1>
                                <strong>Search:</strong> <input type="text" name="payingid" />
                                <input type="submit" name="submit" value="Search" />
                </form>
                </center>
                <?php include('config.php');
								$payingid = $_POST['payingid'];
								$result3 = mysqli_query($ATA,"SELECT * FROM payroll where payingid=$payingid");
								  $numrows=mysqli_num_rows($result3);
                       if (($numrows == 0))
                        {
                        echo "<p>Sorry,Entered payingid ".$_POST['payingid'] ." is not exist. Enter the correct  payingid.</p>";
		                 } 
						 else
								
								while($row3 = mysqli_fetch_array($result3))
								  {
								 echo '<tr>';
								 echo '<td>'.$row3['payingid'].'</td>';
							    echo '<td>'.$row3['accnum'].'</td>';
                                echo '<td>'.$row3['fname'].'</td>';
                                echo '<td>'.$row3['lname'].'</td>';
                                echo '<td>'.$row3['salary'].'</td>';
								echo '<td>'.$row3['allowance'].'</td>';
                                echo '<td>'.$row3['phone_number'].'</td>';
                                echo '<td>'.$row3['overtime'].'</td>';
                                echo '<td>'.$row3['punish'].'</td>';
                                echo '<td>'.$row3['date'].'</td>';
									echo '<td>';
									
																		 ?>
                <a rel="facebook" href="editpayroll.php?payingid=<?php echo $row3['payingid']; ?> & view=delete"
                    onClick="return confirm('Are you sure want to Edit??')"> <strong>Edit</strong></a>
                <?php

					echo "</td> </tr>";//$i++;
				} ?>
            </tbody>
        </table>
    </div>
</body>

<!-- <body bgcolor="orange">
    <div style="clear:both"></div>
    </center>
    <p style="text-align:justify; font-size:18px; color:#003366;">
        <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
    <h1>
        <p align="center">Update Payroll Information</p>
        </h2>
        <td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
            <table align='center' border="1" style="border-radius:15px" width="700px">
                <tr>
                <tr>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>Paying Id
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>Account No
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>First Name
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>Last Name
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>Salary
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>Allowence
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>Phone Number
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>Overtime
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>Punishment
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>Date
                    </th>
                </tr>
                </tr>
                </thead>
                <tbody>
                    <form name="search" action="updateparollaction.php" method="post" onsubmit="return validateForm1()">
                        <div id="UILabel" align="center">
                            <h3>search payroll by paying id<h1>
                                    <strong>Search:</strong> <input type="text" name="payingid" />
                                    <input type="submit" name="submit" value="Search" />
                    </form>
                    </center>
                    <--?php
			   include('config.php');
								$payingid = $_POST['payingid'];
								$result3 = mysqli_query($ATA,"SELECT * FROM payroll where payingid=$payingid");
								  $numrows=mysqli_num_rows($result3);
                       if (($numrows == 0))
                        {
                        echo "<p>Sorry,Entered payingid ".$_POST['payingid'] ." is not exist. Enter the correct  payingid.</p>";
		                 } 
						 else
								
								while($row3 = mysqli_fetch_array($result3))
								  {
								 echo '<tr>';
								 echo '<td>'.$row3['payingid'].'</td>';
							    echo '<td>'.$row3['accnum'].'</td>';
                                echo '<td>'.$row3['fname'].'</td>';
                                echo '<td>'.$row3['lname'].'</td>';
                                echo '<td>'.$row3['salary'].'</td>';
								   echo '<td>'.$row3['allowance'].'</td>';
                                echo '<td>'.$row3['phone_number'].'</td>';
                                echo '<td>'.$row3['overtime'].'</td>';
                                echo '<td>'.$row3['punish'].'</td>';
                                echo '<td>'.$row3['date'].'</td>';
									echo '<td>';
									
																		 ?>
                    <a rel="facebook" href="editpayroll.php?payingid=<-?php echo $row3['payingid']; ?> & view=delete"
                        onClick="return confirm('Are you sure want to Edit??')"> <strong>Edit</strong></a>
                    <-?php

echo "</td> </tr>";
	//$i++;
  }
 ?>
                </tbody>
            </table>
            </center>

            <br />
</body>

</html>
</body> -->

</html>