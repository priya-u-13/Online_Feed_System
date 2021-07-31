		<?php
session_start();
require_once "../config.php";
$tid=$_SESSION['Id'];
$tuser=$_SESSION['Username'];
$tname=$_SESSION['Aname'];


$s1=$_REQUEST['s1'];
$s2=$_REQUEST['s2'];
$s3=$_REQUEST['s3'];
$s4=$_REQUEST['s4'];
$s5=$_REQUEST['s5'];
$s6=$_REQUEST['s6'];
$s7=$_REQUEST['s7'];
$s8=$_REQUEST['s8'];
$s9=$_REQUEST['s9'];
$s10=$_REQUEST['s10'];
$s11=$_REQUEST['s11'];
$s12=$_REQUEST['s12'];
$s13=$_REQUEST['s13'];
$s14=$_REQUEST['s14'];
$s15=$_REQUEST['s15'];
$s16=$_REQUEST['s16'];
$s17=$_REQUEST['s17'];
$s18=$_REQUEST['s18'];
$s19=$_REQUEST['s19'];
$s20=$_REQUEST['s20'];
$teach_name=$_REQUEST['teach_name'];
$teach_sub=$_REQUEST['teach_sub'];
$p1=$_REQUEST['p1'];
$p2=$_REQUEST['p2'];
$p3=$_REQUEST['p3'];
$p4=$_REQUEST['p4'];
$p5=$_REQUEST['p5'];
$p6=$_REQUEST['p6'];
$p7=$_REQUEST['p7'];
$p8=$_REQUEST['p8'];
$p9=$_REQUEST['p9'];
$p10=$_REQUEST['p10'];
$p11=$_REQUEST['p11'];

date_default_timezone_set("Asia/Kolkata");
$apply=date("Y-m-d");
$status="pending";
 
$query =mysql_query("insert into s_feedback (tid,suser,sname,s1,s2,s3,s4,s5,s6,s7,s8,s9,s10,s11,s12,s13,s14,s15,s16,s17,s18,s19,s20,teach_name,teach_sub,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,apply,status) 
values ('$tid','$tuser','$tname','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$s11','$s12','$s13','$s14','$s15','$s16','$s17','$s18','$s19','$s20','$teach_name','$teach_sub','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11','$apply','$status')");
echo '<script type="text/javascript">alert("Feedback Submitted Succesfully");window.location=\'profile.php\';</script>';

?>	