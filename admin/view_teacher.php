<?php
include "header.php";
require_once"config.php";
?>
	<div class="container-fluid">
	<div class="row">
	<div class="col-sm-3"></div>

	<div class="col-sm-6">
	    <form name="suggetionform" id="f1" method="post" action="" enctype="multipart/form-data">
		<table class="table table-bordered">
					  <tr>
					     <th>Name</th>
						 <th><input type="text" name="tid" id="tid" value="" class="form-control"></th>
						 <th><input type="submit" name="s1" id="s1" value="Search" class="btn btn-success"></th>
					  </tr>
					  </table>
					  </form>
	</div>
	<div class="col-sm-3"></div>
	</div>
    </div>
<div class="container-fluid">

		<!-- Center Column -->
		<div class="col-sm-12">
		
		    <!-- Form --> 
			<div class="panel panel-default">
				<div class="panel-heading" >
					<h3 class="panel-title">
						View Teacher's Information
					</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
                      <table border="1" style="background-color:#87CEFA" cellpadding="9" cellspacing="9" class="table table-bordered">
					  <tr style="background-color:#4682B4;">
					     <th>Sno</th>
						 <th>Name</th>
						 <th>Usrename</th>
						 <th>Password</th>
						 <th>Mobile No</th>
						 <th>Department</th>
						 <th>Action</th>
					  </tr>
<?php
$i=1;
          if(isset($_REQUEST['s1']))
{
	$tid=$_REQUEST['tid'];
	$query =mysql_query("select * from teacher where name='$tid' or user='$tid'");
}else{
	$query =mysql_query("select * from teacher order by id");
}
     $records = mysql_num_rows($query);
     while($row = mysql_fetch_array($query))
           {
			   ?>
			   <tr>
				    <th><?php echo $i;?></th>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['user'];?></td>
					<td><?php echo $row['pass'];?></td>
					<td><?php echo $row['mno'];?></td>
					<td><?php echo $row['dpt'];?></td>
					<th>
<a href="teacher_view_detail.php?id=<?php echo $row['id'];?>"><input type="submit" value="View" class="btn btn-success"></a>
<a href="teacher_update_detail.php?id=<?php echo $row['id'];?>"><input type="submit" value="Update" class="btn btn-info"></a>
<a href="teacher_delete_detail.php?id=<?php echo $row['id'];?>"><input type="submit" value="Delete" class="btn btn-danger"></a>
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