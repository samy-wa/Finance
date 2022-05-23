<?php
session_start();
if(empty($_session['username']))
{
header("location:index.php");
}
?>