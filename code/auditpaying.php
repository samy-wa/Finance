<?php
require_once('function.php');
session_start();
?>
<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>View paying form</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>

    <script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
    <script src="js/hideshow.js" type="text/javascript"></script>
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
    <?php	
		$con= mysqli_connect("localhost","root","");
		if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}
		mysqli_select_db($con,"financedb");
		$a=$_POST['dayfrom'];
		$b=$_POST['dayto'];
	?>
    <div class="container card p-0" style="border-radius: 0 0 15px 15px !important;">
        <p align="center"><b>Audit Finance</b></p>
        <table class="table table-borderless">
            <thead class="section-header"
                style="background-color: #dedede !important; padding: 0.5em 1em !important; font-weight: 600 !important;">
                <tr>
                    <th scope="col">Acc Number </th>
                    <th scope="col">Salary</th>
                    <th scope="col">Allowance</th>
                    <th scope="col">OverTime</th>
                    <th scope="col">punishement</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php if($a<=$b){
						$result = mysqli_query($con,"SELECT accnum,salary,allowance,overtime,punish,date FROM  payroll where date BETWEEN '$a' AND '$b'");
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
						echo'</tr>';
						$result = mysqli_query($con,"SELECT sum(salary),sum(allowance),sum(overtime),sum(punish),date FROM  payroll where date BETWEEN '$a' AND '$b'");
						while($row3 = mysqli_fetch_array($result))
						{
						echo'<tr>';
						echo '<td>'."Total".'</td>';
						echo '<td >'.$row3['sum(salary)'].'</td>';
						echo '<td>'.$row3['sum(allowance)'].'</td>';
						echo '<td>'.$row3['sum(overtime)'].'</td>';
						echo '<td>'.$row3['sum(punish)'].'</td>';
						}
						echo'</tr>';
					}
					else
					echo"Incorrect Date";
					mysqli_close($con);
				?>
            </tbody>
        </table>
    </div>
</body>


</html>