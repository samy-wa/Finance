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
    <!-- <link rel="stylesheet" type=" text/css"  href="css/nav.css"> -->
    <!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
    <!-- <link href="css/admin_panel.css" rel="stylesheet" type="text/css" /> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Delete expired payroll info</title>
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>

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
    <div class="container card p-0" style="border-radius: 0 0 15px 15px !important;">
        <p>Delete Expired Payroll Data</p>
        <table class="table table-borderless">
            <thead class="section-header"
                style="background-color: #dedede !important; padding: 0.5em 1em !important; font-weight: 600 !important;">
                <tr>
                    <th scope="col">Serial Number</th>
                    <th scope="col">Material Number</th>
                    <th scope="col">Material Type</th>
                    <th scope="col">Material Cost</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Product</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  if(isset($_POST['purcheseid'])){
                  include('config.php');
                  $purcheseid = $_POST['purcheseid'];
                  $result = mysqli_query($ATA,"SELECT * FROM material where purcheseid='$purcheseid'");
                  $numrows=mysqli_num_rows($result);
                  if (($numrows == 0))
                                          {
                                          echo "<p>Sorry,Entered purcheseid ".$_POST['purcheseid'] ." is not exist. Enter the correct  purcheseid.</p>";
                  		                 } 
                  						 else
                  while($row = mysqli_fetch_array($result))
                    {
                  $purcheseid = $row['purcheseid'];
                  $materialname=$row['materialname'];
                  $materialtype=$row['materialtype'];
                  $materialcost=$row['materialcost'];
                  $quantity=$row['quantity'];
                  $product=$row['product'];
                  $date=$row['date'];
                  ?>
                <tr>
                    <td><?php echo $purcheseid;?></td>
                    <td><?php echo $materialname;?></td>
                    <td><?php echo $materialtype;?></td>
                    <td><?php echo $materialcost;?></td>
                    <td><?php echo $quantity;?></td>
                    <td><?php echo $product;?></td>
                    <td><?php echo $date;?></td>
                    <?php
                  		print("<td><a href = 'deletematerial.php?key=".$purcheseid."'><img width='35px' height='25px' src = 'images/delete-icon.jpg' title='Delete' onclick='isdelete();'></img></a></td>");
                  		}
                    ?>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>

<!-- <body bgcolor="blue-black">
    <div style="clear:both"></div>
    </center>
    <p style="text-align:justify; font-size:18px; color:#003366;">
    <h1>
        <p align="center">Delete Expired Payroll Data</p>
        </h2>
        <td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
            <table align='center' border="1" style="border-radius:15px" width="700px">
                <tr>
                    <th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Serial Number
                    </th>
                    <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Material Name
                    </th>
                    <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Material Type
                    </th>
                    <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Material Cost
                    </th>
                    <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Quantity
                    </th>
                    <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Product
                    </th>
                    <th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'>
                        <font color='white' size='2'>Date
                    </th>
                </tr>
                <--?php
if(isset($_POST['purcheseid'])){
include('config.php');
$purcheseid = $_POST['purcheseid'];
$result = mysqli_query($ATA,"SELECT * FROM material where purcheseid='$purcheseid'");
$numrows=mysqli_num_rows($result);
if (($numrows == 0))
                        {
                        echo "<p>Sorry,Entered purcheseid ".$_POST['purcheseid'] ." is not exist. Enter the correct  purcheseid.</p>";
		                 } 
						 else
while($row = mysqli_fetch_array($result))
  {
$purcheseid = $row['purcheseid'];
$materialname=$row['materialname'];
$materialtype=$row['materialtype'];
$materialcost=$row['materialcost'];
$quantity=$row['quantity'];
$product=$row['product'];
$date=$row['date'];
?>
                <tr>
                    <td><-?php echo $purcheseid;?></td>
                    <td><-?php echo $materialname;?></td>
                    <td><-?php echo $materialtype;?></td>
                    <td><-?php echo $materialcost;?></td>
                    <td><-?php echo $quantity;?></td>
                    <td><-?php echo $product;?></td>
                    <td><-?php echo $date;?></td>
                    <-?php
						print("<td style='height:30px;' align = 'center' width = '1'><a href = 'deletematerial.php?key=".$purcheseid."'><img width='35px' height='25px' src = 'images/delete-icon.jpg' title='Delete' onclick='isdelete();'></img></a></td>
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