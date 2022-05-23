<!doctype html>
<html><br>

<head>
    <link rel="stylesheet" type=" text/css" href="css/nav.css">
    <!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
    <!-- <link href="css/admin_panel.css" rel="stylesheet" type="text/css" /> -->
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Update Account </title>
    <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
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
                    <th scope="col">Account ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Password</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Account Type</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <form name="search" action="updateaccount.php" method="post" onsubmit="return validateForm1()">
                    <h3>search account by account ID<h1>
                            <div class="d-flex col-5 mx-auto form-group mb-3">
                                <div class="col-6 m-3">
                                    <input class="form-control" type="text" name="id"
                                        onKeyPress="return isNumberKey(event)" required>
                                </div>
                                <div class="col-6 m-3" id="searchWithDate">
                                    <button class="btn btn-outline-success" type="submit" name="submit"
                                        value="Search"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </div>
                </form>
                <?php
			   include('config.php');
								$id = $_POST['id'];
								if($id>0){
								$result3 = mysqli_query($ATA,"SELECT * FROM Account where id=$id");
								$numrows=mysqli_num_rows($result3);
                       if (($numrows == 0))
                        {
                        echo "<p>Sorry,Entered accountid ".$_POST['id'] ." is not exist. Enter the correct  accountid.</p>";
		                 } 
						 else
								
								while($row3 = mysqli_fetch_array($result3))
								  {
								 echo '<tr>';
								 
									echo '<td>'.$row3['id'].'</td>';
									echo '<td>'.$row3['fullname'].'</td>';
									echo '<td>'.$row3['username'].'</td>';
									echo '<td>'.$row3['password'].'</td>';
									echo '<td>'.$row3['phone_number'].'</td>';
									echo '<td>'.$row3['account_type'].'</td>';
									echo '<td>';
									
																		 ?>
                <a rel="facebook" href="editaccount.php?id=<?php echo $row3['id']; ?> & view=delete"
                    onClick="return confirm('Are you sure want to Edit??')"> <strong>Edit</strong></a>
                <?php

echo "</td> </tr>";
  }
  }
  else
  echo"please fill ID";
 ?>
            </tbody>
        </table>
    </div>
</body>

<!-- <body bgcolor="violet">
    <div style="clear:both"></div>
    </center>
    <p style="text-align:justify; font-size:18px; color:#003366;">
        <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
    <h1>
        <p align="center">Update Account</p>
        </h2>
        <td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
            <table align='center' border="1" style="border-radius:15px" width="700px">
                <tr>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Account ID
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>fullname
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>user name
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>password
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>phone number
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>account type
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Action
                    </th>
                </tr>
                </thead>
                <tbody>
                    <form name="search" action="updateaccount.php" method="post" onsubmit="return validateForm1()">
                        <div id="UILabel" align="center">
                            <h3>search account by account ID<h1>
                                    <strong>Search:</strong> <input type="text" name="id" />
                                    <input type="submit" name="submit" value="Search" />
                    </form>
                    </center>
                    <--?php
			   include('config.php');
								$id = $_POST['id'];
								if($id>0){
								$result3 = mysqli_query($ATA,"SELECT * FROM Account where id=$id");
								$numrows=mysqli_num_rows($result3);
                       if (($numrows == 0))
                        {
                        echo "<p>Sorry,Entered accountid ".$_POST['id'] ." is not exist. Enter the correct  accountid.</p>";
		                 } 
						 else
								
								while($row3 = mysqli_fetch_array($result3))
								  {
								 echo '<tr>';
								 
									echo '<td>'.$row3['id'].'</td>';
									echo '<td>'.$row3['fullname'].'</td>';
									echo '<td>'.$row3['username'].'</td>';
									echo '<td>'.$row3['password'].'</td>';
									echo '<td>'.$row3['phone_number'].'</td>';
									echo '<td>'.$row3['account_type'].'</td>';
									echo '<td>';
									
																		 ?>
                    <a rel="facebook" href="editaccount.php?id=<--?php echo $row3['id']; ?> & view=delete"
                        onClick="return confirm('Are you sure want to Edit??')"> <strong>Edit</strong></a>
                    <--?php

echo "</td> </tr>";
  }
  }
  else
  echo"please fill ID";
 ?>
                </tbody>
            </table>
            </center>

            <br />
</body> -->


</html>