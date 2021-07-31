<?php
include "header.php";
require_once"config.php";
$tid=$_GET['id'];
?>
<html>
<head>
<style>
   td.tc{
	padding:18px;
}

table{
	background-image:url("m.jpg");
	background-size:cover;
} 
</style>
<script src="datetimepicker_css.js"></script>
</head>
<body><center>
<div class="table-responsive">

<form name="form1" method="post" enctype="multipart/form-data">
<center>
<table border="1" cellpadding="15" style="background-color:#00BFFF" width="850" height="600">
<th colspan="4" class="tc"><center>Suggestion Response </center></th>
     
	 <tr>
	     <td class="tc">Response:</td>
		 <input type="hidden" name="tid" id="tid" value="<?php echo $tid;?>" class="form-control">
	     <td colspan="3" class="tc">
		     <textarea name="mesz" id="mesz" class="form-control" required></textarea>
		 </td>
         
	 </tr>
	 
	 <tr> 
         <td colspan="4" class="tc">
		 <b style="padding-left:200px;">
		 <input type="submit" value="SUBMIT" name="submit" class="btn btn-success">
		 </b>
		 <b style="padding-left:200px;">
         <input type="submit" value="RESET" name="reset" class="btn btn-danger"></td>
		 </b>
	 </tr>
	
</table>
</form></td></tr>
</table>
</div>
</body>
</html>
<?php

//Check submit button axistant;
if(isset($_REQUEST['submit']))
{
$mesz=$_REQUEST['mesz'];
$tid=$_REQUEST['tid'];
date_default_timezone_set("Asia/Kolkata");
$apply=date("Y-m-d");

 
$query =mysql_query("insert into sugg_response (tid,response,apply) values ('$tid','$mesz','$apply')");
echo '<script type="text/javascript">alert("Response Completed Succesfully");window.location=\'profile.php\';</script>';
}
?>
<?php
include "footer.php";
?>	
