<?php
session_start();
include 'config.php';
if($log != "log"){
	header ("Location: deletematerialaction.php");
}
$payingid = $_REQUEST['key'];
$SQL = "DELETE FROM payroll WHERE payingid = '$payingid'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'deletematerialaction.php'</script>";
?>