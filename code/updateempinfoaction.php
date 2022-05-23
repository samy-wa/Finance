<!doctype html>
<html>

<head>
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>

    <!-- <link rel="stylesheet" type=" text/css"  href="css/nav.css"> -->
    <!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
    <!-- <link href="css/admin_panel.css" rel="stylesheet" type="text/css" /> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Update Employee Info </title>

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
                    <th scope="col">Employee ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Proffession</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Qualification</th>
                    <th scope="col">Date </th>
                </tr>
            </thead>
            <tbody>
                <form action="updateempinfoaction.php" method="post" name="abc" onSubmit="return validateForm1()">
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
                    <div class="d-flex col-5 mx-auto form-group mb-3">
                        <div class="col-6 m-3">
                            <input class="form-control" type="text" name="id" onKeyPress="return isNumberKey(event)"
                                required>
                        </div>
                        <div class="col-6 m-3" id="searchEmployee">
                            <button class="btn btn-outline-success" type="submit" name="submit" value="Search"><i
                                    class="fa fa-search"></i> Search</button>
                        </div>
                    </div>
                </form>
                <?php include('config.php');
								$id = $_POST['id'];
								if($id){
								
								$result3 = mysqli_query($ATA,"SELECT * FROM employee where id=$id");
								 $numrows=mysqli_num_rows($result3);
                       if (($numrows == 0))
                        {
                        echo "<p>Sorry,Entered employeeid ".$_POST['id'] ." is not exist. Enter the correct  employeeid.</p>";
		                 } 
						 else
								
								while($row3 = mysqli_fetch_array($result3))
								  {
								 echo '<tr>';
								 
							    echo '<td>'.$row3['id'].'</td>';
                                echo '<td>'.$row3['fname'].'</td>';
                                echo '<td>'.$row3['lname'].'</td>';
                                echo '<td>'.$row3['Sex'].'</td>';
								   echo '<td>'.$row3['proffession'].'</td>';
                                echo '<td>'.$row3['phone'].'</td>';
                                echo '<td>'.$row3['email'].'</td>';
                                echo '<td>'.$row3['qualification'].'</td>';
                                echo '<td>'.$row3['date'].'</td>';
									echo '<td>';
									 ?>
                <a rel="facebook" href="editempinfo.php?id=<?php echo $row3['id']; ?> & view=delete"
                    onClick="return confirm('Are you sure want to Edit??')"> <strong>Edit</strong></a>
                <?php echo "</td> </tr>";
								//$i++;
							 }
							 }
							 else
							 echo"";
							?>
            </tbody>
        </table>
</body>

<!-- <body bgcolor="white-brown">
    <div style="clear:both"></div>
    </center>
    <p style="text-align:justify; font-size:18px; color:#003366;">
        <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
    <h1>
        <p align="center">Update Emplyee Information</p>
        </h2>
        <td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
            <table align='center' border="1" style="border-radius:15px" width="700px">
                <tr>
                <tr>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>Employee ID
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>First Name
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>Last Name
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>sex
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>Proffession
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>Phone Number
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>E_mail Adress
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>Qualification
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='1'>Date
                    </th>
                </tr>
                </tr>
                </thead>
                <tbody>
                    <form name="search" action="updateempinfoaction.php" method="post"
                        onsubmit="return validateForm1()">
                        <div id="UILabel" align="center">
                            <h3>search emplloyee info by employee ID<h1>
                                    <strong>Search:</strong> <input type="text" name="id" />
                                    <input type="submit" name="submit" value="Search" />
                    </form>
                    </center>
                    <--?php include('config.php'); $id=$_POST['id']; if($id){ $result3=mysqli_query($ATA,"SELECT * FROM
                        employee where id=$id"); $numrows=mysqli_num_rows($result3); if (($numrows==0)) {
                        echo "<p>Sorry,Entered employeeid " .$_POST['id'] ." is not exist. Enter the correct
                        employeeid.</p>";
                        }
                        else

                        while($row3 = mysqli_fetch_array($result3))
                        {
                        echo '<tr>';

                            echo '<td>'.$row3['id'].'</td>';
                            echo '<td>'.$row3['fname'].'</td>';
                            echo '<td>'.$row3['lname'].'</td>';
                            echo '<td>'.$row3['Sex'].'</td>';
                            echo '<td>'.$row3['proffession'].'</td>';
                            echo '<td>'.$row3['phone'].'</td>';
                            echo '<td>'.$row3['email'].'</td>';
                            echo '<td>'.$row3['qualification'].'</td>';
                            echo '<td>'.$row3['date'].'</td>';
                            echo '<td>';

                                ?>
                                <a rel="facebook" href="editempinfo.php?id=<-?php echo $row3['id']; ?> & view=delete"
                                    onClick="return confirm('Are you sure want to Edit??')"> <strong>Edit</strong></a>
                                <-?php

echo "</td> </tr>";
	//$i++;
  }
  }
  else
  echo"";
 ?>
                </tbody>
            </table>
            </center>

            <br />
</body>

</html>
</body> -->

</html>