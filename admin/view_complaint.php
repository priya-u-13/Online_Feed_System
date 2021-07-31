<?php
include "header.php";
require_once'config.php';
$query =mysql_query("update complaint set status='confirm' where status='pending'");
?>
	<div class="container-fluid">
	<div class="row">
	    
	</div>
    </div>
<div class="container-fluid">

		<!-- Center Column -->
		<div class="col-sm-12">
		
		    <!-- Form --> 
			<div class="panel panel-default">
				<div class="panel-heading" >
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-log-in"></span> 
						View Complaint
					</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
                      <table border="1" style="background-color:#87CEFA" cellpadding="9" cellspacing="9" class="table table-bordered">
					  <tr style="background-color:#4682B4;">
					     <th >Sno</th>
						 <th>Title</th>
						 
						 <th>Complaint</th>
						 <th>Solution according your view</th>
						 <th>Complaint By</th>
						 <th>Download</th>
						 <th>Date</th>
						 <th>Response</th>
					  </tr>
<?php
$i=1;
     $query =mysql_query("select * from complaint order by id");
     $records = mysql_num_rows($query);
     while($row = mysql_fetch_array($query))
           {
			   ?>
			   <tr>
				    <th><?php echo $i;?></th>
					<td><?php echo $row['ctitle'];?></td>
					<td><?php echo $row['complaint'];?></td>
					<td><?php echo $row['think'];?></td>
					
					<td><?php 
					$tid=$row['tid'];
					$query1 =mysql_query("select * from student where id='$tid'");
					$row1 = mysql_fetch_array($query1);
					echo $row1['name'];
					?></td>
					<td><a href="../STUDENT/complaint/<?php echo $row['cfile'];?>" target="_blank">Download</a></td>
					<td><?php echo $row['cdate'];?></td>
					<th>
<a href="complaint_update_detail.php?id=<?php echo $row['tid'];?>"><input type="submit" value="Response" class="btn btn-info"></a>
<a href="complaint_delete_detail.php?id=<?php echo $row['id'];?>"><input type="submit" value="Delete" class="btn btn-danger"></a>
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
	
