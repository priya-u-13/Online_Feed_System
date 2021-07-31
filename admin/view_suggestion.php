<?php
include "home.php";
require_once'config.php';
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
						View Suggestion
					</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
                      <table border="1" bgcolor="blue" cellpadding="9" cellspacing="9" class="table table-bordered">
					  <tr>
					     <th>Sno</th>
						 <th>Title</th>
						 <th>  Suggestion File</th>
						 <th>Suggestion</th>
						 <th>Suggestion By</th>
						 <th>Date</th>
						 <th>Response</th>
					  </tr>
<?php
$i=1;
     $query =mysql_query("select * from suggestion order by id");
     $records = mysql_num_rows($query);
     while($row = mysql_fetch_array($query))
           {
			   ?>
			   <tr>
				    <th><?php echo $i;?></th>
					<td><?php echo $row['stitle'];?></td>
					<td><a href="feedback/<?php echo $row['sfile'];?>" target="_blank">Download</a></td>
					<td><?php echo $row['suggestion'];?></td>
					<td><?php 
					$tid=$row['tid'];
					$query1 =mysql_query("select * from teacher where id='$tid'");
					$row1 = mysql_fetch_array($query1);
					echo $row1['name'];
					?></td>
					<td><?php echo $row['sdate'];?></td>
					<th>
<a href="suggestion_update_detail .php?id=<?php echo $row['tid'];?>"><input type="submit" value="Response" class="btn btn-info"></a>
<a href="feedback_delete_detail.php?id=<?php echo $row['id'];?>"><input type="submit" value="Delete" class="btn btn-danger"></a>
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
	
