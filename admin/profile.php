<?php
include "header.php";
@session_start();
//require_once "../config.php";
$tid=$_SESSION['Id'];
$tuser=$_SESSION['Username'];
$tname=$_SESSION['Aname'];
?>

<div class="container-fluid" >

		<!-- Left Column -->
		<div class="col-sm-4">

			<!-- List-Group Panel -->
			<div class="panel panel-default">
				<div class="panel-heading" style="color:;background:#ef1e1e;">
					<h1 class="panel-title"  ><i class="fa fa-arrow-right"></i> <b>JEC JABALPUR</b> </h1>
				</div>
				<div class="list-group">
			
					<?php
						$id=$_SESSION['Id'];
						$query=mysql_query("select * from admin where id='$id'");
                        $records=mysql_num_rows($query);
                        $row=mysql_fetch_array($query);
						?>
						<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
						<form class="form-light mt-20" name="form" id="form" action="" method="post">
							
							<div class="row">
								
								<div class="col-md-12">
									<div class="form-group">
                                        <label>Username</label>
								<input type="text" name="user" id="user" class="form-control" value="<?php echo $row['user'];?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Name</label>
								<input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name'];?>">
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Mobile No</label>
										<input type="text" name="mob" id="mob" class="form-control" value="<?php echo $row['mob'];?>">
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
                                        <label>Email</label>
								<input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email'];?>">
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
                                        <label>Security Question</label>
								<select  name="sques" class="form-control" class="sques">
      <option value="<?php echo $row['sques'];?>"><?php echo $row['sques'];?></option>
      <option value="Who's your daddy?">Who's your daddy?</option>
      <option value="What is your favorite color?" >What is your favorite color?</option>
      <option value="What is your mother's favorite aunt's favorite color?">What is your mother's favorite aunt's favorite color?</option>
      <option value="Where does the rain in Spain mainly fall?">Where does the rain in Spain mainly fall?</option>
      <option value="If Mary had three apples, would you steal them?">If Mary had three apples, would you steal them?</option>
      <option value="What brand of food did your first pet eat?">What brand of food did your first pet eat?</option>
   </select>
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Security Answer</label>
										<input type="text" name="ans" id="ans" class="form-control" value="<?php echo $row['ans'];?>">
									</div>
								</div>
								
							</div>
							
							<input type="submit" name="s1" id="s1" value="Change Profile" class="btn btn-two" style="background: #ae130c;color:white;">
						</form>
<?php
     if(isset($_REQUEST['s1']))
{
///session_start();
$id=$_SESSION['Id'];
					$a1=$_POST['user'];
					$a2=$_POST['email'];
					$a3=$_POST['mob'];
					$name=$_POST['name'];
					$sques=$_POST['sques'];
					$ans=$_POST['ans'];
					
					$query =mysql_query("Update admin  set email='".$a2."',mob='".$a3."',user='".$a1."',name='".$name."',sques='".$sques."',ans='".$ans."' where id='$id'");
						//$sql="Update  into admin set user='".$a1."', email='".$a2."', mob='".$a3."', ques='".$a4."' where id='$id'";
						echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'profile.php\';</script>';
}
?>
						</div>
						<div class="col-md-2"></div>
					  </div>
				</div>
			</div>

		</div>
  <div class="col-sm-4">
  </div>
  
		<!-- Center Column -->
		<div class="col-sm-8">
		
			
		    <!-- Form --> 
			<div class="panel panel-default">
				<div class="panel-heading" style="background:#ef1e1e;">
					<h3 class="panel-title"  >
						<i class="fa fa-arrow-right"></i>
						<b>Our Branches</b>
					</h3>
				</div>
				<div class="panel-body" style="background-image:url('images/login.jpg');">


<div class="container-fluid">
   <div class="col-sm-12">
        <div class="col-sm-6" >
           <font color="red"><h1>CIVIL</h1></font color>
           <img src="images/civil.png" width="300" height="200" >
	       <br>				
           <font color="white"><i>The Department started in the year of 1962.
            The Department has fully equipped material Testing laboratory,survey Lab,
            Hydraulics Lab and Applied Mechanics Lab. </i></font color>
        </div>
        <div class="col-sm-6">
           <font color="red"><h1>MECHANICAL</h1></font color>
           <img src="images/mech.png" width="300" height="200" ><br>
           <font color="white"><i>The Department started in the year 1963. The present intake capacity is 66.
            having six ragular faculty and other suooorting staff.   </i></font color>
        </div>
   </div>
   <div class="col-sm-12">
       <div class="col-sm-6">
         <font color="red"><h1>ELECRTICAL</h1></font color>
         <img src="images/electrical.gif" width="300" height="200" >
         <font color="white"><i>This department started in the year1963. The present intake capacity is 66. 
          having  five regular faculty and other supporting staff.</i></font color>
      </div>
      <div class="col-sm-6">
         <font color="red"><h1>COMP.SC.</h1></font color>
         <img src="images/comp1.png" width="300" height="200" >
         <font color="white"><i>The Department of computer science and Engineering(CSE)Was established in 2006. </i></font color>
      </div>	
     </div>
   </div>	
</div>									
</div>
</div>
</div><!--/Center Column-->
</div><!--/container-fluid-->
</body>
</html>
<!--<div class="container-fluid" >
    <div class="col-sm-12"><center>
          <b><h1 style="color:black;background-color:red">
            Copyright© CSE BALAGHAT
            </h1>
</b>
</div>
</div>-->