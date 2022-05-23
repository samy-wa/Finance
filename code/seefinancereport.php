
<?php
require_once('function.php');
session_start();
?>
<!doctype html>
<html><br>
<head>
<link rel="stylesheet" type=" text/css"  href="css/nav.css">
<link href="css/admin_panel.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
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
<body >
<script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
<h1><p align="center"><u>Report Generation</u></p> </h2><br>
<p align="center"><b>Payment Report</b></p>
<?php	
$dayfrom=$_POST['dayfrom'];
$dayto=$_POST['dayto'];
$con= mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con,"financedb");
//$id = $_POST['id'];
if($dayfrom<=$dayto){
$result = mysqli_query($con,"SELECT accnum,salary,allowance,overtime,punish,date FROM  payroll where date BETWEEN'$dayfrom' AND '$dayto'");
echo "<table border='1' align=center>
<tr>
<th>Acc num</th>
<th>Salary</th>
<th>Allowance</th>
<th>overtime</th>
<th>punishment</th>
<th>Date</th>
</tr>";
echo'<br>';

while($row3 = mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td>'.$row3['accnum'].'</td>';
echo '<td>'.$row3['salary'].'</td>';
echo '<td>'.$row3['allowance'].'</td>';
echo '<td>'.$row3['overtime'].'</td>';
echo '<td>'.$row3['punish'].'</td>';
echo '<td>'.$row3['date'].'</td>';
}


$result = mysqli_query($con,"SELECT sum(salary),sum(allowance),sum(overtime),sum(punish) FROM  payroll where date BETWEEN'$dayfrom' AND '$dayto'");
echo"</tr>";
echo'<br>';

while($row3 = mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td>'."Total Payment".'</td>';
echo '<td>'.$row3['sum(salary)'].'</td>';
echo '<td>'.$row3['sum(allowance)'].'</td>';
echo '<td>'.$row3['sum(overtime)'].'</td>';
echo '<td>'.$row3['sum(punish)'].'</td>';
}
echo '</tr>';
echo "</table>";
?>

<?php

//$result = mysql_query("SELECT name,vehiclecode,cost,amount,cost*amount,date FROM fuel where date BETWEEN'$dayfrom' AND '$dayto'");
//while($row3 = mysql_fetch_array($result))
{
echo'<tr>';
echo '<td>'.$row3['name'].'</td>';
echo '<td>'.$row3['vehiclecode'].'</td>';
echo '<td>'.$row3['cost'].'</td>';
echo '<td>'.$row3['amount'].'</td>';
echo '<td>'.$row3['cost*amount'].'</td>';
echo '<td>'.$row3['date'].'</td>';
echo'</tr>';
}
//$result = mysql_query("SELECT sum(cost*amount) FROM fuel where date BETWEEN'$dayfrom' AND '$dayto'");
//while($row3 = mysql_fetch_array($result))
{

}
echo'</table>';
echo "<table border='1' align=center>
<tr>
<th>Expenditure Cause</th>
<th>Amount In Birr</th>
<th>Date of Consumpion</th>
</tr>";
$result = mysqli_query($con,"SELECT expediturecuse,amount,date FROM  otherexpense where date BETWEEN'$dayfrom' AND '$dayto'");
while($row3 = mysqli_fetch_array($result))
{
echo'<tr>';
echo '<td>'.$row3['expediturecuse'].'</td>';
echo '<td>'.$row3['amount'].'</td>';
echo '<td>'.$row3['date'].'</td>';
echo'</tr>';
}

$result = mysqli_query($con,"SELECT  sum(amount) FROM  otherexpense where date BETWEEN'$dayfrom' AND '$dayto'");
while($row3 = mysqli_fetch_array($result))
{
echo'<tr>';
echo '<td>'."Total  Expenditure".'</td>';
echo '<td>'.$row3['sum(amount)'].'</td>';
echo'</tr>';
}
}
else
echo"please fill correct date";
mysqli_close($con);
?> 
	<!-- end <br>of table  -->
	<br><br><p align="center"><b>Other Expenditure Report</b></p><br><br>
</table>
</body>
<br><br><br><br><br>
</html>
 