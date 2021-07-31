<?php
session_start();
include "header.php";
require_once("config.php");
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
 <link rel="stylesheet" href="bootstrap.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
	     <script src="datetimepicker_css.js"></script>
     </head>
	 <body style="font-style:strong">
   <center>
      <h1>POST COMPLAINT</h1>
      <table border="4" cellpadding="15" cellspacing="1" >
         <form name="complaintform" id="f1" name="f1" method="post" enctype="multipart/form-data">
         <tr>
		     <td class="tc" >Complaint Title:</td>
			 <td class="tc">
			     <select name="ctitle" id="ctitle" class="form-control">
			     <option value="NULL">Select Any One</option>
			     <option value="About College">About College</option>
				 <option value="About Study">About Study</option>
				 <option value="About other Activity">About other Activity</option>
			     <option value="About Faculty">About Faculty</option>
			 </select>
			 </td>
		 </tr>
		 <tr>
		     <td class="tc">Complaint Date:</td>
			 <td class="tc"><div class="input-group">
                           <input class='form-control' id='dob' name='dob' onBlur="CalculateAge(this)">
                           <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar" onClick="javascript:NewCssCal ('dob','yyyymmdd')"></span>
                           </span> 
                            </div></td>
	     </tr>
         
         <tr>
		     <td class="tc">Attachment File:</td>
			 <td class="tc"><input type="file" name="cfile" id="cfile">
		 </tr>
         <tr>
		     <td colspan="2" class="tc"><b>Please enter the nature of complaint:</b><br/><br/>
			 <textarea rows="5" cols="60" id="complaint" name="complaint" class='form-control' placeholder="enter complaint here"></textarea></td>
		 </tr>
         <tr>
		     <td colspan="2" class="tc"><b>What do you think we should do to put thinks right?</b><br/><br/>
			 <textarea rows="5" cols="60" id="think" name="think" class='form-control' placeholder="enter complaint here"></textarea></td>
	     </tr>
         <tr>
		      <td colspan="2" class="tc">
		          <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="submit" name="pnc" id="pnc" value="Post New Complaint" class="btn btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="submit" name="bck" id="bck" value="Back" class="btn btn-danger">
			  </td>
		 </tr>
</form>
<?php
if(isset($_REQUEST['submit']))
{
$tid=$_SESSION['Id'];
$ftitle=$_REQUEST['ctitle'];
$fdate=$_REQUEST['dob'];
$ffile=$_FILES['cfile']['name'];
$feedback=$_REQUEST['complaint'];
$think=$_REQUEST['think'];

date_default_timezone_set("Asia/Kolkata");
$apply=date("Y-m-d");
$status="pending";
                
function GeraHash($qtd){
$Caracteres = '0123456789';
$QuantidadeCaracteres = strlen($Caracteres);
$QuantidadeCaracteres--;
$Hash=NULL;
    for($x=1;$x<=$qtd;$x++){
        $Posicao = rand(0,$QuantidadeCaracteres);
        $Hash .= substr($Caracteres,$Posicao,1);
    }
return $Hash;
}
 $fid=GeraHash(9); 
 $feed=$fid.$ffile;
                $sourcePath = $_FILES['cfile']['tmp_name'];
                $targetPath = "complaint/".$feed;
                move_uploaded_file($sourcePath,$targetPath) ; 
$query =mysql_query("insert into complaint (cid,ctitle,cdate,cfile,complaint,think,apply,status,tid) values ('$fid','$ftitle','$fdate','$feed','$feedback','$think','$apply','$status','$tid')");
echo '<script type="text/javascript">alert("Complaint Submitted Succesfully");window.location=\'header.php\';</script>';
}
?>
</table>
</body>
</html>
<?php
include "footer.php";
?>	