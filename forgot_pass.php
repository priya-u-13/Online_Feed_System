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
  </style>
</head>
<body>

    <h1 class="heading">FEEDBACK MANAGEMENT SYSTEM</h1>
<nav>
  
      <div id="main">
         <nav>
            <img src="images/logo.jpg" alt="logo" width="100" height="80">
             <ul>
                 <li>

                     <a href="index.php">HOME</a>
                 </li>
                <li><a href="#">About College</a></li>
							<li><a href="#"> Vision & Mission</a></li>
							<li><a href="#">Placement</a></li>
                
                                  
             </ul>
         </nav>
         
      </div> 
 </nav>
<marquee style="background-color:lightblue;font-size:20px;color:red;"><b>Government Polytechnic College Balghat</b></marquee>
<div class="container-fluid" >

		<!-- Left Column -->
		<div class="col-sm-4">

			<!-- List-Group Panel -->
			<div class="panel panel-default">
				<div class="panel-heading" style="color:;background:#ef1e1e;">
					<h1 class="panel-title"  ><i class="fa fa-arrow-right"></i> <b>GPC BALAGHAT</b> </h1>
				</div>
				<div class="list-group">
			
					<img src="images/h10.png" width="408" height="200" ><br/><br/>
					<p style="font-family:Monotype corsiva;font-size:16px;text-align:center;"><b>Government polytechnic College Balaghat(MP) established in  July 1962 under Open door policy of central Government Initially it was
					run by a society and became a Government Institute in the year 1984. The area of this college is about 10 Acres  surrounded by a 
					wainganga river and a dense teak wood forest.Our college is approved by AICTE and running four diploma cources named Civil,Machanical,Electrical and Comm. Sc. and Egg. 
					affilited toTechnical Univercity RGPV ,Bhopal (mp). The college produces highly  skilled  technicians which are well placed in reputed
					compnies through campus placement and direct recruitment.</b></p>
					
				</div>
			</div>

		</div>
  
  
		<!-- Center Column -->
		<div class="col-sm-4">
		
			
		    <!-- Form --> 
			<div class="panel panel-default">
				<div class="panel-heading" style="background:#ef1e1e;">
					<h3 class="panel-title"  >
						<i class="fa fa-arrow-right"></i>
						<b>Forgot Password</b>
					</h3>
				</div>
				<div class="panel-body" style="background-image:url('images/login.jpg');">
					
					<form id="f1" name="f1" method="post" action="">
				  <div>
					</br>
					<input type="text" id="email" name="email" class="form-control" placeholder="Email Id" required> 
				  </div>
				  <div>
					</br>
					<input type="text" id="mob" name="mob" class="form-control" placeholder="Mobile No" required> 
				  </div></br>
				  <div>
					</br>
				  <select class="sques" name="sques" class="form-control">
      <option value="">Select Security Question???</option>
      <option value="Who's your daddy?">Who's your daddy?</option>
      <option value="What is your favorite color?">What is your favorite color?</option>
      <option value="What is your mother's favorite aunt's favorite color?">What is your mother's favorite aunt's favorite color?</option>
      <option value="Where does the rain in Spain mainly fall?">Where does the rain in Spain mainly fall?</option>
      <option value="If Mary had three apples, would you steal them?">If Mary had three apples, would you steal them?</option>
      <option value="What brand of food did your first pet eat?">What brand of food did your first pet eat?</option>
   </select>
   </div></br>
   <div>
					</br>
					<input type="text" id="ans" name="ans" class="form-control" placeholder="Security Answer" required> 
				  </div></br>
				  <input type="submit" id="s1" name="s1" value="Forgot Password" class="btn btn-default">
			    </form><br>
				<a class="forgot" href="index.php" style="color:red;">Admin Login</a>
<?php
														if(isset($_POST['s1']))
														{
$mob=$_REQUEST['mob'];
$email=$_REQUEST['email'];
$sques=$_POST['sques'];
					$ans=$_POST['ans'];

$con=@mysql_connect("localhost","root","");
     mysql_select_db("rform",$con);
$sql="select * from admin where mob='$mob' and email='$email' and sques='$sques' and ans='$ans'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Mobile or Email");window.location=\'forgot_pass.php\';</script>';
}
else
{
	
    $user=$row['user'];
    $pass=$row['pass'];
	echo "<br>";echo "<br>";
	echo "<b style=\"color:red;\">";
echo "Username is: $user";
echo "<br>";
echo "Password is: $pass";
echo "</b>";
} 
mysql_close($con);
														}

?>
				</div>
			</div>

			
			
			
		</div><!--/Center Column-->


	  <!-- Right Column -->
	  <div class="col-sm-4">
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
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<a href="#">
							<img class="img-responsive" src="forest/p2.jpg" alt="">
						</a>
						<div class="carousel-caption">
							<h3>..</h3>
							<p>...</p>
						</div>
					</div>
					<div class="item">
						<a href="#">
							<img class="img-responsive" src="forest/1.jpg" alt="">
						</a>
						<div class="carousel-caption">
							<h3>...</h3>
							<p>...</p>
						</div>
					</div>
					<div class="item">
						<a href="#">
							<img class="img-responsive" src="forest/p1.jpg" alt="">
						</a>						<div class="carousel-caption">
							<h3>....</h3>
							<p>.....</p>
						</div>
					</div>	
                    <div class="item">
						<a href="#">
							<img class="img-responsive" src="forest/4.jpg" alt="">
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
<?php
include "footer.php";
?>	