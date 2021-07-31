<?php
include "header.php";
session_start();
require_once "../config.php";
$tid=$_SESSION['Id'];
$tuser=$_SESSION['Username'];
$tname=$_SESSION['Aname'];
?>
<html>
<head>

</head>
<body>
<div class="container-fluid" >

		<!-- Left Column -->
		<div class="col-sm-8">

			<!-- List-Group Panel -->
			<div class="panel panel-default">
				<div class="panel-heading" style="color:;background:#ef1e1e;">
					<h1 class="panel-title"  ><i class="fa fa-arrow-right"></i> <b>JEC JABALPUR</b> </h1>
				</div>
				<div class="list-group">
			
					<?php
						$id=$_SESSION['Id'];
						$query=mysql_query("select * from student where id='$id'");
                        $records=mysql_num_rows($query);
                        $row=mysql_fetch_array($query);
						?>
						<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
						<form class="form-light mt-20" name="form" id="form" action="pro_update_in.php" method="post">
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Enrollment</label>
								<input type="text" name="user" id="user" class="form-control" value="<?php echo $row['enroll'];?>" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
                                        <label>Username</label>
								<input type="text" name="user" id="user" class="form-control" value="<?php echo $row['user'];?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Mobile No</label>
										<input type="text" name="mob" id="mob" class="form-control" value="<?php echo $row['mno'];?>" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
                                        <label>Email</label>
								<input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email'];?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>father</label>
										<input type="text" name="father" id="father" class="form-control" value="<?php echo $row['fname'];?>" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
                                        <label>Mother</label>
								<input type="text" name="mother" id="mother" class="form-control" value="<?php echo $row['mname'];?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Year</label>
										<input type="text" name="father" id="father" class="form-control" value="<?php echo $row['yr'];?>" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
                                        <label>Sem</label>
								<input type="text" name="mother" id="mother" class="form-control" value="<?php echo $row['semester'];?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Branch Name</label>
										<input type="text" name="father" id="father" class="form-control" value="<?php echo $row['branch_name'];?>" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
                                        <label>Branch Code</label>
								<input type="text" name="mother" id="mother" class="form-control" value="<?php echo $row['branch_code'];?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>DOB</label>
										<input type="text" name="father" id="father" class="form-control" value="<?php echo $row['dob'];?>" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
                                        <label>Gender</label>
								<input type="text" name="mother" id="mother" class="form-control" value="<?php echo $row['gender'];?>" readonly>
									</div>
								</div>
							</div>
							
							
						</form>
						</div>
						<div class="col-md-2"></div>
					  </div>
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
						<b>Important News</b>
					</h3>
				</div>
				<div class="panel-body" style="background-image:url('images/login.jpg');">
<div class="holder">
  <ul id="ticker01">
					
							<?php
     $query =mysql_query("select * from notice where type='student' order by apply");
     while($row = mysql_fetch_array($query))
           {
			   ?>
			  <li><b><?php echo $row['title'];?></b> (<span><?php echo $row['apply'];?></span>)<br><?php echo $row['mesz'];?><br><a href="../admin/notice/<?php echo $row['notice'];?>" target="_blank">Download</a></li>
				<?php
		   }
?>
				</ul>
</div>
<script>
jQuery.fn.liScroll = function(settings) {
	settings = jQuery.extend({
		travelocity: 0.03
		}, settings);		
		return this.each(function(){
				var $strip = jQuery(this);
				$strip.addClass("newsticker")
				var stripHeight = 1;
				$strip.find("li").each(function(i){
					stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
				});
				var $mask = $strip.wrap("<div class='mask'></div>");
				var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
				var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width 	
				$strip.height(stripHeight);			
				var totalTravel = stripHeight;
				var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye		
				function scrollnews(spazio, tempo){
				$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
				}
				scrollnews(totalTravel, defTiming);				
				$strip.hover(function(){
				jQuery(this).stop();
				},
				function(){
				var offset = jQuery(this).offset();
				var residualSpace = offset.top + stripHeight;
				var residualTime = residualSpace/settings.travelocity;
				scrollnews(residualSpace, residualTime);
				});			
		});	
};

$(function(){
    $("ul#ticker01").liScroll();
});
</script>
<style>
.holder { 
  background-color:#ccc;
  width:460px auto;
  height:410px;
  overflow:hidden;
  padding:10px;
  font-family:Helvetica;
}
.holder .mask {
  position: relative;
  left: 0px;
  top: 10px;
  width:450px;
  height:380px;
  overflow: hidden;
}
.holder ul {
  list-style:none;
  margin:0;
  padding:0;
  position: relative;
}
.holder ul li {
  padding:10px 0px;
}
.holder ul li a {
  color:darkred;
  text-decoration:none;
}
</style>								
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