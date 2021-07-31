
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/mystyle.css" type="text/css">
    <link rel="stylesheet" href="../CSS/bootstrap.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        form{
            text-align: center;
            letter-spacing:1px;
        }
        table{
             width: auto;
            height: auto;
            background-color: aqua;
            font-size: 20px;
            font-family: fantasy;
			align:center;
			Padding:5px;
        }
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
 
    <h1 class="heading" style="font-family:Monotype corsiva;"> ONLINE FEEDBACK MANAGEMENT SYSTEM</h1>
     
 
   <div id="menu">
       <nav>
          <!--<img src="images/logo.jpg" alt="logo" width="100" height="80">-->
       <ul>
           <li><a href="profile.php">PROFILE</a></li>
 
			   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">STUDENT<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="student.php">REGISTRATION</a></li>
          <li><a href="view_student.php">VIEW</a></li>

        </ul>
      </li>    
	
	   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">FEEDBACK<span class="caret"></span></a>
           <ul class="dropdown-menu">
          <li><a href="tfeedback.php">GIVE FEEDBACK</a></li>
		  </ul>
      </li>    
         
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SUGGESTION<span class="caret"></span></a>
           <ul class="dropdown-menu">
          <li><a href="suggestion.php">GIVE SUGGESTION</a></li>
		  
          </ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">RESPONSE<span class="caret"></span></a>
           <ul class="dropdown-menu">
         <li><a href="response_feed.php">FEEDBACK RESPONSE</a></li>
		  <li><a href="response_sugg.php">SUGGESTION RESPONSE</a></li>
          </ul>
      </li>
          <li><a href="change_pass.php">CHANGE-PASSWORD</a></li>
             <li><a href="logout.php">LOGOUT</a></li>
            </ul>
             </nav>  
          </div><br />
          
    
</body>
</html>
<?php
include "footer.php";
?>	