
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
<title>View paying form</title>

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
<script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
<h1><p align="center">Audit Finance</p> </h2>
<?php	
$con= mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con,"financedb" );
$a=$_POST['dayfrom'];
$b=$_POST['dayto'];
if($a<=$b){
$result = mysqli_query($con,"SELECT expediturecuse,amount,date FROM   otherexpense where date BETWEEN '$a' AND '$b'");
echo "<table border='1' align=center>

<tr>
<th>Cause of Expenditure</th>
<th>Amount</th>
<th>Date</th>
</tr>";

while($row3 = mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td>'.$row3['expediturecuse'].'</td>';
echo '<td>'.$row3['amount'].'</td>';
echo '<td>'.$row3['date'].'</td>';
}
echo'</tr>';
$result = mysqli_query($con,"SELECT sum(amount),date FROM   otherexpense where date BETWEEN '$a' AND '$b'");
//while($row3 = mysqli_fetch_array($result))
{
echo'<tr>';
echo '<td>'."Total".'</td>';
echo '<td>'.$row3['sum(amount)'].'</td>';
}
echo'</tr>';
echo "</table>";
}
else
echo"please enter correct date";
mysqli_close($con);
?> 
</div><br>
</div>
</td>
</table>
</body>
</html>
 