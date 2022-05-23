<!doctype html>
<html>
<head>
<link rel="stylesheet" type=" text/css"  href="css/nav.css">
<!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
<link href="css/admin_panel.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Send Message</title>

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
		<script>
	function ValidateAlpha(evt)
        {
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 &&  keyCode != 8  &&  keyCode != 9)
				{
				alert("	Only letters are allowed! ")
            return false;
			}}

function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)){
		 alert("Only number is allwed!")
            return false;

}
         
      }
	  


	 
			</script>

    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
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
<script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
<form action="message.php" method="post" name="form3">
<fieldset><legend align="center" size="5"><b>Write Your Message Here!</b></legend>
			<table align="center" width="300" border="0" cellpadding="0">
	 <tr>
                <td width="300" valign="top"><div align="center"><strong>FROM:</strong></b></td>
    <td><select size="1" name="frm"   placeholder = "from" required>
		 <option value="administrator">Administrator</option> 
		 <option value="systemadmin">System Admin</option>
		  <option value="casher">Casher</option>
		   <option value="auditor">Finance auditor</option>
		    <option value="officer">Finance officer</option>
    </select></td>
  </tr> 
     <tr>
                <td width="300" valign="top"><div align="center"><strong>Too :</strong></b></td>
    <td><select size="1" name="too"   placeholder = "too" required/>
       <option value="" selected="selected">--Select--</option>
		 <option value="administrator">Administrator</option> 
		 <option value="systemadmin">System Admin</option>
		  <option value="casher">Casher</option>
		   <option value="auditor">Finance auditor</option>
		    <option value="officer">Finance officer</option
    </select></td>
  </tr>
  <tr>
                <td width="300" valign="top"><div align="center"><strong>Phone No:</strong></div></td>
                <td width="300"><div align="left"><input name="pnumber" type="text" id="pnumber"  onKeyPress="return isNumberKey(event)" required/></textarea></div></td>
              </tr>
			    <tr>
			<tr>
                <td width="100" valign="top"><div align="center"></trong><strong>Write message or comment here :</strong></div></td>
                <td width="300"><div align="left"><textarea name="message" type="text" height="500px"  id="message"required/></textarea></div></td>
              </tr>
              <tr>
                <td valign="top"><div align="center"></div></td>
                <td><input name="send" type="submit" value="send" />&nbsp;&nbsp;&nbsp;
				<input name="Clear" type="Reset" value="Clear" /></td>
              </tr>
            </table>
			</fieldset>
</form>
<?php
$con = mysqli_connect("localhost","root","") or die (mysqli_error());
mysqli_select_db($con,"financedb" );
if (isset($_POST["send"]))
{
include('config.php');
//$id=$_POST['id'];
$from=$_POST['frm'];
$too=$_POST['too'];
$pnumber=$_POST['pnumber'];
$message=$_POST['message'];
//$date = $_POST["Date"];

$query="INSERT INTO message(frm,too,pnumber,message,Date)
VALUES('$from','$too','$pnumber','$message',now())";

$rs=mysqli_query($ATA,$query);

if (!($rs))
{

echo "message send failed".mysql_error();
             
}

else
{
 echo "<b><i><pre>                                                 message Successfully sent!! </pre></i></b>"; 

 }
 }
 mysqli_close($con);

?>	</table>
			</fieldset> 

         
</div>
	<!-- end of table  -->
          
        </div>
					
                    
</div>	
<!---------------------------------- end container -------------------------------->
</td>
</table>
</body>

</table>
<br/>
</body>
</html> 
 
 