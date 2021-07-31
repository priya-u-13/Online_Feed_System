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
<body >
<div class="table-responsive">
<form name="form1" method="post" enctype="multipart/form-data">
<center>
<table border="1" cellpadding="15">
<th colspan="4" class="tc" ><center>TEACHER'S REGISTRATION FORM </center></th>
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
	     <td class="tc"> Department:</td>
	     <td class="tc">
		     <?php echo $row['dpt'];?>
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
	     <td class="tc">Joining Date:</td>
		 <td class="tc">
		    <?php echo $row['jdate'];?>
		 </td>	
 <td class="tc">Address:</td>
	     <td colspan="3" class="tc">
		    <?php echo $row['addr'];?>
		 </td>
         
	 		 
		 
		 </tr>
		 <tr>
	     <td class="tc">Qualification:</td>
	     <td class="tc"><?php echo $row['quali'];?></td>
         <td class="tc">Experiencence:</td>
	     <td class="tc"><?php echo $row['exp'];?></td>
	 </tr>
</table>
</form></td></tr>
</div>
</body>
</html>
<?php
include "footer.php";
?>	
