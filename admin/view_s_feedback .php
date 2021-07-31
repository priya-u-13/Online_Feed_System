<?php
include "header.php";
require_once'config.php';
$query =mysql_query("update s_feedback set status='confirm' where status='pending'");
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
						 <th>S11</th>
						 <th>S12</th>
						 <th>S13</th>
						 <th>S14</th>
						 <th>S15</th>
						 <th>S16</th>
						 <th>S17</th>
						 <th>S18</th>
						 <th>S19</th>
						 <th>S20</th>
						 <th>Teacher Name</th>
						 <th>Teacher</th>
						 <th>T1</th>
						 <th>T2</th>
						 <th>T3</th>
						 <th>T4</th>
						 <th>T5</th>
						 <th>T6</th>
						 <th>T7</th>
						 <th>T8</th>
						 <th>T9</th>
						 <th>T10</th>
						 <th>T11</th>
						 <th>Apply</th>
						 <th colspan=2>Response</th> </tr> </thead> 
						 <tbody> 
<?php
$i=1;
     $query =mysql_query("select * from s_feedback order by id");
     $records = mysql_num_rows($query);
     while($row = mysql_fetch_array($query))
           {
			   ?>
			   <tr>
				    <th><?php echo $i;?></th>
					<td><?php 
					$tid=$row['tid'];
					$query1 =mysql_query("select * from student where id='$tid'");
					$row1 = mysql_fetch_array($query1);
                     echo $row1['name'];
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
					<td><?php echo $row['s11'];?></td>
					<td><?php echo $row['s12'];?></td>
					<td><?php echo $row['s13'];?></td>
					<td><?php echo $row['s14'];?></td>
					<td><?php echo $row['s15'];?></td>
					<td><?php echo $row['s16'];?></td>
					<td><?php echo $row['s17'];?></td>
					<td><?php echo $row['s18'];?></td>
					<td><?php echo $row['s19'];?></td>
					<td><?php echo $row['s20'];?></td>
					<td><?php echo $row['teach_name'];?></td>
					<td><?php echo $row['teach_sub'];?></td>
					<td><?php echo $row['p1'];?></td>
					<td><?php echo $row['p2'];?></td>
					<td><?php echo $row['p3'];?></td>
					<td><?php echo $row['p4'];?></td>
					<td><?php echo $row['p5'];?></td>
					<td><?php echo $row['p6'];?></td>
					<td><?php echo $row['p7'];?></td>
					<td><?php echo $row['p8'];?></td>
					<td><?php echo $row['p9'];?></td>
					<td><?php echo $row['p10'];?></td>
					<td><?php echo $row['p11'];?></td>
					<td><?php echo $row['apply'];?></td>
					<th>
<a href="feedback_update_detail1.php?id=<?php echo $row['tid'];?>"><input type="submit" value="Response" class="btn btn-info"></a></th>
<th><a href="s_feedback_delete_detail.php?id=<?php echo $row['id'];?>"><input type="submit" value="Delete" class="btn btn-danger"></a></th>
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

