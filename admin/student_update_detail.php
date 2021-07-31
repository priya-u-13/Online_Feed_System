<?php
include "header.php";
//require_once "../config.php";
$tid=$_GET['id'];
$query =mysql_query("select * from student where id='$tid'");
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
		padding: 5px;
	}
</style>
<script src="datetimepicker_css.js"></script>
</head>
<body><center>
<div class="table-responsive">
<form name="form1" method="post" enctype="multipart/form-data">
<center>
<center><h1 style="color:white;font-family:mono;">STUDENT'S INFORMATION UPDATE </h1></center>
<table border="1" style="width:75%;">

     <tr>
	     <td class="tc">Name:</td>
		 <td class="tc"><input type="hidden" name="tid" id="tid" class="form-control" value="<?php echo $row['id'];?>" >
		 <input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name'];?>" ></td>
         <td class="tc">Enroll</td>
		 <td class="tc"><input type="text" name="enroll" id="enroll" class="form-control" value="<?php echo $row['enroll'];?>" readonly></td>
	 </tr>
     
     <tr>
	     <td class="tc">Email ID:</td>
	     <td class="tc"><input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email'];?>" ></td>
         <td class="tc">Mobile No:</td>
	     <td class="tc"><input type="text" name="mno" id="mno" class="form-control" value="<?php echo $row['mno'];?>" ></td>
	 </tr>
     <tr>
	     <td class="tc">Branch Name:</td>
	     <td class="tc">
		     <select name="dpt" id="dpt" class="form-control">
			     <option value="<?php echo $row['branch_name'];?>"><?php echo $row['branch_name'];?> </option>
				 <option value="CSE">CSE</option>
				 <option value="MECH">MECH</option>
				 <option value="EC">EC</option>
				 <option value="CIVIL">CIVIL</option>
			 </select>
		 </td>
         <td class="tc">Gender:</td>
	     <td class="tc">
		     <select name="gender" id="gender" class="form-control">
		    <option value="<?php echo $row['gender'];?>"><?php echo $row['gender'];?></option>
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
		     <select name="category" id="category" class="form-control">
			     <option value="<?php echo $row['category'];?>"><?php echo $row['category'];?> </option>
				 <option value="OBC">OBC</option>
				 <option value="SC">SC</option>
				 <option value="ST">ST</option>
				 <option value="GEN">GEN</option>
	         </select>   
		 </td>
		 </tr>
	  <tr>
	     <td class="tc">Student Type:</td>
		
<td class="tc"><input type="text" name="stype" id="stype" class="form-control" value="<?php echo $row['stype'];?>"></td>
		 
		
		 <td>
		       
		 </td>
		 </tr>
		 <tr>
	     <td class="tc">year:</td>
	     <td class="tc"><input type="text" name="yr" id="yr" class="form-control" value="<?php echo $row['yr'];?>"></td>
         <td class="tc">semester:</td>
	     <td class="tc"><input type="text" name="semester" id="semester" class="form-control" value="<?php echo $row['semester'];?>"></td>
	 </tr>
	 
	 <tr>
	     <td class="tc">Address:</td>
	     <td colspan="3" class="tc">
		     <textarea name="address" id="address" class="form-control" required><?php echo $row['address'];?></textarea>
		 </td>
         
	 </tr>
	 
	 <tr> 
         <td colspan="3"></td><td class="tc">
		 
		 <input type="submit" value="Update" name="submit" class="btn btn-success">
	
		</td>
	 </tr>
	
</table>
</form>
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
$enroll=$_REQUEST['enroll'];
$email=$_REQUEST['email'];
$mno=$_REQUEST['mno'];
$branch_name=$_REQUEST['dpt'];
$gender=$_REQUEST['gender'];
$dob=$_REQUEST['dob'];
$category=$_REQUEST['category'];
$stype=$_REQUEST['stype'];
$yr=$_REQUEST['yr'];
$semester=$_REQUEST['semester'];
$address=$_REQUEST['address'];
     
 $query =mysql_query("update student set name='$name',enroll='$enroll',email='$email',mno='$mno',branch_name='$branch_name',gender='$gender',dob='$dob',category='$category',stype='$stype',yr='$yr',semester='$semester',address='$address' where id='$tid'");
echo '<script type="text/javascript">alert("Student Updatation Completed Succesfully");window.location=\'view_student.php\';</script>';
}
?>
<?php
include "footer.php";
?>	
