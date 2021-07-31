<?php
session_start();
//require_once "../config.php";
include "header.php";
$tid=$_SESSION['Id'];
$tuser=$_SESSION['Username'];
$tname=$_SESSION['Aname'];
?>
<script language="javascript" type="text/javascript" src="http://api.jquery.com/jQuery.ajax"></script>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<div class="container-fluid" >

		<!-- Left Column -->
		<div class="col-sm-3">
		</div>
  
  
		<!-- Center Column -->
		<div class="col-sm-6">
		
			
		    <!-- Form --> 
			<div class="panel panel-default">
				<div class="panel-heading" style="background:#ef1e1e;">
					<h3 class="panel-title"  >
						<i class="fa fa-arrow-right"></i>
						<b>Change Password</b>
					</h3>
				</div>
				<div class="panel-body" style="background-image:url('images/login.jpg');">
<form class='form-horizontal' role='form' action="" method="post">
<div class="table-responsive">
<table class="table table-striped table-bordered">
<tr>             
<td>Current Password <b style='color:red;'>*</b></td>
<td> <input class='form-control' type="password" name="cpass" id="cpass"  required></td>
</tr>
<tr>
<td>New Password <b style='color:red;'>*</b></td>
<td><input class='form-control' type="password" name="password" id="password"  required>
<input type="checkbox" onclick="myFunction()">Show Password
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script></td>
</tr>
<tr>
<td>Confirm Password <b style='color:red;'>*</b></td>
<td> <input class='form-control' type="password" name="confirm_password" id="confirm_password"  required></td>
</tr>
<tr>

<td><button class="btn btn-danger" type='submit' id="submit" name="submit" style="font-size:12px;">Change Password</button></td>
</tr>

</table>
</div>
</form>
<script>
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
  </script>
<?php
if(isset($_POST['submit']))
{
$cpass=$_POST['cpass'];
$npass=$_POST['password'];
$user=$_SESSION['Id']; 
$sql =mysql_query("select * from admin where id='$user'");  
// Loop through each records 
while($row = mysql_fetch_array($sql))
{
$pass=$row['pass'];

if($pass==$cpass)
{
$sql=
$sql = mysql_query("Update admin set pass='".$npass."' where id='$user'");
// Execute query
//mysql_query($sql,$con);
// Close The Connection
//mysql_close($con);
echo '<script type="text/javascript">alert("Password Updated Succesfully");window.location=\'profile.php\';</script>';
}else
{
echo '<script type="text/javascript">alert("wrong current password ");window.location=\'change_pass.php\';</script>';
}
}
}
?>							

				</div>
			</div>

			
			
			
		</div><!--/Center Column-->
<div class="col-sm-3">
		</div>

	</div><!--/container-fluid-->

<?php
include "footer.php";
?>	