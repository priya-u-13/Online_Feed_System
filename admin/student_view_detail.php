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
<body >
<div class="table-responsive">
<form name="form1" method="post" enctype="multipart/form-data">
<center>
<table border="1" style="width:75%;">
<h1 style="color:white;font-family:mono;"><center>STUDENT INFORMATION </center></h1>
     <tr>
	     <td class="tc">Name:</td>
		 <td class="tc"><?php echo $row['name'];?></td>
         <td class="tc">Username</td>
		 <td class="tc"><?php echo $row['user'];?></td>
	 </tr>
     
     <tr>
	     <td class="tc">Email ID:</td>
	     <td class="tc"><?php echo $row['email'];?></td>
         <td class="tc">Mobile No:</td>
	     <td class="tc"><?php echo $row['mno'];?></td>
	 </tr>
     <tr>
	     <td class="tc"> Branch Name:</td>
	     <td class="tc">
		     <?php echo $row['branch_name'];?>
		 </td>
         <td class="tc">Gender:</td>
	     <td class="tc">
		     <?php echo $row['gender'];?>
		 </td>
	 </tr>
     
     <tr>
	     <td class="tc">DOB:</td>
		 <td class="tc">
		    <?php echo $row['dob'];?>
		 </td>	 
		 <td class="tc">Category:</td>
		 <td>
		     <?php echo $row['category'];?> 
		 </td>
		 </tr>
	  <tr>
	     <td class="tc">Student Type:</td>
		 <td class="tc">
		    <?php echo $row['stype'];?>
		 </td>	
 <td class="tc">Address:</td>
	     <td colspan="3" class="tc">
		    <?php echo $row['address'];?>
		 </td>
         
	 		 
		 
		 </tr>
		 <tr>
	     <td class="tc">Semester:</td>
	     <td class="tc"><?php echo $row['semester'];?></td>
         <td class="tc">Year:</td>
	     <td class="tc"><?php echo $row['yr'];?></td>
	 </tr>
	 
	 
	    

	
</table>
</form></td></tr>
</div>
</body>
</html>
