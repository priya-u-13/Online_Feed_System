<?php
include "header.php";
//require_once "config.php";
?>
<html>
<head>
<style>
   table{
    	  background-image: url(images/m.jpg) ;
		  background-size:cover;
		   width:50%;
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
<table border="1" cellpadding="15" width="850" height="600">
<td colspan="4" class="tc" ><center>Generate Notice</center></td>
     
	  <tr>
	     <td class="tc">Title:</td>
		
	     <td colspan="3" class="tc">
		    <input type="text" name="tid" id="tid" value="" class="form-control">
		 </td>
         
	 </tr>
	 <tr>
	     <td class="tc">Notice:</td>
		   <td colspan="3" class="tc">
		     <textarea name="mesz" id="mesz" class="form-control" required></textarea>
		 </td>
     </tr>
	 <tr>
	     <td class="tc">Choose Any One</td>
		   <td colspan=3 class="tc">
		     <select name="type" id="type" class="form-control" required>
			 <option value="">Select</option>
			 <option value="teacher">Teacher</option>
			 <option value="student">Student</option>
			 </select>
		 </td>
     </tr>
	 <tr>
	     <td class="tc">File:</td>
		
	     <td colspan=3 class="tc">
		    <input type="file" name="upload" id="upload" value="">
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

</div>
<?php
require_once "config.php";
//Check submit button axistant;
if(isset($_REQUEST['submit']))
{
$mesz=$_REQUEST['mesz'];
$tid=$_REQUEST['tid'];
$type=$_REQUEST['type'];
$file=$_FILES['upload']['name'];
date_default_timezone_set("Asia/Kolkata");
$apply=date("Y-m-d");
                $sourcePath = $_FILES['upload']['tmp_name'];
                $targetPath = "notice/".$file;
                move_uploaded_file($sourcePath,$targetPath) ; 
 
$query =mysql_query("insert into notice (title,mesz,notice,type,apply) values ('$tid','$mesz','$file','$type','$apply')");
echo '<script type="text/javascript">alert("Notice Uploaded Succesfully");window.location=\'profile.php\';</script>';
}
?>
<br>
<div class="container-fluid">

		<!-- Center Column -->
		<div class="col-sm-12">
		
		    <!-- Form --> 
			<div class="panel panel-default">
				<div class="panel-heading" >
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-log-in"></span> 
						View Notice
					</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
                      <table border="1" style="background-color:#87CEFA" cellpadding="9" cellspacing="9" class="table table-bordered">
					  <tr style="background-color:#4682B4;">
					     <th>Sno</th>
						 <th>Title</th>
						 <th>Message</th>
						 <th>File</th>
						 <th>Message To</th>
						 <th>Date</th>
						 <th>Action</th>
					  </tr>
<?php
$i=1;

	$query =mysql_query("select * from notice order by id");
     $records = mysql_num_rows($query);
     while($row = mysql_fetch_array($query))
           {
			   ?>
			   <tr>
				    <th><?php echo $i;?></th>
					<td><?php echo $row['title'];?></td>
					<td><?php echo $row['mesz'];?></td>
					<td><a href="notice/<?php echo $row['notice'];?>">Download</a></td>
					<td><?php echo $row['type'];?></td>
					<td><?php echo $row['apply'];?></td>
					<th>
<a href="note_delete_detail.php?id=<?php echo $row['id'];?>"><input type="submit" value="Delete" class="btn btn-danger"></a>
					</th>
				</tr>
				<?php
				$i++;
		   }
?>
					  </table>
			        </div>

				</div>
			</div>
			
			
		</div><!--/Center Column-->


	</div><!--/container-fluid-->
<?php
include "footer.php";
?>	
