<!doctype html>
<html>

<head>
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    </link>
    <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>

    <script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Send Message</title>

    <!-- <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" /> -->
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
    <script>
    function ValidateAlpha(evt) {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 && keyCode != 8 &&
            keyCode != 9) {
            alert("	Only letters are allowed! ")
            return false;
        }
    }

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            alert("Only number is allwed!")
            return false;

        }

    }
    </script>

    <script type="text/javascript">
    $(function() {
        $('.column').equalHeight();
    });
    </script>

    <script type="text/javascript">
    $(function() {
        $('.column').equalHeight();
    });
    </script>
</head>

<body>
    <form action="auditormessage.php" method="post" name="form3">
        <div class="container">
            <div class="form-group mb-3">
                <label>
                    From
                </label>
                <select class="form-select" name="frm" placeholder="From" required aria-label="Default select example">
                    <option value="auditor">Auditor</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label>
                    To
                </label>
                <select class="form-select" name="too" placeholder="To" required aria-label="Default select example">
                    <option value="" selected="selected">--Select--</option>
                    <option value="administrator">Administrator</option>
                    <option value="systemadnin">System Admin</option>
                    <option value="casher">Casher</option>
                    <option value="officer">finance officer</option>
                    <option value="auditor">Auditor</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone No</label>
                    <input class="form-control" id="pnumber" name="pnumber" type="text"
                        onKeyPress="return isNumberKey(event)" required placeholder="+251...">
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Write message or comment here</label>
                    <textarea class="form-control" id="message" name="message" rows="10" cols="50" type="text"
                        required></textarea>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-success" name="send" type="submit" value="send">Send</button>
                <button class="btn btn-danger" name="Clear" type="Reset" value="Clear">Clear</button>
            </div>
        </div>
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
		?>
</body>

</html>