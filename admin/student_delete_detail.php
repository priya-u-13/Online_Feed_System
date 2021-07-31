<?php
include "header.php";
require_once "config.php";
$tid=$_GET['id'];
$query =mysql_query("delete from student where id='$tid'");
echo '<script type="text/javascript">alert("Student Record Deleted Succesfully");window.location=\'header.php\';</script>';
?>
