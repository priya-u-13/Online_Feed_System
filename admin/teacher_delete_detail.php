<?php
include "header.php";
require_once "config.php";
$tid=$_GET['id'];
$query =mysql_query("delete from teacher where id='$tid'");
echo '<script type="text/javascript">alert("Teacher Record Deleted Succesfully");window.location=\'header.php\';</script>';
?>
