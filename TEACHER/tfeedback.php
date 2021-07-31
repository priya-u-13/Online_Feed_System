<?php
session_start();
require_once "../config.php";
include "header.php";
$tid=$_SESSION['Id'];
$tuser=$_SESSION['Username'];
$tname=$_SESSION['Aname'];
?>
<html>
<head>
<script>
table.ta{
    	  background-image:url(images/m.jpg) ;
		  background-size:cover;
}
th,td.tc{
		padding:5px;
	}
	
</script>
    <link rel="stylesheet" href="CSS/bootstrap.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
<title>feedback from</title>
</head>
<body>
<center>
      
      <h1 style="color:white;font-family:mono;"><u>TEACHER FEEDBACK FORM</u></h1>
	  <h1 style="color:white;font-family:mono;"><b> ABOUT THE COLLEGE</b></h1></center>
	 Dear Teacher's,
	    <p align="center" style="font-size:25px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspIn order to improve the Teaching-Learning environment, to provide adequate amenities
		with <br/>amenities with modern infrastructure in the college your opinion is very valuable to us. you<br/> are
		provided with this feedback from for the same. your information will be kept confidential.</p>
     <center> 
	 <form name="f1" id="f1" method="post" action="">
	 <center>
	 <table style="border:1px solid #000; width: 99%;" border="1px">  
	 <input type="hidden" name="tid" id="tid" value="<?php echo $tid;?>" class="form-control">
	 <input type="hidden" name="tuser" id="tuser" value="<?php echo $tuser;?>" class="form-control">
	 <input type="hidden" name="tname" id="tname" value="<?php echo $tname;?>" class="form-control">
     <tr>
		<th class="tc" style="background-color:red;color:white">S.N.</th>
        <th class="tc" style="background-color:red;color:white">STATEMENT</th>		
		<th class="tc" style="background-color:red;color:white">EXCELLENT</th>		
	    <th class="tc" style="background-color:red;color:white">VERY GOOD</th>		
		<th class="tc" style="background-color:red;color:white">GOOD</th>		
		<th class="tc" style="background-color:red;color:white">SATISFACTORY</th>		
		<th class="tc" style="background-color:red;color:white">POOR</th>		
		<th class="tc" style="background-color:red;color:white">VERY POOR</th>	
     </tr>
     <tr>
		<td class="tc">1</td>
		<td class="tc" style="text-align:left;">
		Cleanliness and Greenery of College Campus 
		</td>
		<td class="tc">
		  <input type='radio' name='f' id='f' value='Ex'  class="form-control" required>
		 
		</td>
		<td class="tc">
		   <input type='radio' name='f' id='f' value='VG' class="form-control" required>
		  
		</td>
		<td class="tc">
		  <input type='radio' name='f' id='f' value='G' class="form-control" required>
		</td>
		<td class="tc">
		  
		  <input type='radio' name='f' id='f' value='S' class="form-control" required>
		</td> 
		<td class="tc">
		 
		  <input type='radio' name='f' id='f' value='P' class="form-control" required>
		</td>
		<td class="tc">
		  
		  <input type='radio' name='f' id='f' value='V' class="form-control" required>
		</td>
     </tr>
     <tr>
		<td class="tc">2</td>
		<td class="tc" style="text-align:left;">Cleanliness of Class Rooms </td>
		<td class="tc">
		  
		  <input type='radio' name='s' id='s' value='Ex' class="form-control" required>
		</td>
		<td class="tc">
		 
		  <input type='radio' name='s' id='s' value='VG ' class="form-control" required>
		</td>
		<td class="tc">
		 
		  <input type='radio' name='s' id='s' value='G' class="form-control" required>
	    </td>
		<td class="tc">
		  
		  <input type='radio' name='s' id='s' value='S' class="form-control" required>
		  </td> 
		<td class="tc">
		  <input type='radio' name='s' id='s' value='P' class="form-control"required>
		  </td>
		<td class="tc">
		  
		  <input type='radio' name='s' id='s' value='VP' class="form-control" required>
		</td>
	 </tr>
	 <tr>
		<td class="tc">3</td>
		<td class="tc" style="text-align:left;">Maintenance and Cleanliness of Toilet/Washrooms </td>
		<td class="tc">
	      
		  <input type='radio' name='t' id='t' value='Ex' class="form-control"required>
		  
		</td>
		<td class="tc">
		  
		  <input type='radio' name='t' id='t' value=' VG' class="form-control" required>
		</td>
		<td class="tc">
		 
		  <input type='radio' name='t' id='t' value='G' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='t' id='t' value='S' class="form-control" required >
		</td> 
		<td class="tc">
		  
		  <input type='radio' name='t' id='t' value='P' class="form-control" required>
		</td>
		<td class="tc">
	      
		  <input type='radio' name='t' id='t' value='VP ' class="form-control" required>
		  </td>
		</tr>
		
		<tr>
		<td class="tc">4</td>
		<td class="tc" style="text-align:left;">Availability of Prescribed Books/Reading Materials in Library</td>
		<td class="tc">
		  <input type='radio' name='fo' id='fo' value='Ex' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='fo' id='fo' value='VG' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='fo' id='fo' value='G'class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='fo' id='fo' value='S' class="form-control" required>
		</td> 
		<td class="tc">
		  <input type='radio' name='fo' id='fo' value='P' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='fo' id='fo' value='VP ' class="form-control"required>
		</td>
		</tr>
		<tr>
		<td>5</td>
		<td style="text-align:left;">Internal Facility in the Library/Campus</td>
		<td>
		  <input type='radio' name='fi' id='fi' value='Ex' class="form-control" required>
		</td>
		<td>
		  <input type='radio' name='fi' id='fi' value='VG' class="form-control"required>
		</td>
		<td>
		  <input type='radio' name='fi' id='fi' value='G' class="form-control"required>
		</td>
		<td>
		  <input type='radio' name='fi' id='fi' value='S' class="form-control" required>
		</td> 
		<td>
		  <input type='radio' name='fi' id='fi' value='P' class="form-control" required>
		</td>
		<td>
		  <input type='radio' name='fi' id='fi' value='VP ' class="form-control" required>
		</td>
		</tr>
		<tr>
		<td>6</td>
		<td style="text-align:left;">Well maintained Notice/Display Board</td>
		<td>
		  <input type='radio' name='six' id='six' value='Ex' class="form-control" required>
		</td>
		<td>
		  <input type='radio' name='six' id='six' value='VG ' class="form-control" required>
		</td>
		<td>
		  <input type='radio' name='six' id='six' value='G' class="form-control" required>
		</td>
		<td>
		  <input type='radio' name='six' id='six' value='S' class="form-control" required>
		</td> 
		<td>
		  <input type='radio' name='six' id='six' value='P' class="form-control" required>
		</td>
		<td>
		  <input type='radio' name='six' id='six' value='VP ' class="form-control"required>
		</td>
		</tr>
		
		<tr>
		<td>7</td>
		<td style="text-align:left;">Availability Of Clean and hygienic drinking water</td>
		<td><input type='radio' name='se' id='se' value='Ex' class="form-control" required>
	    </td>
		<td>
		  <input type='radio' name='se' id='se' value='VG' class="form-control"required>
		</td>
		<td>
		  <input type='radio' name='se' id='se' value='G' class="form-control"required>
		</td>
		<td>
		  <input type='radio' name='se' id='se' value='S' class="form-control"required>
		</td> 
		<td>
		  <input type='radio' name='se' id='se' value='P' class="form-control" required>
		</td>
		<td>
		  <input type='radio' name='se' id='se' value='VP' class="form-control"required>
		</td>
		</tr>
		<td>8</td>
		<td style="text-align:left;">Availability Of First-aid facility in the College Campus</td>
		<td><input type='radio' name='e' id='e' value='Ex' class="form-control" required>
		</td>
		<td>
		  <input type='radio' name='e' id='e' value='VG' class="form-control"required>
		</td>
		<td>
		  <input type='radio' name='e' id='e' value='G' class="form-control" required>
		</td>
		<td>
		  <input type='radio' name='e' id='e' value='S' class="form-control" required>
		</td> 
		<td>
		  <input type='radio' name='e' id='e' value='P' class="form-control" required>
		</td>
		<td>
		  <input type='radio' name='e' id='e' value='VP' class="form-control" required>
		</td>
		</tr>
		
		
		<td>9</td>
		<td style="text-align:left;">Electrical Power Supply and Back-up systems the Building</td>
		<td><input type='radio' name='nin' id='nin' value='Ex' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='nin' id='nin' value='VG' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='nin' id='nin' value='G' class="form-control" />
		</td>
		<td>
		  <input type='radio' name='nin' id='nin' value='S' class="form-control"/>
		</td> 
		<td>
		  <input type='radio' name='nin' id='nin' value='P' class="form-control"/>
		</td>
		<td>
		  <input type='radio' name='nin' id='nin' value='VP' class="form-control"/>
		</td>
		</tr>
		<tr>
		
		<td>10</td>
		<td style="text-align:left;">Facility of Smart Classrooms </td>
		<td><input type='radio' name='ten' id='ten' value='Ex' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='ten' id='ten' value='VG' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='ten' id='ten' value='G' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='ten' id='ten' value='S' class="form-control" required />
		</td> 
		<td>
		  <input type='radio' name='ten' id='ten' value='P' class="form-control" required />
		</td>
		<td> 
		  <input type='radio' name='ten' id='ten' value='VP' class="form-control" required />
		</td>
		</tr>
		
		
		
		 <tr><th colspan="6"></th>
	     <th colspan="2">
		         <input type="submit" name="submit" id="submit" value="SUBMIT" class="btn btn-success">
			     
		 </th>
	 </tr>
		</table>
		</form>
<?php

//Check submit button axistant;
if(isset($_REQUEST['submit']))
{
$tid=$_REQUEST['tid'];
$tname=$_REQUEST['tname'];
$tuser=$_REQUEST['tuser'];
$s1=$_REQUEST['f'];
$s2=$_REQUEST['s'];
$s3=$_REQUEST['t'];
$s4=$_REQUEST['fo'];
$s5=$_REQUEST['fi'];
$s6=$_REQUEST['six'];
$s7=$_REQUEST['se'];
$s8=$_REQUEST['e'];
$s9=$_REQUEST['nin'];
$s10=$_REQUEST['ten'];

date_default_timezone_set("Asia/Kolkata");
$apply=date("Y-m-d");
$status="pending";
 
$query =mysql_query("insert into t_feedback (tid,tuser,tname,s1,s2,s3,s4,s5,s6,s7,s8,s9,s10,apply,status) values ('$tid','$tuser','$tname','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$apply','$status')");
echo '<script type="text/javascript">alert("Feedback Submitted Succesfully");window.location=\'profile.php\';</script>';
}
?>		
</body>
</html>
