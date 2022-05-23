<?php
	include("config.php");
	//Start session
	session_start();
	//Unset the variables stored in session
	session_destroy();
?>
<!doctype html>
<html><br>

<head>
    <link rel="stylesheet" type=" text/css" href="css/nav.css">
    <!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
    <!-- <link href="css/admin_panel.css" rel="stylesheet" type="text/css" /> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Delete account </title>
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" /> -->
    <!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <script>
    function isdelete() {
        var d = confirm('Are you sure you want to Delete !!');
        if (!d) {
            alert(window.location = 'allaccountsd.php');
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
                <?php
                      if(isset($_POST['id'])){
                      include('config.php');
                      $id = $_POST['id'];
                      $result = mysqli_query($ATA,"SELECT * FROM account where id='$id'");
                                      $numrows=mysqli_num_rows($result);
                                             if (($numrows == 0))
                                              {
                                              echo "<p>Sorry,Entered accountid ".$_POST['id'] ." is not exist. Enter the correct  accountid.</p>";
                      		                 } 
                      						 else
                      while($row = mysqli_fetch_array($result))
                        {
                      $id = $row['id'];
                      $roomno=$row['fullname'];
                      $category=$row['username'];
                      $price=$row['password'];
                      $status=$row['confirm'];
                      $tame=$row['phone_number'];
                      $tamef=$row['account_type'];
                      ?>
                <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $roomno;?></td>
                    <td><?php echo $category;?></td>
                    <td><?php echo $price;?></td>
                    <td><?php echo $status;?></td>
                    <td><?php echo $tame;?></td>
                    <td><?php echo $tamef;?></td>
                    <?php
                      						print("<td style='height:30px;' align = 'center' width = '1'><a href = 'deleteaccount.php?key=".$id."'><img width='35px' height='25px' src = 'images/delete-icon.jpg' title='Delete' onclick='isdelete();'></img></a></td>
                      		");
                      		}
                      		?>

                </tr>
                <?php
                        }
                      print( "</table>");
                      
                      ?>
                </tbody>
            </table>
            <tbody>
    </body>


    <!-- <body bgcolor="white-green">
        <div style="clear:both"></div>
        </center>
        <p style="text-align:justify; font-size:18px; color:#003366;">
        <h1>
            <p align="center">Delete Account</p>
            </h2>
            <td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
                <table align='center' border="1" style="border-radius:15px" width="700px">
                    <tr>
                        <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                            <font color='white' size='2'>account id
                        </th>
                        <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                            <font color='white' size='2'>fullname
                        </th>
                        <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                            <font color='white' size='2'>username
                        </th>
                        <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                            <font color='white' size='2'>password
                        </th>
                        <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                            <font color='white' size='2'>confirm
                        </th>
                        <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                            <font color='white' size='2'>phone_number
                        </th>
                        <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                            <font color='white' size='2'>account_type
                        </th>
                        <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                            <font color='white' size='2'>Action
                        </th>
                    </tr>
                    <--?php
if(isset($_POST['id'])){
include('config.php');
$id = $_POST['id'];
$result = mysqli_query($ATA,"SELECT * FROM account where id='$id'");
                $numrows=mysqli_num_rows($result);
                       if (($numrows == 0))
                        {
                        echo "<p>Sorry,Entered accountid ".$_POST['id'] ." is not exist. Enter the correct  accountid.</p>";
		                 } 
						 else
while($row = mysqli_fetch_array($result))
  {
$id = $row['id'];
$roomno=$row['fullname'];
$category=$row['username'];
$price=$row['password'];
$status=$row['confirm'];
$tame=$row['phone_number'];
$tamef=$row['account_type'];
?>
                    <tr>
                        <td><--?php echo $id;?></td>
                        <td><--?php echo $roomno;?></td>
                        <td><--?php echo $category;?></td>
                        <td><--?php echo $price;?></td>
                        <td><--?php echo $status;?></td>
                        <td><--?php echo $tame;?></td>
                        <td><--?php echo $tamef;?></td>
                        <--?php
						print("<td style='height:30px;' align = 'center' width = '1'><a href = 'deleteaccount.php?key=".$id."'><img width='35px' height='25px' src = 'images/delete-icon.jpg' title='Delete' onclick='isdelete();'></img></a></td>
		");
		}
		?>

                    </tr>
                    <--?php
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