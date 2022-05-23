<?php
session_start();
include 'config.php';
if($log != "log"){
	header ("Location: deleteempaction.php");
}
$id = $_REQUEST['key'];
$SQL = "DELETE FROM employee WHERE id ='$id'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'deleteempaction.php'</script>";
?>