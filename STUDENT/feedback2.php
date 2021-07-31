<?php
session_start();
require_once "../config.php";
include"header.php";
$tid=$_SESSION['Id'];
$tuser=$_SESSION['Username'];
$tname=$_SESSION['Aname'];
?>

<html>
<head>
<style>
table{
    	  background-image: url(images/m.jpg) ;
		  background-size:cover;
		      width: 100%;
}
th,td.tc{
		padding:1px;
	}
</style>
 
	     <script src="datetimepicker_css.js"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 95%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>				
<form id="regForm" action="feed_action.php" method="post" enctype="multipart/form-data">
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
  <h1 style="font-family:Monotype corsiva;"><u><b>STUDENT FEEDBACK FORM</b></u></h1>
	  <h1 style="font-family:Monotype corsiva;"><u>PART-1 ABOUT THE COLLEGE</u></h1></center>
	    &nbsp&nbsp&nbsp&nbsp&nbsp; <p style="font-size:20px;">Dear Student,<br/>
	    In order to improve the Teaching-Learning environment,to provide adequate amenities with amenities with modern infrastructure in <br/>
		the college your opinion is very valuable to us.You are provided with this feedback from for the same.Your information will be kept confidential.</p>
    <p>
	<table style="border:1px solid #000; width: 99%;" border="1px">  
