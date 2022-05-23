
<?php
require_once('function.php');
session_start();
?>
<!doctype html>
<html><br>
<head>
<link rel="stylesheet" type=" text/css"  href="css/nav.css">
<!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
<link href="css/admin_panel.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Serach Acount</title>

<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<!--<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>-->
	<!--<script type="text/javascript" src="js/jquery.equalHeight.js"></script>-->
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
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

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>
</head>
<br>
<body bgcolor="white">
<div style="clear:both"></div></center>
       <p style="text-align:justify; font-size:18px; color:#003366;"> 
	   <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>

		         <div style="float:left; margin-left:10px; margin-top:10px;"><?php //echo $_SESSION['SESS_FIRST_NAME'];?></div>
				 <br/><br/>
				 <h1><p align="center"><u> search account result</u></p></h1>
<?php	
$con= mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("financedb", $con);
if(isset($_POST['Search'])){
$accnum = $_POST['accnum'];
 if($result =mysql_query("SELECT * FROM payroll where accnum='$accnum'")){
echo "<table border='1' align=center>
<tr>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Account ID</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Full Name</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>User Name</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Password</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Phone Number</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Account Type</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Password</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Phone Number</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Account Type</th>
</tr>";
$numrows=mysql_num_rows($result);
if (($numrows == 0))
                        {
                        echo "<p>Sorry,Entered id ".$_POST['id']." is not exist. Enter the correct Account id.</p>";
		                 } 
						 else
while($row3 = mysql_fetch_array($result))
{
echo "<tr>";
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
//echo'<a rel="facebox" href=update_account.php?id=' . $row3["id"] . '>' . 'Edit' . '</a>';
echo '</td>';
echo "</tr>";
}
}
else{
echo "<tr>";
echo "There is no such like account";
echo "</tr>";
}
echo "</table>";
mysql_close($con);
}
?> 
<br/>
</body>
</html> 
</body>
</html>