<?php
include "header.php";
require_once "config.php";
$tid=$_GET['id'];
$query =mysql_query("delete from complaint where id='$tid'");
echo '<script type="text/javascript">alert("Complaint Record Deleted Succesfully");window.location=\'profile.php\';</script>';
?>
