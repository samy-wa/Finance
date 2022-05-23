<?php
session_start();
include 'config.php';
if($log != "log"){
	header ("Location: allaccountsd.php");
}
$id = $_REQUEST['key'];
$SQL = "DELETE FROM account WHERE id = '$id'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'allaccountsd.php'</script>";
?>