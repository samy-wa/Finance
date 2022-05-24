<?php
require_once('function.php');
session_start();
?>
<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>View Message</title>
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    </link>
    <script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>
    <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>

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
    <form name="search" method="post" action="searchmsg2.php">
        <div class="container card p-0" style="border-radius: 0 0 15px 15px !important;">
            <table class="table table-borderless">
                <thead class="section-header"
                    style="background-color: #dedede !important; padding: 0.5em 1em !important; font-weight: 600 !important;">
                    <tr>
                        <th scope="col">M_id</th>
                        <th scope="col">From</th>
                        <th scope="col">Too</th>
                        <th scope="col">Pnumber</th>
                        <th scope="col">Message</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    	$con = mysqli_connect("localhost","root","") or die (mysql_error());
                    	mysqli_select_db($con,"financedb" );
                    //$too=$_POST["too"];
                    $query="select * from message where too='administrator' ";
                    $result=mysqli_query($con,$query);
                    while($row3 = mysqli_fetch_array($result)) 
                    {
                    echo "<tr >";
                    echo '<td>'.$row3['m_id'].'</td>';
                    echo '<td>'.$row3['frm'].'</td>';
                    echo '<td>'.$row3['too'].'</td>';
                    echo '<td>'.$row3['pnumber'].'</td>';
                    echo '<td>'.$row3['message'].'</td>';
                    echo '<td>'.$row3['Date'].'</td>';
                    
                    echo '<td>';
                     ?>
                    <a rel="facebook" href="adminmsg1.php?m_id=<?php echo $row3['m_id']; ?> & view=delete"
                        onClick="return confirm('Are you sure??')"> <strong>Delete</strong></a>
                    <?php
                    
                    echo "</td> </tr>";
                    	//$i++;
                      }
                     ?>
                </tbody>
            </table>
        </div>

    </form>
</body>

</html>