<tr>
		<th class="tc">S.N.</th>
        <th class="tc" style="text-align:center">STATEMENT</th>		
		<th class="tc">EXCELLENT</th>		
	    <th class="tc">VERY GOOD</th>		
		<th class="tc">GOOD</th>		
		<th class="tc">SATISFACTORY</th>		
		<th class="tc">POOR</th>		
		<th class="tc">VERY POOR</th>	
     </tr>
     <tr>
		<td class="tc">1</td>
		<td class="tc" style="text-align:left;">
		Cleanliness and Greenery of College Campus 
		</td>
		<td class="tc" >
		  <input type='radio' name='s1' id='s1' value='Ex' class="form-control" required>
		 
		</td>
		<td class="tc">
		   <input type='radio' name='s1' id='s1' value=' VG' class="form-control" required>
		  
		</td>
		<td class="tc">
		  <input type='radio' name='s1' id='s1' value='G'  class="form-control" required>
		</td>
		<td class="tc">
		  
		  <input type='radio' name='s1' id='s1' value='S' class="form-control" required>
		</td> 
		<td class="tc">
		 
		  <input type='radio' name='s1' id='s1' value='P' class="form-control" required>
		</td>
		<td class="tc">
		  
		  <input type='radio' name='s1' id='s1' value='VP ' class="form-control" required>
		</td>
     </tr>
     <tr>
		<td class="tc">2</td>
		<td class="tc" style="text-align:left;">Cleanliness of Class Rooms </td>
		<td class="tc">
		  
		  <input type='radio' name='s2' id='s2' value='Ex'  class="form-control"required>
		</td>
		<td class="tc">
		 
		  <input type='radio' name='s2' id='s2' value='VG' class="form-control"required>
		</td>
		<td class="tc">
		 
		  <input type='radio' name='s2' id='s2' value='G' class="form-control"required>
	    </td>
		<td class="tc">
		  
		  <input type='radio' name='s2' id='s2' value='S' class="form-control" required>
		  </td> 
		<td class="tc">
		  <input type='radio' name='s2' id='s2' value='P' class="form-control" required>
		  </td>
		<td class="tc">
		  
		  <input type='radio' name='s2' id='s2' value='VP' class="form-control" required>
		</td>
	 </tr>
	 <tr>
		<td class="tc" >3</td>
		<td style="text-align:left;">Maintence and Cleanliness of Toilet/Washrooms </td>
		<td class="tc">
	      
		  <input type='radio' name='s3' id='s3' value='Ex' class="form-control" required>
		  
		</td>
		<td class="tc">
		  
		  <input type='radio' name='s3' id='s3' value='VG' class="form-control" required>
		</td>
		<td class="tc">
		 
		  <input type='radio' name='s3' id='s3' value='G' class="form-control" required>
		</td>
		<td class="tc">
		  
		  <input type='radio' name='s3' id='s3' value='S' class="form-control" required>
		
		</td> 
		<td class="tc">
		  
		  <input type='radio' name='s3' id='s3' value='P' class="form-control" required>
		</td>
		<td class="tc">
	      
		  <input type='radio' name='s3' id='s3' value='VP' class="form-control" required>
		  </td>
		</tr>
		<tr>
		<td class="tc">4</td>
		<td class="tc" style="text-align:left;">Behavior of Office Staff towards Student</td>
		<td class="tc">
		 
		  <input type='radio' name='s4' id='s4' value='Ex'  class="form-control" required>
		</td>
		<td class="tc">
		 
		  <input type='radio' name='s4' id='s4' value='VG' class="form-control" required>
		  </td>
		<td class="tc">
		  
		  <input type='radio' name='s4' id='s4' value='G' class="form-control" required>
		</td>
		<td class="tc">
		 
		  <input type='radio' name='s4' id='s4' value='S' class="form-control" required>
	    </td> 
		<td class="tc">
		 
		  <input type='radio' name='s4' id='s4' value='P' class="form-control" required>
		</td>
		<td class="tc">
		  
		  <input type='radio' name='s4' id='s4' value='VG' class="form-control" required>
		</td>
		</tr>
		<tr>
		<td class="tc">5</td>
		<td class="tc" style="text-align:left;">Behavior of Library sSaff towards Student </td>
		<td class="tc">
		 
		  <input type='radio' name='s5' id='s5' value='Ex' class="form-control" required>
		</td>
		<td class="tc">
		 
		  <input type='radio' name='s5' id='s5' value='VG' class="form-control" required>
		</td>
		<td class="tc">
	      
		  <input type='radio' name='s5' id='s5' value='G' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s5' id='s5' value='S' class="form-control" required>
		</td> 
		<td class="tc">
		  
		  <input type='radio' name='s5' id='s5' value='P' class="form-control" required>
		</td>
		<td class="tc">

		  <input type='radio' name='s5' id='s5' value=' VP' class="form-control" required>
		  </td>
		</tr>
		<tr>
		<td class="tc">6</td>
		<td class="tc" style="text-align:left;">Availability of Prescribed Books/Reading Materials in Library</td>
		<td class="tc">
		  <input type='radio' name='s6' id='s6' value='Ex' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s6' id='s6' value='VG' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s6' id='s6' value='G' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s6' id='s6' value='S' class="form-control" required>
		</td> 
		<td class="tc">
		  <input type='radio' name='s6' id='s6' value='P' class="form-control"required>
		</td>
		<td class="tc">
		  <input type='radio' name='s6' id='s6' value='VP' class="form-control"required>
		</td>
		</tr>
		<tr>
		<td class="tc">7</td>
		<td class="tc" style="text-align:left;">Internal Facility in the Library/Campus</td>
		<td class="tc">
		  <input type='radio' name='s7' id='s7' value='Ex' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s7' id='s7' value='VG' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s7' id='s7' value='G' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s7' id='s7' value='S' class="form-control" required>
		</td> 
		<td class="tc">
		  <input type='radio' name='s7' id='s7' value='P' class="form-control"required>
		</td>
		<td class="tc">
		  <input type='radio' name='s7' id='s7' value='VP ' class="form-control"required>
		</td>
		</tr>
		<tr>
		<td class="tc">8</td>
		<td class="tc" style="text-align:left;">Well maintained Notice/Display Board</td>
		<td class="tc">
		  <input type='radio' name='s8' id='s8' value='Ex' class="form-control"required>
		</td>
		<td class="tc">
		  <input type='radio' name='s8' id='s8' value=' VG' class="form-control"required>
		</td>
		<td class="tc">
		  <input type='radio' name='s8' id='s8' value='G' class="form-control"required>
		</td>
		<td class="tc">
		  <input type='radio' name='s8' id='s8' value='G' class="form-control"required>
		</td> 
		<td class="tc">
		  <input type='radio' name='s8' id='s8' value='P' class="form-control"required>
		</td>
		<td class="tc">
		  <input type='radio' name='s8' id='s8' value='VP ' class="form-control"required>
		</td>
		</tr>
		<tr>
		<td class="tc">9</td>
		<td class="tc" style="text-align:left;">Availability of separate Common Rooms for Boys and Girls</td>
		<td class="tc">
		  <input type='radio' name='s9' id='s9' value='Ex' class="form-control"required>
		</td>
		<td class="tc">
		  <input type='radio' name='s9' id='s9' value='VG' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s9' id='s9' value='G' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s9' id='s9' value='S' class="form-control" required>
		</td> 
		<td class="tc">
		  <input type='radio' name='s9' id='s9' value='P' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s9' id='s9' value='VP ' class="form-control" required>
		</td>
		</tr>
		<tr>
		<td class="tc">10</td>
		<td class="tc" style="text-align:left;">Availability Of Clean and hygienic drinking water</td>
		<td class="tc"><input type='radio' name='s10' id='s10' value='Ex' class="form-control" required>
	    </td>
		<td class="tc">
		  <input type='radio' name='s10' id='s10' value=' VG ' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s10' id='s10' value='G' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s10' id='s10' value='S' class="form-control" required>
		</td> 
		<td class="tc">
		  <input type='radio' name='s10' id='s10' value='P' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s10' id='s10' value='VP ' class="form-control" required>
		</td>
		</tr>
		<tr>
		<td class="tc">11</td>
		<td class="tc" style="text-align:left;">Availability Of First-aid facility in the College Campus</td>
		<td><input type='radio' name='s11' id='s11' value='Ex' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s11' id='s11' value='VG' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s11' id='s11' value='G' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s11' id='s11' value='S' class="form-control" required>
		</td> 
		<td class="tc">
		  <input type='radio' name='s11' id='s11' value='P' class="form-control"required>
		</td>
		<td class="tc">
		  <input type='radio' name='s11' id='s11' value='VP ' class="form-control" required>
		</td>
		</tr>
		<tr>
		<td class="tc">12</td>
		<td class="tc" style="text-align:left;">Easy accessibility of Building and Classrooms by Disable students </td>
		<td class="tc"> <input type='radio' name='s12' id='s12' value='Ex' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s12' id='s12' value='VG ' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s12' id='s12' value='G' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s12' id='s12' value='S' class="form-control" required>
		</td> 
		<td class="tc">
		  <input type='radio' name='s12' id='s12' value='P' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s12' id='s12' value='VP' class="form-control" required>
		</td>
		
		</tr>
		<tr>
		<td class="tc">13</td>
		<td class="tc" style="text-align:left;">Functioning of Training Placcement Cell </td>
		<td class="tc"><input type='radio' name='s13' id='s13' value='Ex' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s13' id='s13' value='VG' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s13' id='s13' value='G' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s13' id='s13' value='S' class="form-control" required>
		</td> 
		<td class="tc">
		  <input type='radio' name='s13' id='s13' value='P' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s13' id='s13' value='VP ' class="form-control" required>
		</td>
		</tr>
		<tr>
		<td class="tc">14</td>
		<td  class="tc" style="text-align:left;">Electrical Power Supply and Back-up systems the Building</td>
		<td class="tc"><input type='radio' name='s14' id='s14' value='Ex' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s14' id='s14' value=' VG ' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s14' id='s14' value='G' class="form-control" required>
		</td>
		<td class="tc">
		  <input type='radio' name='s14' id='s14' value='S' class="form-control" required />
		</td> 
		<td class="tc">
		  <input type='radio' name='s14' id='s14' value='P'  class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s14' id='s14' value='VP '  class="form-control" required />
		</td>
		</tr>
		<tr>
		<td class="tc">15</td>
		<td class="tc" style="text-align:left;">Working condition of Equipment in Labs of various departments</td>
		<td class="tc"><input type='radio' name='s15' id='s15' value='Ex'  class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s15' id='s15' value=' vG' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s15' id='s15' value='G' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s15' id='s15' value='S' class="form-control"   required />
		</td> 
		<td class="tc">
		  <input type='radio' name='s15' id='s15' value='P' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s15' id='s15' value='VP ' class="form-control" required />
		</td>
		</tr>
		<tr>
		<td class="tc">16</td>
		<td class="tc" style="text-align:left;">Facility of Smart Classrooms </td>
		<td class="tc"><input type='radio' name='s16' id='s16' value='Ex' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s16' id='s16' value='VG ' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s16' id='s16' value='G' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s16' id='s16' value='S' class="form-control" required />
		</td> 
		<td class="tc">
		  <input type='radio' name='s16' id='s16' value='P' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s16' id='s16' value='VP' class="form-control" required />
		</td>
		</tr>
		<tr>
		<td class="tc">17</td>
		<td class="tc" style="text-align:left;">Hostel facilities</td>
         <td class="tc"><input type='radio' name='s17' id='s17' value='Ex' class="form-control"  required />
		</td>
		<td class="tc">
		  <input type='radio' name='s17' id='s17' value=' VG' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s17' id='s17' value='G' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s17' id='s17' value='S' class="form-control" required />
		</td> 
		<td class="tc">
		  <input type='radio' name='s17' id='s17' value='P' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s17' id='s17' value=' VP'  class="form-control" required />
		</td>
		</tr>
		<tr>
		<td class="tc">18</td>
		<td class="tc" style="text-align:left;"> Extra curicular activities </td>
		<td class="tc"><input type='radio' name='s18' id='s18' value='Ex' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s18' id='s18' value=' VG' class="form-control"  required />
		</td>
		<td class="tc">
		  <input type='radio' name='s18' id='s18' value='G' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s18' id='s18' value='S' class="form-control" required />
		</td> 
		<td class="tc">
		  <input type='radio' name='s18' id='s18' value='P' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s18' id='s18' value='VP'  class="form-control" required />
		</td>
		</tr>
		<tr>
		<td class="tc">19</td>
		<td class="tc" style="text-align:left;">Sport facilities</td>
         <td class="tc"><input type='radio' name='s19' id='s19' value='Ex' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s19' id='s19' value='VG' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s19' id='s19' value='G' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s19' id='s19' value='S' class="form-control" required />
		</td> 
		<td class="tc">
		  <input type='radio' name='s19' id='s19' value='P' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s19' id='s19' value='VP' class="form-control" required />
		</td>
		</tr>
		<tr>
		<td class="tc">20</td>
		<td class="tc" style="text-align:left;">Training Programmes organized in College </td>
		<td class="tc"><input type='radio' name='s20' id='s20' value='Ex' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s20' id='s20' value=' VG' class="form-control"   required />
		</td>
		<td class="tc">
		  <input type='radio' name='s20' id='s20' value='G' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s20' id='s20' value='S' class="form-control"  required />
		</td> 
		<td class="tc">
		  <input type='radio' name='s20' id='s20' value='P' class="form-control" required />
		</td>
		<td class="tc">
		  <input type='radio' name='s20' id='s20' value='VP' class="form-control" required />
		</td>
		</tr>

  </table>
	</p>
  </div>
  
  <div class="tab"><p>
	<h1 style="font-family:Monotype corsiva;color:white;"><u>PART-B TEACHING LEARNING ENVIRONMENT</u></h1>
    <table>
	<tr>
	<td>
     <b>Teacher Name:</b></td>
	 <td>
	 <select name="teach_name" id="teach_name" required>
	 <option value="">SELECT ANY ONE</option>
	 <option value="Sharad Dahate">Sharad Dahate</option>
     <option value="Pragya Balley">Pragya Balley</option>
	 <option value="Trapti Adkane">Trapti Adkane</option>
	 <option value="Vimla Uikey">Vimla Uikey</option>
	 <option value="Simpy Awadhiya">Simpy Awadhiya</option>
	 </select>
	 </td>
     <td><b>Teacher Subject:</b></td>
	 <td>
	<select name="teach_sub" id="teach_sub" required>
	     <option value="">SELECT ANY ONE</option>
	   <option value="PHYSICS">Physics</option>
       <option value="MATHS">Mathemetics</option>
	   <option value="CFA">CFA</option>
	   <option value="CS">Communication Skills</option>
	   <option value="DT">Digital Techniques</option>
	   <option value="C">Programming in 'C'</option>
	   <option value="BEEM">BEEM</option>
	   <option value="ENV">Enviornment</option>
	   <option value="DSA">DSA</option>
	   <option value="DC">Data Communication</option>
	   <option value="OS">Operating System</option>
	   <option value="CA">Computer Architecture</option>
	   <option value="MICRO">Microprocessor</option>
	   <option value="CN">Computer Network</option>
	   <option value="C++">Programing in C++</option>
	   <option value="JAVA">Programing in JAVA</option>
	   <option value="SOFT ENGG">Software Engineering</option>
	   <option value="HIM">H/W Installastion & Maintenance</option>
	   <option value="WEB TECH">Web Technology</option>
	   <option value="CGMA">CGMA</option>
	   <option value="NSM">NSM</option>
	    <option value="AIES"> AI $ ES</option>
		<option value="WIRELESS">Wireless & Computing</option>
		<option value="ENP">ENP</option>
	   </select><br/>
	   </td>
	   </tr></table><br />
    <table style="border:1px solid #000; width: 99%;" border="1px"><b></b>
