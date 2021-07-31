<?php
session_start();
require_once "../config.php";
include "header.php";
$tid=$_SESSION['Id'];
$tuser=$_SESSION['Username'];
$tname=$_SESSION['Aname'];
?>
<html>
     <head>
	 <style>
body{
	   background-image: url(images/4.jpg) ;
	   background-image:no-repeat;
}
table{
    	  background-image: url(images/m.jpg) ;
		  background-size:cover;
}
td.tc{
		padding: 18px;
	}
</style>
<script src="datetimepicker_css.js"></script>
<link rel="stylesheet" href="bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		 
     </head>
<body style="font-style:strong">
  
      
	  <form name="suggetionform" id="f1" method="post" action="" enctype="multipart/form-data">
	  <center>
	  <h1 style="font-family:Monotype corsiva;color:white"><u><b>POST SUGGESTION</b></u></h1>
      <table border="4" cellpadding="15" cellspacing="1">
	   <input type="hidden" name="tid" id="tid" value="<?php echo $tid;?>" class="form-control">
	 <input type="hidden" name="tuser" id="tuser" value="<?php echo $tuser;?>" class="form-control">
	 <input type="hidden" name="tname" id="tname" value="<?php echo $tname;?>" class="form-control">

         
         <tr>
		     <td class="tc">Suggetion Title:</td>
			 <td class="tc">
			     <select name="stitle" id="stitle" class="form-control">
			     <option value="NULL">Select Any One</option>
			     <option value="About College">About College</option>
				 <option value="About Study">About Study</option>
				 <option value="About other Activity">About other Activity</option>
			     <option value="About Faculty">About Faculty</option>
			 </select>
		 
			  
			  </td>
		 </tr>
		 <tr>
		     <td class="tc">Suggetion Date:</td>
			 <td class="tc"><div class="input-group">
                           <input class='form-control' id='sdate' name='sdate' onBlur="CalculateAge(this)">
                           <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar" onClick="javascript:NewCssCal ('sdate','yyyymmdd')"></span>
                           </span> 
                            </div></td>
	     </tr>
         <tr>
		     <td class="tc">Attachment File:</td>
			 <td class="tc"><input type="file" name="sfile" id="sfile"></td>
		 </tr>
         <tr>
		     <td colspan="2" class="tc"><b>Please enter the nature of suggetion:</b><br/><br/>
			 <textarea rows="5" cols="60" id="suggestion" name="suggestion" class="form-control" placeholder="enter suggetion  here"></textarea></td>
		 </tr>
         
         <tr>
		      <td colspan="2" class="tc">
		          <input type="submit" name="submit" id="submit" value="SUBMIT" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="submit" name="pnc" id="pnc" value="Post New suggetion" class="btn btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="submit" name="bck" id="bck" value="BACK" class="btn btn-denger">
			  </td>
		 </tr>
</table>
</center>
</form>
<?php

//Check submit button axistant;
if(isset($_REQUEST['submit']))
{
$tid=$_REQUEST['tid'];
$tname=$_REQUEST['tname'];
$tuser=$_REQUEST['tuser'];

$stitle=$_REQUEST['stitle'];
$sdate=$_REQUEST['sdate'];
$sfile=$_FILES['sfile']['name'];
$suggestion=$_REQUEST['suggestion'];
$type="teacher";

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
 $sugg_id=GeraHash(9); 
 
 $sugg=$tid.$sfile;
                $sourcePath = $_FILES['sfile']['tmp_name'];
                $targetPath = "suggestion/".$sugg;
                move_uploaded_file($sourcePath,$targetPath) ; 
date_default_timezone_set("Asia/Kolkata");
$apply=date("Y-m-d");
$status="pending";
 
$query =mysql_query("insert into t_suggestion (tid,tuser,tname,sugg_id,stitle,sdate,sfile,sugg,apply,status,type) values ('$tid','$tuser','$tname','$sugg_id','$stitle','$sdate','$sugg','$suggestion','$apply','$status','$type')");
echo '<script type="text/javascript">alert("Suggestion Submitted Succesfully");window.location=\'profile.php\';</script>';
}
?>	
</body>
</html>