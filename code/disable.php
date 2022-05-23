<?php
include("config.php");
$username = $_SESSION["username"]; // SET USER ID for example by session

if($_POST["deleteaccount"])
{
 mysql_query($conn, mysql_real_escape_string($conn, "UPDATE account SET activated = 'no' WHERE username = '$username'"));
 // Do other stuff
}

?>