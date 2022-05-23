


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
<title>View Message</title>

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
          <thead>


 <?php
$con = mysqli_connect("localhost","root","") or die (mysql_error());
mysqli_select_db($con,"financedb"  );
?>
<html><head>
<center color:#FFFFFF;><h3><u><strong style="background-color: #F0FFFF">New Message</strong></u></h1></center>
<form name="search" method="post" action="searchmsg2.php">
<br><br>
 <table border="1" align="center" width="600">

<tr>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>M_id</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>From</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Too</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Pnumber</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Message</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Date</th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='1'>Action</th>
</tr>

<?php 
//$too=$_POST["too"];
$query="select * from message where too='auditor' ";
$result=mysqli_query($con,$query);
while($row3 = mysqli_fetch_array($result)) 
{
echo "<tr>";
echo '<td>'.$row3['m_id'].'</td>';
echo '<td>'.$row3['frm'].'</td>';
echo '<td>'.$row3['too'].'</td>';
echo '<td>'.$row3['pnumber'].'</td>';
echo '<td>'.$row3['message'].'</td>';
echo '<td>'.$row3['Date'].'</td>';

echo '<td>';
 ?>
<a rel="facebook" href="auditormsg1.php?m_id=<?php echo $row3['m_id']; ?> & view=delete" onClick="return confirm('Are you sure??')"> <strong>Delete</strong></a> 
 <?php

echo "</td> </tr>";
	//$i++;
  }
 ?>      
</table></form>
  </center>
		 
<br/>
</body>
</html> 
</body>
</html>


