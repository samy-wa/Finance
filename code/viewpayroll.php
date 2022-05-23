<?php
require_once('function.php');
session_start();
?>
<!doctype html>
<html><br>

<head>
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- <link rel="stylesheet" type=" text/css"  href="css/nav.css"> -->
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
                    <th scope="col">Account Num</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Allowance</th>
                    <th scope="col">OverTime</th>
                    <th scope="col">Punishment</th>
                    <th scope="col">Pension</th>
                    <th scope="col">Tax</th>
                    <th scope="col">Net Salary</th>
                    <th scope="col">Date Of Payment</th>
                </tr>
            </thead>
            <tbody>
                <?php	
					$con= mysqli_connect("localhost","root","");
					if (!$con)
					{
					die('Could not connect: ' . mysql_error());
					}
					mysqli_select_db( $con,"financedb");
					$a=$_POST['dayfrom'];
					$b=$_POST['dayto'];
					if($a<=$b){
					$result = mysqli_query($con,"SELECT * FROM  payroll where date BETWEEN '$a' AND '$b'");
					while($row3 = mysqli_fetch_array($result))
					{
					echo '<tr>';
					echo '<td>'.$row3['accnum'].'</td>';
					echo '<td>'.$row3['fname'].'</td>';
					echo '<td>'.$row3['lname'].'</td>';
					echo '<td>'.$row3['phone_number'].'</td>';
					echo '<td>'.$row3['salary'].'</td>';
					echo '<td>'.$row3['allowance'].'</td>';
					echo '<td>'.$row3['overtime'].'</td>';
					echo '<td>'.$row3['punish'].'</td>';
					if($row3['salary'] <585)
					{
					echo '<td>'.$row3['salary']* 0.07 .'</td>';
					echo '<td>'.$row3['salary']* 0 .'</td>';
					echo '<td>'.$row3['salary']+=$row3['allowance']+=$row3['overtime']-=($row3['punish']+$row3['salary']+$row3['salary']*0.07) .'</td>';
					}
					else if($row3['salary']>=585 && $row3['salary']<1650)
					{
					echo '<td>'.$row3['salary']* 0.07 .'</td>';
					echo '<td>'.($row3['salary']*0.1-58.5) .'</td>';
					echo '<td>'.$row3['salary']+=$row3['allowance']+=$row3['overtime']-=($row3['punish']+($row3['salary']*0.1-58.5)+$row3['salary']*0.07) .'</td>';
					}
					
					else if($row3['salary']>=1650 && $row3['salary']<3145)
					{
					echo '<td>'.$row3['salary']* 0.07 .'</td>';
					echo '<td>'.($row3['salary']*0.15-141) .'</td>';
					echo '<td>'.$row3['salary']+=$row3['allowance']+=$row3['overtime']-=($row3['punish']+($row3['salary']*0.15-141)+$row3['salary']*0.07) .'</td>';
					}
					else if($row3['salary']>=3145 && $row3['salary']<5195)
					{
					echo '<td>'.$row3['salary']* 0.07 .'</td>';
					echo '<td>'.($row3['salary']*0.2-298.25) .'</td>';
					echo '<td>'.$row3['salary']+=$row3['allowance']+=$row3['overtime']-=($row3['punish']+($row3['salary']*0.2-298.25)+$row3['salary']*0.07) .'</td>';
					}
					else if($row3['salary']>=5195 && $row3['salary']<7758)
					{
					echo '<td>'.$row3['salary']* 0.07 .'</td>';
					echo '<td>'.($row3['salary']*0.25-558) .'</td>';
					echo '<td>'.$row3['salary']+=$row3['allowance']+=$row3['overtime']-=($row3['punish']+($row3['salary']*0.25-558)+$row3['salary']*0.07) .'</td>';
					}
					else if($row3['salary']>=7758 && $row3['salary']<10833)
					{
					echo '<td>'.$row3['salary']* 0.07 .'</td>';
					echo '<td>'.($row3['salary']*0.3-945.9) .'</td>';
					echo '<td>'.$row3['salary']+=$row3['allowance']+=$row3['overtime']-=($row3['punish']+($row3['salary']*0.3-945.9)+$row3['salary']*0.07) .'</td>';
					}
					else if($row3['salary']>=10833)
					{
					echo '<td>'.$row3['salary']* 0.07 .'</td>';
					echo '<td>'.($row3['salary']*0.35-1487.55) .'</td>';
					echo '<td>'.$row3['salary']+=$row3['allowance']+=$row3['overtime']-=($row3['punish']+($row3['salary']*0.35-1487.55)+$row3['salary']*0.07) .'</td>';
					}
					echo '<td>'.$row3['date'].'</td>';
					echo '</tr>';
					}
					}
					else
					echo"please enter correct date";
					mysqli_close($con);
					?>
            <tbody>
        </table>
        <?php include("print.php"); ?>
    </div>
