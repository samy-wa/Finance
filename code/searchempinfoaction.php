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
    <title>search Employee </title>

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
                <?php	
						$con= mysqli_connect("localhost","root","");
						if (!$con)
						{
						die('Could not connect: ' . mysql_error());
						}
						mysqli_select_db($con,"financedb");
						$id = $_POST['id'];
						 if($result =mysqli_query($con,"SELECT * FROM employee where id='$id'")){
							$numrows=mysqli_num_rows($result);
							if (($numrows == 0))
													{
													echo "<p>Sorry,Entered id ".$_POST['id']." is not exist. Enter the correct employee id.</p>";
													 } 
													 else
							while($row3 = mysqli_fetch_array($result))
							{
							echo "<tr>";
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
							//echo'<a rel="facebox" href=update_account.php?id=' . $row3["id"] . '>' . 'Edit' . '</a>';
							echo '</td>';
							echo "</tr>";
							}
							}
							else{
							echo "<tr>";
							echo "There is no such like Employee id";
							echo "</tr>";
							}
							echo "</table>";
							mysqli_close($con);
							?>
            </tbody>
        </table>
    </div>
</body>
<!-- 
<body bgcolor="violet">
    <div style="clear:both"></div>
    </center>
    <p style="text-align:justify; font-size:18px; color:#003366;">
        <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>

    <div style="float:left; margin-left:10px; margin-top:10px;"><?php //echo $_SESSION['SESS_FIRST_NAME'];?>
    </div>
    <br /><br />
    <h1>
        <p align="center"><u> search Employee Information</u></p>
    </h1>
    <--?php	
$con= mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con,"financedb");
$id = $_POST['id'];
 if($result =mysqli_query($con,"SELECT * FROM employee where id='$id'")){
echo "<table border='1' align=center>
<tr>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Employee ID</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>First Name</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Last Name</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Sex</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Proffession</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Phone Number</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>E_mail Adress</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Qualification </th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Date</th>

</tr>";
$numrows=mysqli_num_rows($result);
if (($numrows == 0))
                        {
                        echo "<p>Sorry,Entered id ".$_POST['id']." is not exist. Enter the correct employee id.</p>";
		                 } 
						 else
while($row3 = mysqli_fetch_array($result))
{
echo "<tr>";
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
//echo'<a rel="facebox" href=update_account.php?id=' . $row3["id"] . '>' . 'Edit' . '</a>';
echo '</td>';
echo "</tr>";
}
}
else{
echo "<tr>";
echo "There is no such like Employee id";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
    <br />
</body>

</html>
</body> -->

</html>