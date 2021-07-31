<?php
include"header.php";
require_once"config.php";
?>
<html>
     <head>
         <title>teacher registration</title>
            <style> 
			body{
	   background-image: url(images/4.jpg) ;
	   background-image:no-repeat;
}
table{
    	  background-image: url(images/m.jpg) ;
		  background-size:cover;
		  width:70%;
}
td.tc{
		padding: 5px;
	}
            
            </style>		
             <script src="datetimepicker_css.js"></script>           

			   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

     </head>
<body><center>
   <h1 style="color:white;font-family:Monotype corsiva"><u><b>TEACHER REGISTRATION FORM</b></u></h1>
<table border="1" cellpadding="15" cellspacing="10" >
<form name="f1" method="POST" >
     <tr>
         <td class="tc">Name</td>
		 <td class="tc"><input type="text" name="name" id="name" class="form-control"></td>
		 <td class="tc">Adhar No</td>
		 <td class="tc"><input type="text" name="ano" id="ano" class="form-control"></td>
     </tr>
	 <tr>
         <td class="tc">Mobile No</td>
		 <td class="tc"><input type="text" name="mno" id="mno" class="form-control"></td>
		 <td class="tc">Email ID</td>
		 <td class="tc"><input type="email" name="email" id="email" class="form-control"></td>
     </tr>
	 <tr>
         <td class="tc">DOB</td>
		 <td class="tc">
		    <div class="input-group">
                           <input class='form-control' id='dob' name='dob' onBlur="CalculateAge(this)" required>
                           <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar" onClick="javascript:NewCssCal ('dob','yyyymmdd')"></span>
                           </span> 
                            </div>
		 </td>	 
		 <td class="tc">Address</td>
		 <td class="tc"><input type="text" name="addr" id="addr" class="form-control"></td>
     </tr>
	 
	 <tr>
         <td class="tc">Department</td>
		 <td class="tc">
		     <select name="dpt" id="dpt"  class="form-control">
			  <option value="" selected>SELECT ANY ONE</option>
			     <option value="CSE">CSE</option>
				 <option value="MECH">MECH</option>
				 <option value="CIVIL">CIVIL</option>
				 <option value="EC">EC</option>
			 </select>
		 </td>
	     <td class="tc">Gender</td>
		 <td class="tc">
		     <input type="radio" name="gender" id="gender" value="male" checked/>Male
		     <input type="radio" name="gender" id="gender" value="female" >Female
		 </td>
     </tr>
	 <tr>
         <td class="tc">Category</td>
		 <td class="tc">
		     <select name="cat" id="cat" class="form-control">
			     <option value="" selected>SELECT ANY ONE</option>
				 <option value="OBC">OBC</option>
				 <option value="SC">SC</option>
				 <option value="ST">ST</option>
				 <option value="GEN">GEN</option>
			 </select>
		 </td>
	     <td class="tc">Joinig Date</td>
		 <td class="tc">
		    <div class="input-group">
                           <input class='form-control' id='jdate' name='jdate' onBlur="CalculateAge(this)" required>
                           <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar" onClick="javascript:NewCssCal ('jdate','yyyymmdd')"></span>
                           </span> 
                            </div>
		 </td>	 
     </tr>
	 
	 
	 
	 <tr>
         <td class="tc">Qualification</td>
		 <td class="tc"><input type="text" name="quali" id="quali" class="form-control"></td>
		 <td class="tc">Experience</td>
		 <td class="tc"><input type="text" name="exp" id="exp" class="form-control"></td>
     </tr>
	 <tr>
         <td class="tc">Designation</td>
		 <td class="tc"><input type="text" name="dasi" id="dasi" class="form-control"></td>
		 <td class="tc">Specialization</td>
		 <td class="tc"><input type="text" name="spe" id="spe" class="form-control"></td>
     </tr>
	 
	 <tr>
	     <td colspan="4" class="tc">
		         <input type="submit" name="submit" id="submit" value="SUBMIT" class="btn btn-default">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			     <input type="submit" name="reset" id="reset" value="RESET" class="btn btn-default">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				 <input type="submit" name="cancel" id="cancel" value="CANCEL" class="btn btn-default">
		 </td>
	 </tr>
</form>
</body>
</html>
<?php


if(isset($_REQUEST['submit']))
{
$name=$_REQUEST['name'];
$ano=$_REQUEST['ano'];
$mno=$_REQUEST['mno'];
$email=$_REQUEST['email'];
$dob=$_REQUEST['dob'];
$addr=$_REQUEST['addr'];
$dpt=$_REQUEST['dpt'];
$gender=$_REQUEST['gender'];
$cat=$_REQUEST['cat'];
$jdate=$_REQUEST['jdate'];
$quali=$_REQUEST['quali'];
$exp=$_REQUEST['exp'];
$dasi=$_REQUEST['dasi'];
$spe=$_REQUEST['spe'];

function GeraHash($qtd){
$Caracteres = 'ABCDEFGHIJKLMNOPQRSTUYWXYZ1234567890';
$QuantidadeCaracteres = strlen($Caracteres);
$QuantidadeCaracteres--;
$Hash=NULL;
    for($x=1;$x<=$qtd;$x++){
        $Posicao = rand(0,$QuantidadeCaracteres);
        $Hash .= substr($Caracteres,$Posicao,1);
    }
return $Hash;
}
 $user=GeraHash(8);

function Gera($qtd){
$Caracteres = '0123456789ABCDEFDHIJKLMNOPQRSTUVWXYZ,./#*';
$QuantidadeCaracteres = strlen($Caracteres);
$QuantidadeCaracteres--;
$Hash=NULL;
    for($x=1;$x<=$qtd;$x++){
        $Posicao = rand(0,$QuantidadeCaracteres);
        $Hash .= substr($Caracteres,$Posicao,1);
    }
return $Hash;
}
 $pass=Gera(6); 

date_default_timezone_set("Asia/Kolkata");
$apply=date("Y-m-d");
$status="pending";
                
$query =mysql_query("insert into teacher (name,aadhar_no,mno,email,dob,addr,dpt,gender,category,jdate,quali,exp,dasignation,specialization,user,pass,apply,status) values 
 ('$name','$ano','$mno','$email','$dob','$addr','$dpt','$gender','$cat','$jdate','$quali','$exp','$dasi','$spe','$user','$pass','$apply','$status')");
echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'profile.php\';</script>';
}
?>
<?php
include "footer.php";
?>	