<?php
include "header.php";
require_once "config.php";
$tid=$_GET['id'];
$query =mysql_query("delete from s_suggestion where id='$tid'");
echo '<script type="text/javascript">alert("Suggestion Record Deleted Succesfully");window.location=\'profile.php\';</script>';
?>
