<!doctype html>
<html>
<head>
<link rel="stylesheet" type=" text/css"  href="css/nav.css">
<!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
<link href="css/admin_panel.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Report</title>

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

<style type="text/css">
table.test {
    width           :  1000px;
    /*border-collapse : collapse;*/
    table-layout    : fixed;
	background:#FFF;
	
}

th.author {
    width    : 120px;
    border   : 1px solid red;
}

th.di {
    width    : 150px;
    border   : 1px solid red;
	
}

td.long {
    overflow    : hidden;
    white-space : nowrap;
    width       : 50px;
    border      : 1px solid black;
}

th.id {
    overflow    : hidden;
    white-space : nowrap;
    width       : 30px;
    border      : 1px solid black;
}
#search1
{
 padding:30px;
 font-family:Georgia, "Times New Roman", Times, serif;
}

th.title {
    overflow    : hidden;
    white-space : nowrap;
    width       : 100px;
    border      : 1px solid red;
}

th.heading {
    overflow    : hidden;
    white-space : nowrap;
    width       : 100px;
   border      : 1px solid red;
}

th.body {
    overflow    : hidden;
    white-space : nowrap;
    width       : 150px;
    border      : 1px solid red;
}

th.ed {
    overflow    : hidden;
    white-space : nowrap;
    width       : 50px;
    border      : 1px solid red;
}

td.id {
    overflow    : hidden;
    white-space : nowrap;
    width       : 30px;
    border      : 1px solid red;
	background:#C63;
}

td.title {
    overflow    : HIDDEN;
    white-space : nowrap;
    width       : 100px;
    border      : 1px solid red;
	text-align:center;

}

td.heading {
    overflow    : HIDDEN;
    white-space : nowrap;
    width       : 200px;
    border      : 1px solid red;
	word-wrap: break-word;
	text-align:center;
}


td.body {
	/*overflow-y:scroll;
	overflow-x: scroll;*/
    /*overflow    : scroll;*/
    
	/*height:80px;*/ /*word-wrap: break-word;*/
	/*word-wrap: break-word;*/
	white-space : nowrap;
    width       : 800px;
    border      : 1px solid red;
	text-align:center;
	text-overflow: ellipsis;
	overflow: auto;
	position:relative;
	
	
}

td.author {
    overflow    : scroll;
    white-space : nowrap;
    width       : 100px;
    border      : 1px solid red;
	text-align:center;
}

td.di {
    overflow    : hidden;
    white-space : nowrap;
    width       : 50px;
    border      : 1px solid red;
	text-align:center;
}

td.ed {
    overflow    : hidden;
    white-space : nowrap;
    width       : 50px;
    border      : 1px solid red;
	text-align:center;
	background:#3CF;
}

td.blank {
	width    : auto;
	border      : 1px solid red;
	height: auto;
	border-bottom-style: groove;
	padding: 10px;
}

/*p.test
{
word-wrap:break-word;
}*/ 

</style>
</head>
<br>
<body bgcolor="#5F9EA0">
<!--div class="container">
<div class="header">
  <p>-->

<form>
<?php include("adlogoadmin.php"); ?> 
</form>



<div style="clear:both"></div></center>
       <p style="text-align:justify; font-size:18px; color:#003366;"> <?php include("NurseVerticalbar.php"); ?>
	   <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
<style type="text/css">
body{
    
	font-family:"Times New Roman", Times, serif;
	color:#000000;
	}
h2{
    text-align:center;
	font-size:36px;
	margin:0px;
   }
</style> 
<h1><p align="left"> <pre>              <strong style="background-color: #D8BFD8">VIEW REPORT</pre></strong></p> </h2>
<h3><p align="left"> <pre>                   <strong style="background-color: #F0FFFF">Search Format(YYYY-MM-DD) </pre></strong></p> </h3>  
<table height ="20%" width="75%"  align="center">  
		 <center><div style="width:450px; margin:0 auto; position:relative; border:3px solid rgba(0.4,0.4,0,0); -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:2px;">
		 <form action="report.php" method="post">
		   <br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
From: <input name="dayfrom" type="text" class="tcal" required="required"/>&nbsp;&nbsp;&nbsp;
To: <input name="dayto" type="text" class="tcal" required="required"/>
<br/><br/>
<div align="center">
<input name="" type="submit" value="Search" align="center"/></div></form>
</div>	</center> 
		 </p>
</table>
			</fieldset> 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
         
</div>
	<!-- end of table  -->
            <?php include("footer.php"); ?> 
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
		