</body>


<!-- <body bgcolor="white">
    <div align="left">
        <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
        <h1>
            <p align="center">Samara University Finance Payment Information</p>
            </h2>
            <-?php	
$con= mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysqli_select_db( $con,"financedb");
$a=$_POST['dayfrom'];
$b=$_POST['dayto'];
if($a<=$b){
$result = mysqli_query($con,"SELECT * FROM  payroll where date BETWEEN '$a' AND '$b'");
echo "<table border='1' align=center>
<tr>
<th>Acc num</th>
<th>fname</th>
<th>lname</th>
<th>Phone No</th>
<th>Salary</th>
<th>Allowance</th>
<th>overtime</th>
<th>punishment</th>
<th>pension </th>
<th>Tax </th>
<th> Net salary</th>
<th>Date of Payment</th>
</tr>";

while($row3 = mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td>'.$row3['accnum'].'</td>';
echo '<td>'.$row3['fname'].'</td>';
echo '<td>'.$row3['lname'].'</td>';
echo '<td>'.$row3['phone_number'].'</td>';
echo '<td>'.$row3['salary'].'</td>';
echo '<td>'.$row3['allowance'].'</td>';
echo '<td>'.$row3['overtime'].'</td>';
echo '<td>'.$row3['punish'].'</td>';
if($row3['salary'] <585)
{
echo '<td>'.$row3['salary']* 0.07 .'</td>';
echo '<td>'.$row3['salary']* 0 .'</td>';
echo '<td>'.$row3['salary']+=$row3['allowance']+=$row3['overtime']-=($row3['punish']+$row3['salary']+$row3['salary']*0.07) .'</td>';
}
else if($row3['salary']>=585 && $row3['salary']<1650)
{
echo '<td>'.$row3['salary']* 0.07 .'</td>';
echo '<td>'.($row3['salary']*0.1-58.5) .'</td>';
echo '<td>'.$row3['salary']+=$row3['allowance']+=$row3['overtime']-=($row3['punish']+($row3['salary']*0.1-58.5)+$row3['salary']*0.07) .'</td>';
}

else if($row3['salary']>=1650 && $row3['salary']<3145)
{
echo '<td>'.$row3['salary']* 0.07 .'</td>';
echo '<td>'.($row3['salary']*0.15-141) .'</td>';
echo '<td>'.$row3['salary']+=$row3['allowance']+=$row3['overtime']-=($row3['punish']+($row3['salary']*0.15-141)+$row3['salary']*0.07) .'</td>';
}
else if($row3['salary']>=3145 && $row3['salary']<5195)
{
echo '<td>'.$row3['salary']* 0.07 .'</td>';
echo '<td>'.($row3['salary']*0.2-298.25) .'</td>';
echo '<td>'.$row3['salary']+=$row3['allowance']+=$row3['overtime']-=($row3['punish']+($row3['salary']*0.2-298.25)+$row3['salary']*0.07) .'</td>';
}
else if($row3['salary']>=5195 && $row3['salary']<7758)
{
echo '<td>'.$row3['salary']* 0.07 .'</td>';
echo '<td>'.($row3['salary']*0.25-558) .'</td>';
echo '<td>'.$row3['salary']+=$row3['allowance']+=$row3['overtime']-=($row3['punish']+($row3['salary']*0.25-558)+$row3['salary']*0.07) .'</td>';
}
else if($row3['salary']>=7758 && $row3['salary']<10833)
{
echo '<td>'.$row3['salary']* 0.07 .'</td>';
echo '<td>'.($row3['salary']*0.3-945.9) .'</td>';
echo '<td>'.$row3['salary']+=$row3['allowance']+=$row3['overtime']-=($row3['punish']+($row3['salary']*0.3-945.9)+$row3['salary']*0.07) .'</td>';
}
else if($row3['salary']>=10833)
{
echo '<td>'.$row3['salary']* 0.07 .'</td>';
echo '<td>'.($row3['salary']*0.35-1487.55) .'</td>';
echo '<td>'.$row3['salary']+=$row3['allowance']+=$row3['overtime']-=($row3['punish']+($row3['salary']*0.35-1487.55)+$row3['salary']*0.07) .'</td>';
}
echo '<td>'.$row3['date'].'</td>';
echo '</tr>';
}
}
else
echo"please enter correct date";
echo "</table>";
mysqli_close($con);
?>
    </div>
    </div><br><br><br><br>
    <div align="center">
        <-?php echo"_________________________________"?><br>
        <-?php echo" put the seal of the enterprise"?>
    </div>
    <br><br>
    <-?php include("print.php"); ?>
    </div>
    </div>
    </td>
    </table>
</body> -->

</html>