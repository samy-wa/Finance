
<!doctype html>
<html><br>
<head>
<link rel="stylesheet" type=" text/css"  href="css/nav.css">
<!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
<link href="css/admin_panel.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit payroll</title>

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
<body bgcolor="orange">
<div style="clear:both"></div></center>
       <p style="text-align:justify; font-size:18px; color:#003366;"> 
	   	  <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
		<center>
      <?php
include('config.php');
$payingid=$_POST['payingid'];
$accnum=$_POST['accnum'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$salary=$_POST['salary'];
$allowance=$_POST['allowance'];
$phone_number=$_POST['phone_number'];
$overtime=$_POST['overtime'];
$punish=$_POST['punish'];
$date=$_POST['date'];
if(mysqli_query($ATA,"INSERT INTO payroll(accnum,fname,lname,salary,allowance,phone_number,overtime,punish,date) VALUES('$accnum','$fname', '$lname', '$salary','$allowance', '$phone_number','$overtime','$punish','$date')")){
echo"Data reinserted Correctly";
}
else
echo " update Errer  "."".mysql_error();
?> 
   <form id="form1" name="abc" method="post" action="reinsertacton2.php" onSubmit="return validateForm1()">
</form></center>

      
<br/>
</body>
</html> 
</body>
</html>