<?php
include "header.php";
require_once'config.php';
$query =mysql_query("update s_suggestion set status='confirm' where status='pending'");
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
						View Student's Suggestion
					</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
                      <table border="1" style="background-color:#87CEFA;" cellpadding="9" cellspacing="9" class="table table-bordered">
					  <tr style="background-color:#4682B4;font-size:16px;">
					     <th>Sno</th>
						 
						 <th>Suggestion id</th>
						 <th>Title</th>
						 <th>Suggestion</th>
						 <th>Suggestion By</th>
						 <th>Download</th>
						 <th>Date</th>
						 <th>Response</th>
					  </tr>
<?php
$i=1;
     $query =mysql_query("select * from s_suggestion order by id");
     $records = mysql_num_rows($query);
     while($row = mysql_fetch_array($query))
           {
			   ?>
			   <tr>
				    <th><?php echo $i;?></th>
					<td><?php echo $row['sugg_id'];?></td><td><?php echo $row['stitle'];?></td>
					<td><?php echo $row['sugg'];?></td>
					<td><?php 
					$tid=$row['tid'];
					$query1 =mysql_query("select * from student where id='$tid'");
					$row1 = mysql_fetch_array($query1);
					echo $row1['name'];
					?></td>
					<td><a href="../STUDENT/suggestion/<?php echo $row['sfile'];?>" target="_blank">Download</a></td>
					<td><?php echo $row['sdate'];?></td>
					<th>
<a href="s_suggestion_update_detail.php?id=<?php echo $row['tid'];?>"><input type="submit" value="Response" class="btn btn-info"></a>
<a href="s_suggestion_delete_detail.php?id=<?php echo $row['id'];?>"><input type="submit" value="Delete" class="btn btn-danger"></a>
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
	
