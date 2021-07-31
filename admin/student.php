<?php
include "header.php";
require_once "config.php";
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
<body ><center>

<form name="form1" method="post" enctype="multipart/form-data">
<center>
<table border="1" cellpadding="10" width="" height="" class="tc">
<th colspan="4" class="head" style="font-color:red" style="font-size:30px;">STUDENT  REGISTRATION FORM </th>
     <tr>
	     <td class="tc">Name:</td>
		 <td class="tc"><input type="text" name="name" id="name" class="form-control"></td>
         <td class="tc">Enroll No:</td>
		 <td class="tc"><input type="text" name="enroll" id="enroll" class="form-control"></td>
	 </tr>
     <tr>
	     <td class="tc"> Father's Name:</td>
	     <td class="tc"><input type="text" name="fname" id="fname" class="form-control"></td>
         <td > Mother's Name:</td>
	     <td class="tc"><input type="text" name="mname" id="mname" class="form-control"></td>
	 </tr>
     <tr>
	     <td class="tc">Email ID:</td>
	     <td class="tc"><input type="email" name="email" id="email" class="form-control"></td>
         <td class="tc">Mobile No:</td>
	     <td class="tc"><input type="text" name="mno" id="mno" class="form-control"></td>
	 </tr>
     <tr>
	     <td class="tc"> Branch Name:</td>
	     <td class="tc">
		     <select name="branch_name" id="branch_name" class="form-control">
			     <option value="">SELECT ANY ONE</option>
			     <option value="CSE">CSE</option>
				 <option value="MECH">MECH</option>
				 <option value="EC">EC</option>
				 <option value="CIVIL">CIVIL</option>
			 </select>
		 </td>
         <td class="tc"> Branch Code:</td>
	     <td class="tc">
		     <select name="branch_code" id="branch_code" class="form-control">
			      <option value="">SELECT ANY ONE</option>
			     <option value="C04">C04</option>
				 <option value="M03">M03</option>
				 <option value="E02">E02</option>
				 <option value="C01">C01</option>
			 </select>
		 </td>
	 </tr>
     <tr>
	     <td class="tc">Student Type:</td>
	     <td class="tc">
		     <input type="checkbox" name="stype" id="stype" value="yes">Reguler
		 </td>
         <td class="tc">Gender:</td>
	     <td class="tc">
		     <input type="radio" name="gender" id="gender" value="male">Male
			 <input type="radio" name="gender" id="gender" value="female">Female
		 </td>
	 </tr>
     <tr>
	     <td class="tc">DOB:</td>
		<td class="tc">
		    <div class="input-group">
                           <input class='form-control' id='dob' name='dob' onBlur="CalculateAge(this)" required>
                           <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar" onClick="javascript:NewCssCal ('dob','yyyymmdd')"></span>
                           </span> 
                            </div>
		 </td>	 
		 <td class="tc">Category:</td>
		 <td class="tc">
		     <select name="category" id="category" class="form-control">
			      <option value="">SELECT ANY ONE</option>
			     <option value="OBC">OBC</option>
				 <option value="SC">SC</option>
				 <option value="ST">ST</option>
				 <option value="GEN">GEN</option>
	         </select>   
		 </td>
		 </tr>
	  <tr>   
	     <td class="tc">Year:</td>
	     <td class="tc">
		     <select name="year" id="year" class="form-control">
			      <option value="">SELECT ANY ONE</option>
			     <option value="1st">1st</option>
				 <option value="2nd">2nd</option>
				 <option value="3rd">3rd</option>
			 </select>
		 </td>
         <td class="tc">Semester:</td>
	     <td class="tc">
		     <select name="semester" id="semester" class="form-control">
			     <option value=""> SELECT ANY ONE </option>
			     <option value="1st">1st</option>
				 <option value="2nd">2nd</option>
				 <option value="3rd">3rd</option>
				 <option value="4th">4th</option>
				 <option value="5th">5th</option>
				 <option value="6th">6th</option>
			 </select>
		 </td>
	 </tr>
	 <tr>
	   <td class="tc">Address:</td>
	     <td class="tc">
		     <input type="text" name="address" id="address" class="form-control">
		 </td>
	    
         <td class="tc">District:</td>
	     <td class="tc">
		    <input type="text" name="district" id="district" class="form-control">
		 </td>
	 </tr>
	 <tr>
	    <td class="tc">State:</td>
	     <td class="tc">
		      <select name="state" id="state" class="form-control">
			  <option value="">SELECT ANY ONE</option>
			     <option value="AP">AP</option>
				 <option value="UP">UP</option>
				 <option value="MP">MP</option>
				 <option value="MH">MH</option>
				 <option value="CH">CH</option>
				 <option value="GU">GU</option>
			 </select>
		 </td>
         <td class="tc">Pincode:</td>
	     <td class="tc">
		     <input type="text" name="pin" id="pin" class="form-control">
		 </td>
	 </tr>
	
	 
	 
	 <tr> 
         <td colspan="4" class="tc"><center>
		     <input type="submit" value="submit" name="submit" value="Submit" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="submit" value="reset" name="reset" value="Reset" class="btn btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		     <input type="submit" value="cancel" name="cancel" value="Cancel" class="btn btn-danger">
</td></tr>
	
</table>
</form>
</table>
</body>
</html>
<?php

//Check submit button axistant;
if(isset($_REQUEST['submit']))
{
$name=$_REQUEST['name'];
$enroll=$_REQUEST['enroll'];
$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];
$email=$_REQUEST['email'];
$mno=$_REQUEST['mno'];
$branch_name=$_REQUEST['branch_name'];
$branch_code=$_REQUEST['branch_code'];
if(isset($_REQUEST['stype']))
{
   $stype='reguler';
}
 else
 {
  $stype='x';
 }
$gender=$_REQUEST['gender'];
$dob=$_REQUEST['dob'];
$category=$_REQUEST['category'];
$yr=$_REQUEST['year'];
$semester=$_REQUEST['semester'];
$address=$_REQUEST['address'];
$district=$_REQUEST['district'];
$state=$_REQUEST['state'];

$pin=$_REQUEST['pin'];

function GeraHash($qtd){
$Caracteres = 'ABCDEFGHIJKLMNOPQRSTUYWXYZ123456789';
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

$pass=GeraHash(6);


 
$query =mysql_query("insert into student (name,enroll,fname,mname,email,mno,branch_name,branch_code,stype,gender,dob,category,yr,semester,address,district,state,pin,user,pass) values 
 ('$name','$enroll','$fname','$mname','$email','$mno','$branch_name','$branch_code','$stype','$gender','$dob','$category','$yr','$semester','$address','$district','$state','$pin','$user','$pass')");
  echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'profile.php\';</script>';
echo"<br/> $query Record saved.";

}
?>
<?php
include "footer.php";
?>	