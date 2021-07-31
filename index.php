<?php
require_once"config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback Management</title>
    <link  href="CSS/home.css" rel="stylesheet">
	<link href="CSS/bootstrap.css" rel="stylesheet">
	<link href="CSS/custom.css" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body{
	   width: 100%;
            height: 100vh;
            background-image: url(images/4.jpg);
			background-image:no-repeat;
            background-size: cover;
	  
  }
  img{
	  height:410px;
	  width:410px;
  }
  </style>
</head>
<body>
    
<nav>
  <div id="main">
         <nav>
            <!--<img src="images/logo.jpg" alt="logo" width="100" height="80">-->
             <ul>
                 <li>

                     <a href="index.php">HOME</a>
                 </li>
                <li><a href="about.php">ABOUT Us</a></li>
				<li><a href="contact.php">Cantact Us</a></li>			
                </ul>
         </nav>
         </div> 
 </nav>


<div class="container-fluid" >

		
  
        <br>
		<!-- left Column -->
		<div class="col-sm-4">
		
			
		    <!-- Form --> 
			<div class="panel panel-default">
				<div class="panel-heading" style="background:#ef1e1e;">
					<h3 class="panel-title"  >
						<i class="fa fa-arrow-right"></i>
						<b>Log In</b>
					</h3>
				</div>
				<div class="panel-body" style="background-image:url('images/login.jpg');">
					<form name="f1" id="f1" method="post" action="" style="height:400px;">
						<div class="form-group"><br/>
							<input type="text" class="form-control" id="uid" name="uid" placeholder="Username" required>
						</div><br/><br/>
						<div class="form-group">
							<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
							<input type="checkbox" onclick="myFunction()"><b style="color:red;">Show Password</b>
<script>
function myFunction() {
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
						</div><br/><br/>
						<div class="form-group">
							<select class="form-control" id="type" name="type" required>
							<option value="">Select Any One</option>
							<option value="admin">Admin</option>
							<option value="teacher">Teacher</option>
							<option value="student">Student</option>
							
							</select>
						</div><br/><br/><center>
						<button type="submit" id="s1" name="s1" class="btn btn-default">Log In</button><br/><br/>
						</form>
	
<?php
if (isset($_POST['s1']))
{
	@session_start();
$user=$_POST['uid'];
$pass=$_POST['pwd'];
$type=$_POST['type'];
if($type=='admin')
{
	$table='admin';
}else{
	   if($type=='student')
       {
	      $table='student';
       }else{
		       if($type=='teacher')
               {
	             $table='teacher';
               }else{
				   $table='';
                    }
            }
     }
$query =mysql_query("SELECT * FROM $table where user='$user' and pass='$pass'");
$records = mysql_num_rows($query);
$row = mysql_fetch_array($query);
      if ($records==0)
         {
       echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
         }
         else
         {
	      $_SESSION['Id']=$row['id'];
	      $_SESSION['Username']=$row['user'];
          $_SESSION['Pass']=$row['pass'];
          $_SESSION['Aname']=$row['name'];
if($type=='admin')
{
	echo '<script type="text/javascript">alert("Welcome to Admin Panel");window.location=\'admin/profile.php\';</script>';
}else{
	   if($type=='student')
       {
	echo '<script type="text/javascript">alert("Welcome to Student Panel");window.location=\'STUDENT/profile.php\';</script>';
       }else{
		       if($type=='teacher')
               {
	echo '<script type="text/javascript">alert("Welcome to Teacher Panel");window.location=\'TEACHER/profile.php\';</script>';
               }
            }
     }
 echo '<script type="text/javascript">alert("Welcome to Admin Panel");window.location=\'admin/profile.php\';</script>';
//header("location:admin/profile.php");
         } 
}
?>
<a href="forgot_pass.php" style="color:red;">Forget Password ??</a><br/>
				</div>
			</div>

			
			
			
		</div>


	  <!-- Right Column -->
	  <div class="col-sm-8">
<div class="panel panel-default">
				<div class="panel-heading" style="background:#ef1e1e;">
					<h3 class="panel-title"  >
						<i class="fa fa-arrow-right"></i>
						<b>Our Message</b>
					</h3>
				</div>
				</div>
			<!-- Carousel --> 

			<div id="side-carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#side-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#side-carousel" data-slide-to="1"></li>
					<li data-target="#side-carousel" data-slide-to="2"></li>
					<li data-target="#side-carousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<a href="#">
							<img class="img-responsive" src="images/img1.png" alt="">
						</a>
						<div class="carousel-caption">
							<h3>..</h3>
							<p>...</p>
						</div>
					</div>
					<div class="item">
						<a href="#">
							<img class="img-responsive" src="images/img2.jpg" alt="">
						</a>
						<div class="carousel-caption">
							<h3>...</h3>
							<p>...</p>
						</div>
					</div>
					<div class="item">
						<a href="#">
							<img class="img-responsive" src="images/img3.jpg" alt="">
						</a>						<div class="carousel-caption">
							<h3>....</h3>
							<p>.....</p>
						</div>
					</div>	
                    <div class="item">
						<a href="#">
							<img class="img-responsive" src="images/img4.png" alt="">
						</a>
						<div class="carousel-caption">
							<h3>....</h3>
							<p>.....</p>
						</div>
					</div>			 					
				</div>
				<a class="left carousel-control" href="#side-carousel" role="button" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#side-carousel" role="button" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
			
	  </div><!--/Right Column -->

	</div><!--/container-fluid-->
	<br/><br/>
<footer>
		<div class="footer-blurb">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 footer-blurb-item">
						<h3 style="color:blue"><b><i class="fa fa-arrow-right"></i> FEEDBACK</b></h3>
						<img src="images/feedback1.jpg" width="234" height="235">
					</div>
					<div class="col-sm-3 footer-blurb-item">
						<h3 style="color:blue"><b><i class="fa fa-arrow-right"></i>COMPLAINT</b></h3>
                         <img src="images/c1.jpg" width="234" height="235">
					</div>
					<div class="col-sm-3 footer-blurb-item">
						<h3 style="color:blue"><b><i class="fa fa-arrow-right"></i>SUGGESTION</b></h3>
						<img src="images/s1.jpg" width="234" height="235">
					</div>
					<div class="col-sm-3 footer-blurb-item">
						
						<!-- Thumbnails --> 
						<h3 style="color:blue"><b><i class="fa fa-arrow-right"></i>NOTICE</b></h3>
                         <img src="images/n1.png">
							
					</div>

				</div>	
				<!-- /.row -->	
			</div>
        </div>
	
	 <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- IE10 viewport bug workaround -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- Placeholder Images -->
	<script src="js/holder.min.js"></script>
	
</body>
</html>
<!--<div class="container-fluid" >
<div class="col-sm-12"><center>
<b><h1 style="color:white;background-color:red">
Copyright©CSE BALAGHAT
</h1>
</b>
</div>
</div>-->
<?php
include "footer.php";
?>	
