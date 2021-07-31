<?php 
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> ONLINE FEEDBACK MANAGEMENT SYSTEM</title>
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
            font-size: 12px;
            font-family: fantasy;
			align:center;
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
 
    <h1 class="heading"> ONLINE FEEDBACK MANAGEMENT SYSTEM</h1>
     
 
   <div id="menu">
       <nav>
          <!--<img src="images/logo.jpg" alt="logo" width="100" height="80">-->
       <ul>
           
            <li><a href="profile.php">PROFILE</a></li>  
			  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">TEACHER<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="teacher'sregistration.php">REGISTRATION</a></li>
          <li><a href="view_teacher.php">VIEW</a></li>
		   
        </ul>
      </li>    
			   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">STUDENT
			   <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="student.php">REGISTRATION</a></li>
          <li><a href="view_student.php">VIEW</a></li>
		   
        </ul>
      </li>    
	
	   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">FEEDBACK
	   <span class="caret"></span></a>
	   
           <ul class="dropdown-menu">
          <li><a href="view_t_feedback.php">VIEW TEACHER FEEDBACK <?php
	$query =mysql_query("select * from t_feedback where status='pending'");
	$records = mysql_num_rows($query);
	$row = mysql_fetch_array($query);
	if($records>0)
	{
		?>
		<img src="aimg.gif">
		<?php
	}else{
	}
	?></a></li>
		   <li><a href="view_s_feedback .php">VIEW STUDENT FEEDBACK<?php
	$query =mysql_query("select * from s_feedback where status='pending'");
	$records = mysql_num_rows($query);
	$row = mysql_fetch_array($query);
	if($records>0)
	{
		?>
		<img src="aimg.gif">
		<?php
	}else{
	}
	?></a></li>
          </ul>
      </li>    
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">COMPLAINT
		 <?php
	$query =mysql_query("select * from complaint where status='pending'");
	$records = mysql_num_rows($query);
	$row = mysql_fetch_array($query);
	if($records>0)
	{
		?>
		<img src="aimg.gif">
		<?php
	}else{
	}
	?>
		 <span class="caret"></span></a>
           <ul class="dropdown-menu">
          <li><a href="view_complaint.php">VIEW</a></li>
		   
          </ul>
      </li>    
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SUGGESTION<span class="caret"></span></a>
           <ul class="dropdown-menu">
           <li><a href="view_t_suggestion.php">VIEW TEACHER SUGGESTION<?php
	$query =mysql_query("select * from t_suggestion where status='pending'");
	$records = mysql_num_rows($query);
	$row = mysql_fetch_array($query);
	if($records>0)
	{
		?>
		<img src="aimg.gif">
		<?php
	}else{
	}
	?></a></li>
		   <li><a href="view_s_suggestion.php">VIEW STUDENT SUGGESTION<?php
	$query =mysql_query("select * from s_suggestion where status='pending'");
	$records = mysql_num_rows($query);
	$row = mysql_fetch_array($query);
	if($records>0)
	{
		?>
		<img src="aimg.gif">
		<?php
	}else{
	}
	?></a></li>
		   
          </ul>
      </li>    
	     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">NOTICE<span class="caret"></span></a>
           <ul class="dropdown-menu">
          <li><a href="update_notice.php">GENERATE</a></li>
		  
          </ul>
      </li>    
			<li><a href="change_pass.php">CHANGE-PASSWORD</a></li>
          
              
                 
                    
                  <li><a href="logout.php">LOGOUT</a></li>
            </ul>
             </nav>  
          </div><br />
          
    
