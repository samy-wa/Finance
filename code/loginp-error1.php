
<?php
require_once('function.php');
session_start();
?>
<!doctype html>
<html><br>
<head>
<html>
<head><title>LOGIN ERROR</title></head>
 <link rel="stylesheet" href="mystyle1.css">
 <script type="text/javascript">
function validateForm()
{

var y=document.forms["login1"]["username"].value;
var a=document.forms["login1"]["password"].value;
if( document.login1.position.value == "-1" )
   {
     alert( "Please select your account type!" );
     document.login1.position.focus() ;
     return false;
   }
if ((y==null || y==""))
  {
  alert("you must enter your username");
  return false;
  }
  if ((a==null || a==""))
  {
  alert("you must enter your password");
  return false;
  }
return true
}
</script>

</head>
<link rel="stylesheet" type=" text/css"  href="css/nav.css">
<!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
<link href="css/admin_panel.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login page </title>

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
<body link="#0066FF" vlink="#6633CC" bgcolor="#FFFFCC" background="images/image001.jpg" style='margin:0'>
<!--div class="container">
<div class="header">
  <p>-->
    <form>
<?php include("adlogo.php"); ?> 
</form>

<div style="clear:both"></div></center><?php// include("indexverticalbar.php"); ?> 
       <p style="text-align:justify; font-size:18px; color:#003366;">  
	      <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
		 <div style="width:200px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:3px; -moz-border-radius:3px; border-radius:7px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 5px rgba(0,0,0,0.4); margin-top:10px;">
	
  <form id="form1" name="login" method="post" action="login1.php" onSubmit="return validateForm()" >
 
 <font color="red">Please enter valid username or password!!</font>
  <table width="20%" align="center">
  <tr>
    <td colspan="2">
	</td>
  </tr>
  <TR VALIGN="top"> 
     <TD> 
	 
	<DIV ALIGN=left>
	 	<DIV ALIGN=down>
		     <B><font color="#993366">  Login as :<B>
		     <select name="account_type">
		<option value="-1">--Select Account Type--</option>
		    <OPTION>System Admin</option><!--administrator--->
		     <OPTION>Administrator</option> <!--Nurse--->
		    
		     <OPTION>General Casher</option><!--Lab technician--->
			 <OPTION>Auditor</option><!--Donor--->
		     <OPTION>Finance Officer</option><!--Hospital--->
		     </SELECT></font>
		</DIV><br/>
		<TR>	
	        <TD><font color="#993366"><B>Name:</B></font>
		<INPUT NAME="username" TYPE=TEXT></TD><BR><BR>
	        </TR> <TR>
		<TD><font color="#993366"><B>Password:</B></font>
		<INPUT NAME="password" TYPE=PASSWORD></TD>
		</TR>
		<TR>
		<TD><INPUT NAME="Submit" TYPE=SUBMIT VALUE=Login>
		<INPUT NAME="Reset" TYPE=RESET VALUE=Clear></TD>
		</TR>
</DIV>
     </TD>
     </TR>
  </form>
</div>

	  	    
  </tr>
</td></table>

	  </div>	<!---------------------------------- end container -------------------------------->
	  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <?php include("footer.php"); ?> 


</body>
</html>
 
 