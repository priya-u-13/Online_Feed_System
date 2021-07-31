<?php
session_start();
require_once "../config.php";
$tid=$_SESSION['Id'];
$tuser=$_SESSION['Username'];
$tname=$_SESSION['Aname'];
?>
<html>
<head>
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
<h2 style="text-align:center">User Profile </h2>

<div class="card">
  <img src="r.jpg" alt="@" style="width:100%">
  <h1><?php echo $tname;?></h1>
  <p class="title"><?php echo $tname;?></p>
  <p><?php echo $tname;?></p>
 
  <p><button>Contact</button></p>
</div>


		<div class="container-fluid">
		<div class="col-sm-4">
<link href="news_slide.css" rel="stylesheet" type="text/css" />
<h3 style="text-align:center; padding:5px;margin-top:7px; background-color:#19bcbc; color:#FFF;"><a href="#.php">Important News</a></h3>

  <ul id="ticker_02" class="ticker">
<?php
     $query =mysql_query("select * from notice order by apply");
     while($row = mysql_fetch_array($query))
           {
			   ?>
			  <li>
                  <b><?php echo $row['title'];?></b>
					<p><?php echo $row['mesz'];?></p>
					<a href="#<?php echo $row['notice'];?>" target="_blank">Download</a>
					<?php echo $row['apply'];?>
					<hr>
				</li>
				<?php
		   }
?>
  </u1>
 
</div>
<script>

	function tick(){
		$('#ticker_01 li:first').slideUp( function () { $(this).appendTo($('#ticker_01')).slideDown(); });
	}
	setInterval(function(){ tick () }, 3000);


	function tick2(){
		$('#ticker_02 li:first').slideUp( function () { $(this).appendTo($('#ticker_02')).slideDown(); });
	}
	setInterval(function(){ tick2 () }, 2000);


	function tick3(){
		$('#ticker_03 li:first').slideUp( function () { $(this).appendTo($('#ticker_03')).slideDown(); });
	}
	setInterval(function(){ tick3 () }, 1000);	

	function tick4(){
		$('#ticker_04 li:first').slideUp( function () { $(this).appendTo($('#ticker_04')).slideDown(); });
	}


	/**
	 * USE TWITTER DATA
	 */

	 $.ajax ({
		 url: 'http://search.twitter.com/search.json',
		 data: 'q=%23javascript',
		 dataType: 'jsonp',
		 timeout: 10000,
		 success: function(data){
		 	if (!data.results){
		 		return false;
		 	}

		 	for( var i in data.results){
		 		var result = data.results[i];
		 		var $res = $("<li />");
		 		$res.append('<img src="' + result.profile_image_url + '" />');
		 		$res.append(result.text);

		 		console.log(data.results[i]);
		 		$res.appendTo($('#ticker_04'));
		 	}
			setInterval(function(){ tick4 () }, 4000);	

			$('#example_4').show();

		 }
	});


</script>		
			
			
		</div>


	</div>
	

</body>
</html>
<?php
include "footer.php";
?>	
	

