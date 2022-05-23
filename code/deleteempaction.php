<?php
	include("config.php");
	//Start session
	session_start();
	//Unset the variables stored in session
	session_destroy();
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
    <title>Delete Employee information </title>

    <!-- <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" /> -->
    <!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <script>
    function isdelete() {
        var d = confirm('Are you sure you want to Delete All employee Information !!');
        if (!d) {
            alert(window.location = 'deleteempaction.php');
        } else {
            return false;

        }
    }
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
                    <th scope="col">Action </th>
                </tr>
            </thead>
            <tbody>
                <?php
                  if(isset($_POST['id'])){
                  include('config.php');
                  $id = $_POST['id'];
                  $result = mysqli_query($ATA,"SELECT * FROM employee where id='$id'");
                   $numrows=mysqli_num_rows($result);
                                         if (($numrows == 0))
                                          {
                                          echo "<p>Sorry,Entered employeeid ".$_POST['id'] ." is not exist. Enter the correct  employeeid.</p>";
                  		                 } 
                  						 else
                  while($row = mysqli_fetch_array($result))
                    {
                  $id = $row['id'];
                  $fname=$row['fname'];
                  $lname=$row['lname'];
                  $Sex=$row['Sex'];
                  $proffession=$row['proffession'];
                  $phone=$row['phone'];
                  $email=$row['email'];
                  $qualification=$row['qualification'];
                  $date=$row['date'];
                  ?>
                <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $fname;?></td>
                    <td><?php echo $lname;?></td>
                    <td><?php echo $Sex;?></td>
                    <td><?php echo $proffession;?></td>
                    <td><?php echo $phone;?></td>

                    <td><?php echo $email;?></td>
                    <td><?php echo $qualification;?></td>
                    <td><?php echo $date;?></td>
                    <?php
                  						print("<td ><a href = 'deleteempolyee.php?key=".$id."'><img  width='35px' height='25px' src = 'images/delete-icon.jpg' title='Delete' onclick='isdelete();'></img></a></td>");
                  		}
                  		?>

                </tr>
                <?php
                    }
                  ?>
            </tbody>
        </table>

</body>

<!-- <body bgcolor="blue-black">
    <div style="clear:both"></div>
    </center>
    <p style="text-align:justify; font-size:18px; color:#003366;">
    <h1>
        <p align="center">Delete Employee information by ID</p>
        </h2>
        <td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
            <table align='center' border="1" style="border-radius:15px" width="700px">
                <tr>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Employee id
                    </th>
                    <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>First name
                    </th>
                    <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Last name
                    </th>
                    <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Sex
                    </th>
                    <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Employee proffession
                    </th>
                    <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>phone_number
                    </th>
                    <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Email Adress
                    </th>
                    <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Qualification
                    </th>
                    <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Date
                    </th>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Action
                    </th>
                </tr>
                <--?php
if(isset($_POST['id'])){
include('config.php');
$id = $_POST['id'];
$result = mysqli_query($ATA,"SELECT * FROM employee where id='$id'");
 $numrows=mysqli_num_rows($result);
                       if (($numrows == 0))
                        {
                        echo "<p>Sorry,Entered employeeid ".$_POST['id'] ." is not exist. Enter the correct  employeeid.</p>";
		                 } 
						 else
while($row = mysqli_fetch_array($result))
  {
$id = $row['id'];
$fname=$row['fname'];
$lname=$row['lname'];
$Sex=$row['Sex'];
$proffession=$row['proffession'];
$phone=$row['phone'];
$email=$row['email'];
$qualification=$row['qualification'];
$date=$row['date'];
?>
                <tr>
                    <td><-?php echo $id;?></td>
                    <td><-?php echo $fname;?></td>
                    <td><-?php echo $lname;?></td>
                    <td><-?php echo $Sex;?></td>
                    <td><-?php echo $proffession;?></td>
                    <td><-?php echo $phone;?></td>
-
                    <td><-?php echo $email;?></td>
                    <td><-?php echo $qualification;?></td>
                    <td><-?php echo $date;?></td>
                    <--?php
						print("<td style='height:30px;' align = 'center' width = '1'><a href = 'deleteempolyee.php?key=".$id."'><img width='35px' height='25px' src = 'images/delete-icon.jpg' title='Delete' onclick='isdelete();'></img></a></td>
					
		");
		}
		?>

                </tr>
                <-?php
  }
print( "</table>");

?>
                </tbody>
            </table>
            </center>

            <br />
</body>

</html>
</body> -->

</html>