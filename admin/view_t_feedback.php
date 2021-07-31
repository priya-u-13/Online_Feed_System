<?php
include "header.php";
require_once'config.php';

	$query =mysql_query("update t_feedback set status='confirm' where status='pending'");

?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
</head>
<body>
<table id="example" class="display" style="width:100%"> <thead> 
<tr> <th>Sno</th>
						 <th>Feedback&nbsp;By</th>
						 <th>S1</th>
						 <th>S2</th>
						 <th>S3</th>
						 <th>S4</th>
						 <th>S5</th>
						 <th>S6</th>
						 <th>S7</th>
						 <th>S8</th>
						 <th>S9</th>
						 <th>S10</th>
						 <th>Apply</th>
						 <th>Response</th> </tr> </thead> 
						 <tbody> 
						 
<?php
$i=1;
     $query =mysql_query("select * from t_feedback order by id");
     $records = mysql_num_rows($query);
     while($row = mysql_fetch_array($query))
           {
			   ?>
			   <tr>
				    <th><?php echo $i;?></th>
					<td><?php 
					$tid=$row['tid'];
					$query1 =mysql_query("select * from teacher where id='$tid'");
					$row1 = mysql_fetch_array($query1);
                     echo $row['tuser'];
					?></td>

					<td><?php echo $row['s1'];?></td>
					<td><?php echo $row['s2'];?></td>
					<td><?php echo $row['s3'];?></td>
					<td><?php echo $row['s4'];?></td>
					<td><?php echo $row['s5'];?></td>
					<td><?php echo $row['s6'];?></td>
					<td><?php echo $row['s7'];?></td>
					<td><?php echo $row['s8'];?></td>
					<td><?php echo $row['s9'];?></td>
					<td><?php echo $row['s10'];?></td>
					<td><?php echo $row['apply'];?></td>
					<th>
<a href="feedback_update_detail.php?id=<?php echo $row['tid'];?>"><input type="submit" value="Response" class="btn btn-info"></a>
<a href="feedback_delete_detail.php?id=<?php echo $row['id'];?>"><input type="submit" value="Delete" class="btn btn-danger"></a>
					</th>
				</tr>
				<?php
				$i++;
		   }
?>
</tbody>						 </table>




<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' )
                        .prepend(
                            '<img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;" />'
                        );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                }
            }
        ]
    } );
} );
</script>
</body>
</html>