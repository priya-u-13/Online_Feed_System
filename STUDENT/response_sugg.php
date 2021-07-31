<?php
include "header.php";
session_start();
require_once "../config.php";
$id=$_SESSION['Id'];
$tuser=$_SESSION['Username'];
$tname=$_SESSION['Aname'];
?>
	<div class="container-fluid">

    </div>
<div class="container-fluid">

		<!-- Center Column -->
		<div class="col-sm-12">
		
		    <!-- Form --> 
			<div class="panel panel-default">
				<div class="panel-heading" >
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-log-in"></span> 
						Suggestion Response
					</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
                      <table border="1" style="background-color:#87CEFA" style="padding: 1px;" class="table table-bordered">
					  <tr style="background-color:#4682B4;" style="padding: 1px;">
					     <th>Sno</th>
						 <th>Response</th>
						 <th>Date</th>
					  </tr>
<?php
//session_start();
$i=1;

	$query =mysql_query("select * from sugg_response where tid='$id' order by id");
     $records = mysql_num_rows($query);
     while($row = mysql_fetch_array($query))
           {
			   ?>
			   <tr style="padding: 1px;">
				    <th><?php echo $i;?></th>
					<td><?php echo $row['response'];?></td>
					<td><?php echo $row['apply'];?></td>
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
	

