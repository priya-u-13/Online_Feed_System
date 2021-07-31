<?php
include "header.php";
require_once"config.php";
$tid=$_GET['id'];
$query =mysql_query("select * from teacher where id='$tid'");
     $records = mysql_num_rows($query);
     $row = mysql_fetch_array($query);
?>
<html>
<head>
<style>
   table{
    	  background-image: url(images/m.jpg) ;
		  background-size:cover;
        }
   td.tc{
		padding: 18px;
	}
</style>
<script src="datetimepicker_css.js"></script>
</head>
<body><center>
<div class="table-responsive">
<form name="form1" method="post" enctype="multipart/form-data">
<center>
<table border="1" cellpadding="15">
<td colspan="4" class="tc"><center>TEACHER'S Information Update </center></td>
     <tr>
	     <td class="tc">Name:</td>
		 <td class="tc"><input type="hidden" name="tid" id="tid" class="form-control" value="<?php echo $row['id'];?>" >
		 <input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name'];?>" ></td>
         <td class="tc">Username</td>
		 <td class="tc"><input type="text" name="user" id="user" class="form-control" value="<?php echo $row['user'];?>"></td>
	 </tr>
     
     <tr>
	     <td class="tc">Email ID:</td>
	     <td class="tc"><input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email'];?>" ></td>
         <td class="tc">Mobile No:</td>
	     <td class="tc"><input type="text" name="mno" id="mno" class="form-control" value="<?php echo $row['mno'];?>" ></td>
	 </tr>
     <tr>
	     <td class="tc"> Department:</td>
	     <td class="tc">
		     <select name="dpt" id="dpt" class="form-control" readonly>
			     <option value="<?php echo $row['dpt'];?>"><?php echo $row['dpt'];?> </option>
				 <option value="CSE">CSE</option>
				 <option value="MECH">MECH</option>
				 <option value="EC">EC</option>
				 <option value="CIVIL">CIVIL</option>
			 </select>
		 </td>
         <td class="tc">Gender:</td>
	     <td class="tc">
		     <select name="gender" id="gender" class="form-control" readonly>
			     <option value="<?php echo $row['gender'];?>"><?php echo $row['gender'];?> </option>
				 <option value="Male">Male</option>
				 <option value="Female">Female</option>
			 </select>
		 </td>
	 </tr>
     
     <tr>
	     <td class="tc">DOB:</td>
		 <td class="tc">
		    <div class="input-group">
     <input class='form-control' id='dob' name='dob' onBlur="CalculateAge(this)" value="<?php echo $row['dob'];?>" required>
                           <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar" onClick="javascript:NewCssCal ('dob','yyyymmdd')"></span>
                           </span> 
                            </div>
		 </td>	 
		 <td class="tc">Category:</td>
		 <td class="tc">
		     <select name="cat" id="cat" class="form-control">
			     <option value="<?php echo $row['category'];?>"><?php echo $row['category'];?> </option>
				 <option value="OBC">OBC</option>
				 <option value="SC">SC</option>
				 <option value="ST">ST</option>
				 <option value="GEN">GEN</option>
	         </select>   
		 </td>
		 </tr>
	  <tr>
	     <td class="tc">Joining Date:</td>
		 <td class="tc">
		    <div class="input-group">
  <input class='form-control' id='jdate' name='jdate' onBlur="CalculateAge(this)" value="<?php echo $row['jdate'];?>">
                           <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar" onClick="javascript:NewCssCal ('jdate','yyyymmdd')"></span>
                           </span> 
                            </div>
		 </td>	 
		  <td class="tc">Address:</td>
	     <td colspan="3" class="tc">
		     <textarea name="address" id="address" class="form-control" required><?php echo $row['addr'];?></textarea>
		 </td>
		       
		 
		 </tr>
		 <tr>
	     <td class="tc">Qualification:</td>
	     <td class="tc"><input type="text" name="quali" id="quali" class="form-control" value="<?php echo $row['quali'];?>"></td>
         <td class="tc">Experiencence:</td>
	     <td class="tc"><input type="text" name="exp" id="exp" class="form-control" value="<?php echo $row['exp'];?>"></td>
	 </tr>
	 
	 <tr>
	    
         
	 </tr>
	 
	 <tr> 
         <td colspan="4" class="tc">
		 <b style="padding-left:400px;">
		 <input type="submit" value="Update" name="submit" class="btn btn-success">
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
$tid=$_REQUEST['tid'];
$name=$_REQUEST['name'];
$user=$_REQUEST['user'];
$email=$_REQUEST['email'];
$mno=$_REQUEST['mno'];
$dpt=$_REQUEST['dpt'];
$gender=$_REQUEST['gender'];
$dob=$_REQUEST['dob'];
$cat=$_REQUEST['cat'];
$jdate=$_REQUEST['jdate'];
$quali=$_REQUEST['quali'];
$exp=$_REQUEST['exp'];
$address=$_REQUEST['address'];
     
 
$query =mysql_query("update teacher set name='$name',user='$user',email='$email',mno='$mno',dpt='$dpt',gender='$gender',dob='$dob',category='$cat',jdate='$jdate',quali='$quali',exp='$exp',addr='$address' where id='$tid'");
echo '<script type="text/javascript">alert("Teacher Updatation Completed Succesfully");window.location=\'header.php\';</script>';
}
?>
<?php
include "footer.php";
?>	
