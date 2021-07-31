<?php
include "home.php";
require_once "config.php";
$tid=$_GET['id'];
$query =mysql_query("delete from s_feedback where id='$tid'");
echo '<script type="text/javascript">alert("feedback Record Deleted Succesfully");window.location=\'profile.php\';</script>';
?>