<tr>
		<th>S.N.</th>
        <th style="text-align:center">STATEMENT</th>		
		<th>EXCELLENT</th>		
	    <th>VERY GOOD</th>		
		<th>GOOD</th>		
		<th>SATISFACTORY</th>		
		<th>POOR</th>		
		<th>VERY POOR</th>	
     </tr>
     <tr>
		<td >1</td>
		<td >Completion of the syllabus in due time</td>
		<td >
		  <input type='radio' name='p1' id='p1' value='Ex'  class="form-control" required >
		 
		</td>
		<td>
		   <input type='radio' name='p1' id='p1' value='VG'class="form-control"  required />
		  
		</td>
		<td>
		  <input type='radio' name='p1' id='p1' value='G' class="form-control" required />
		</td>
		<td>
		  
		  <input type='radio' name='p1' id='p1' value='S' class="form-control" required />
		</td> 
		<td>
		 
		  <input type='radio' name='p1' id='p1' value='P' class="form-control"required />
		</td>
		<td>
		  
		  <input type='radio' name='p1' id='p1' value='VP' class="form-control" required />
		</td>
     </tr>
     <tr>
		<td>2</td>
		<td style="text-align:left;">Lecture preparation level of the Teachers </td>
		<td>
		  
		  <input type='radio' name='p2' id='p2' value='Ex' class="form-control" required />
		</td>
		<td>
		 
		  <input type='radio' name='p2' id='p2' value='VG'  class="form-control" required />
		</td>
		<td>
		 
		  <input type='radio' name='p2' id='p2' value='G' class="form-control"  required />
	    </td>
		<td>
		  
		  <input type='radio' name='p2' id='p2' value='S' class="form-control" required />
		  </td> 
		<td>
		  <input type='radio' name='p2' id='p2' value='P' class="form-control"  required />
		  </td>
		<td>
		  
		  <input type='radio' name='p2' id='p2' value='VP' class="form-control" required />
		</td>
	 </tr>
	 <tr>
		<td>3</td>
		<td style="text-align:left;">Regularity and Punctuality of the Teachers </td>
		<td>
	      
		  <input type='radio' name='p3' id='p3' value='Ex' class="form-control" required />
		  
		</td>
		<td>
		  
		  <input type='radio' name='p3' id='p3' value='VG' class="form-control" required />
		</td>
		<td>
		 
		  <input type='radio' name='p3' id='p3' value='G' class="form-control" required />
		</td>
		<td>
		  
		  <input type='radio' name='p3' id='p3' value='S' class="form-control" required />
		
		</td> 
		<td>
		  
		  <input type='radio' name='p3' id='p3' value='P' class="form-control"  required />
		</td>
		<td>
	      
		  <input type='radio' name='p3' id='p3' value='VP' class="form-control" required />
		  </td>
		</tr>
		<tr>
		<td>4</td>
		<td style="text-align:left;">Availability of Teachers in the Dept. after lecture during</td>
		<td>
		 
		  <input type='radio' name='p4' id='p4' value='Ex' class="form-control" required />
		</td>
		<td>
		 
		  <input type='radio' name='p4' id='p4' value='VG' class="form-control" required />
		  </td>
		<td>
		  
		  <input type='radio' name='p4' id='p4' value='G' class="form-control" required />
		</td>
		<td>
		 
		  <input type='radio' name='p4' id='p4' value='S' class="form-control" required />
	    </td> 
		<td>
		 
		  <input type='radio' name='p4' id='p4' value='P' class="form-control" required />
		</td>
		<td>
		  
		  <input type='radio' name='p4' id='p4' value='VP' class="form-control" required />
		</td>
		</tr>
		<tr>
		<td>5</td>
		<td style="text-align:left;">Use of modern aids in teaching-learning prosses </td>
		<td>
		 
		  <input type='radio' name='p5' id='p5' value='Ex' class="form-control" required />
		</td>
		<td>
		 
		  <input type='radio' name='p5' id='p5' value='VG' class="form-control" required />
		</td>
		<td>
	      
		  <input type='radio' name='p5' id='p5' value='G' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p5' id='p5' value='S' class="form-control" required />
		</td> 
		<td>
		  
		  <input type='radio' name='p5' id='p5' value='P' class="form-control" required />
		</td>
		<td>

		  <input type='radio' name='p5' id='p5' value='VP' class="form-control" required />
		  </td>
		</tr>
		<tr>
		<td>6</td>
		<td style="text-align:left;">The atitude of the teachers towards students</td>
		<td>
		  <input type='radio' name='p6' id='p6' value='Ex' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p6' id='p6' value='VG' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p6' id='p6' value='G' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p6' id='p6' value='S' class="form-control" required />
		</td> 
		<td>
		  <input type='radio' name='p6' id='p6' value='P' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p6' id='p6' value='VP' class="form-control" required />
		</td>
		</tr>
		<tr>
		<td>7</td>
		<td style="text-align:left;">Fairness in evaluation process </td>
		<td>
		  <input type='radio' name='p7' id='p7' value='Ex' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p7' id='p7' value='VG' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p7' id='p7' value='G' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p7' id='p7' value='S' class="form-control" required />
		</td> 
		<td>
		  <input type='radio' name='p7' id='p7' value='P' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p7' id='p7' value='VP' class="form-control" required />
		</td>
		</tr>
		<tr>
		<td>8</td>
		<td style="text-align:left;">Maintenance of student attendance record</td>
		<td>
		  <input type='radio' name='p8' id='p8' value='Ex' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p8' id='p8' value='VG' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p8' id='p8' value='G' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p8' id='p8' value='S' class="form-control" required />
		</td> 
		<td>
		  <input type='radio' name='p8' id='p8' value='P' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p8' id='p8' value='VP ' class="form-control" required />
		</td>
		</tr>
		<tr>
		<td>9</td>
		<td style="text-align:left;">Teacher guidance provided for overall development and personality development</td>
		<td>
		  <input type='radio' name='p9' id='p9' value='Ex' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p9' id='p9' value=' VG ' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p9' id='p9' value='G' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p9' id='p9' value='S' class="form-control" required />
		</td> 
		<td>
		  <input type='radio' name='p9' id='p9' value='P' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p9' id='p9' value=' VP' class="form-control" required />
		</td>
		</tr>
		<tr>
		<td>10</td>
		<td style="text-align:left;">Usefulness of the courses taught at your level</td>
		<td><input type='radio' name='p10' id='p10' value='Ex' class="form-control"  required />
	    </td>
		<td>
		  <input type='radio' name='p10' id='p10' value='VG' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p10' id='p10' value='G' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p10' id='p10' value='S' class="form-control" required />
		</td> 
		<td>
		  <input type='radio' name='p10' id='p10' value='P' class="form-control"  required />
		</td>
		<td>
		  <input type='radio' name='p10' id='p10' value='VP' class="form-control" required />
		</td>
		</tr>
		<td >11</td>
		<td style="text-align:left;">Your confidence level and skill</td>
		<td><input type='radio' name='p11' id='p11' value='Ex' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p11' id='p11' value='VG ' class="form-control"required />
		</td>
		<td>
		  <input type='radio' name='p11' id='p11' value='G' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p11' id='p11' value='S' class="form-control" required />
		</td> 
		<td>
		  <input type='radio' name='p11' id='p11' value='P' class="form-control" required />
		</td>
		<td>
		  <input type='radio' name='p11' id='p11' value=' VP' class="form-control" required />
		</td>
		</tr>
		
  </table>
  </p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>	  

<?php
include "footer.php";
?>	
	

	 