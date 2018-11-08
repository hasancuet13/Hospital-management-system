<?php
ob_start();
session_start();

?>
<!DOCTYPE>
<html>
<head>
<title>Admin</title>
<link rel="icon" type="image/png" href="profilepic.png" />
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" type="text/css" href="w3school.css">
<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="jquery-3.1.1.js"></script>
<script type="text/javascript" src="notify.js"></script>
<script type="text/javascript" src="notify.min.js"></script>

<style>
.searchdoc{
	width: 500px;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('search.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
	margin-top:10px;
	margin-right:10px;
    padding: 8px 20px 8px 40px;
	
}
</style>

</head>
<body style="background:#00a38c;">

<?php
//echo $_SESSION["info"];
$info = $_SESSION["info"];
  echo "<script type='text/javascript'>$.notify('$info','success')</script>";
  $_SESSION['info']="";
?>

<div class="w3-row" style="background:##00a38c;margin-bottom:-40px;text-align:right;">
	<div class="w3-col" style="width:70%;">
	<font size="20" color="white"" face="Nexa Rust"><b>Hospital Management System</b></font><br>
	<font color="white">Full Automation System of Hospital Management</font>
	</div>
	<div class="w3-col" style="width:10%;float:right;margin-right:30px">
		<canvas id="canvas" width="150" height="150"
		style="background-color:#00a38c;">
		</canvas>
	</div>
</div>
	

<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>

<div class="main_menu">
		<div class="w3-row">
			<div class="w3-col" style="width:10%"><a href="Home.php" ><b style="color:#00a38c;">HOME</b></a></div>
			
			<div class="w3-col" style="width:10%"><a href="Notice.php"><b style="color:#00a38c;">NOTICE</b></a></div>
			<!--<div class="w3-col" style="width:13%"><a href="report"><b style="color:#00a38c;">REPORT</b></a></div>-->
			<div class="w3-col" style="width:15%"><a href="contact"><b style="color:#00a38c;">CONTACT US</b></a></div>
			<div class="w3-col" style="width:10%"><a href="Aboutus1.php"><b style="color:#00a38c;">ABOUT US</b></a></div>
			<div class="w3-col" style="width:15%;margin-right:20px;"></div>
			<div class="w3-col" style="width:25%;margin-left:150px;">
			 <a> <b style="color:#00a38c;"><img src="photo/user.png" width="10%" height="4%">&nbsp;<?php echo $_SESSION["sessionusername"];?></img></b></a>
			</div>
			
			<div class="w3-col w3-theme" style="width:15%">
			
			 
			<a href="logout.php"><b style="color:#00a38c;"><img src="photo/logout.png" width="15%" height="4%">&nbsp;LOGOUT</img></b></a>
			
			</div>
		</div>
</div>
<div class="main_menu" style="margin-top:-2px;">
<div class="w3-row">
<div class="w3-col" style="width:100%">
  <img class="mySlides w3-border" src="photo/hospital2.jpg" style="margin-bottom:5px;width:100%;height:60%;">
  <img class="mySlides w3-border" src="photo/hospital4.jpg" style="margin-bottom:5px;width:100%;height:60%;">
  <img class="mySlides w3-border" src="photo/hospital5.jpg" style="margin-bottom:5px;width:100%;height:60%;">
  <img class="mySlides w3-border" src="photo/hospital2.jpg" style="margin-bottom:5px;width:100%;height:60%;">
  <img class="mySlides w3-border" src="photo/hospital4.jpg" style="margin-bottom:5px;width:100%;height:60%;">
  <img class="mySlides w3-border" src="photo/slide1.jpg" style="margin-bottom:5px;width:100%;height:60%;">
  <img class="mySlides w3-border" src="photo/slide2.jpg" style="margin-bottom:5px;width:100%;height:60%;">
  <img class="mySlides w3-border" src="photo/slide3.jpg" style="margin-bottom:5px;width:100%;height:60%;">
  <img class="mySlides w3-border" src="photo/slide4.png" style="margin-bottom:5px;width:100%;height:60%;">
  <img class="mySlides w3-border" src="photo/slide5.jpg" style="margin-bottom:5px;width:100%;height:60%;">
  <img class="mySlides w3-border" src="photo/slide6.jpg" style="margin-bottom:5px;width:100%;height:60%;">
  <img class="mySlides w3-border" src="photo/slide7.jpg" style="margin-bottom:5px;width:100%;height:60%;">
  <img class="mySlides w3-border" src="photo/slide8.jpg" style="margin-bottom:5px;width:100%;height:60%;">
  <img class="mySlides w3-border" src="photo/slide9.jpg" style="margin-bottom:5px;width:100%;height:60%;">
  <img class="mySlides w3-border" src="photo/slide10.jpg" style="margin-bottom:5px;width:100%;height:60%;">
 </div>

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>

<div class="main_menu" style="margin-top:-2px;">
<div class="w3-row">

	 <div class="w3-col" style="width:23%"><a href="#" class="w3-hover-black"><b style="color:#00a38c;display: inline-block;">HOSPITAL MANAGEMENT</b></a></div>
	 <div class="w3-col" style="width:18%">
		<div class="w3-dropdown-hover">
		<a class="w3-hover-black"><b style="color:#00a38c;"><b>MANAGE PATIENT</b></a>
			<div class="w3-dropdown-content w3-border" style="width:100%";>
			 <!--<form action="patientinform.php"><button class="w3-btn w3-hover-red" style="width:100%;">Admit Patient</button></form>-->
			<button onclick="document.getElementById('id02').style.display='block'" class="w3-btn w3-hover-red" style="width:120%;">Daily Patient list</button>

			  <div id="id02" class="w3-modal">
				<div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:2200px">

				  <div class="w3-center"><br>
					<span onclick="document.getElementById('id02').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
						 <br>
						 <h4 style="align:center;font-size:30px;font-family:times new roman">Daily Patient</h4>
						 <table class="w3-table-all w3-margin-top w3-border">
							<tr style="background:gray;color:white;">
							  <td  class="w3-border" style="width:8%;">ID</td>
							  <td  class="w3-border" style="width:18%;">Patient Name</td>
							  <td  class="w3-border" style="width:15%;">Date of Birth</td>
							  
							  <td  class="w3-border" style="width:5%;">Age</td>
							  <td  class="w3-border" style="width:10%;">Symptoms</td>
							  <td  class="w3-border" style="width:10%;">Department</td>
							  <td  class="w3-border" style="width:15%;">time</td>
							</tr>	
							  <?php
								
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "login";
								
								$dbconnect = new mysqli($servername, $username, $password, $dbname);
								if($dbconnect->connect_error){
									die("Connection failed: " . $conn->connect_error);

								}
								
								$sql = "SELECT * FROM patient_info";
								$sql1 = "SELECT * FROM department";
								
								$result = $dbconnect->query($sql);
								
								
								//$row = $result->fetch_assoc();
								//echo $dept;
								if($result->num_rows > 0){
									
									while($row = $result->fetch_assoc()){
										$a = $row["Patient_id"];
										$b = $row["fname"];
										$c = $row["lname"];
										$e = $row["email"];
										$f = $row["cellphone"];
										$g = $row["nid"];
										$h = $row["age"];
										$i = $row["symptom"];
										$k = $row["time"];
										$l = $row["day"];
										$m = $row["month"];
										$n = $row["year"];
										$sp =" ";
										$hi = "-";
										$dept="None";
										
										$result1 = $dbconnect->query($sql1);

										if($result1->num_rows > 0){
										while($row1 = $result1->fetch_assoc()){
											//echo $row["symptom"].$row1["symptom"];
											if($i == $row1["symptom"]){
												$dept = $row1["department_name"];
												//echo $dept;
												break;
											}
										  }
										}
										$_SESSION["dept"] = $dept;
										echo "<tr style='margin-right:10px;'><td>$a</td><td style='color:#008000'>$b$sp$sp$sp$sp$c</td><td>$l$hi$m$hi$n</td><td>$h</td><td>$i</td><td><form action='getserial.php' target='_blank' method='POST'><button value=$dept name='submit'>$dept</button></form></td><td style='color:blue'>$k</td></tr>";

										//echo $row["Doctor_Name"]."   ";echo $row["Doctor_designation"]."   ";echo $row["Qualification"]."   ";echo $row["Specialist"]."   <br>";
										
									}
								}
								  
								?>
	  	
						  </table>
						  
						  
						<script>
						function myFunction() {
						  var input, filter, table, tr, td, i;
						  input = document.getElementById("myInput");
						  filter = input.value.toUpperCase();
						  table = document.getElementById("myTable");
						  tr = table.getElementsByTagName("tr");
						  for (i = 0; i < tr.length; i++) {
							//td = tr[i].getElementsByTagName("td")[0];
							td = tr[i].getElementsByTagName("td")[3];
							if (td) {
							  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
								tr[i].style.display = "";
							  } else {
								tr[i].style.display = "none";
							  }
							}
						  }
						}
						</script>
						
						</div>
					</div>
				</div>
			
			</div>
		  </div>
		
      </div>
	  

	  
    <div class="w3-col" style="width:19%">
		<div class="w3-dropdown-hover">
				<a class="w3-hover-black"><b style="color:#00a38c;"><b>MANAGE DOCTOR</b></a>

			<div class="w3-dropdown-content w3-hover">
				<button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-hover-red" style="width:100%;padding-right:100px;">Search Doctor</button>
				
			<div id="id01" class="w3-modal">
				<div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:1800px">

				  <div class="w3-center"><br>
					<span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
						<br><br>
						<input class="searchdoc" style="border-color:green;" type="text" placeholder="Search for Specialist.." id="myInput" onkeyup="myFunction()"/>

						  <table class="w3-table-all w3-margin-top w3-border" id="myTable">
							<tr>
							  <td  class="w3-border" style="width:40%;">Doctor Name</td>
							  <td  class="w3-border" style="width:30%;">Doctor Designation</td>
							  <td  class="w3-border" style="width:30%;">Qualification</td>
							  <td  class="w3-border" style="width:10%;">Specialist</td>
							</tr>	
							  <?php
								
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "login";
								
								$dbconnect = new mysqli($servername, $username, $password, $dbname);
								if($dbconnect->connect_error){
									die("Connection failed: " . $conn->connect_error);

								}
								
								$sql = "SELECT * FROM doctor_info";
								
								$result = $dbconnect->query($sql);
								
								if($result->num_rows > 0){
									
									while($row = $result->fetch_assoc()){
										$a = $row["Doctor_Name"];
										$b = $row["Doctor_designation"];
										$c = $row["Qualification"];
										$d = $row["Specialist"];
										echo "<tr><td>$a</td> <td>$b</td><td>$c</td><td>$d</td></tr>";

										//echo $row["Doctor_Name"]."   ";echo $row["Doctor_designation"]."   ";echo $row["Qualification"]."   ";echo $row["Specialist"]."   <br>";
										
									}
								}
								  
								?>
							
							
						  </table>
						  
						  
						<script>
						function myFunction() {
						  var input, filter, table, tr, td, i;
						  input = document.getElementById("myInput");
						  filter = input.value.toUpperCase();
						  table = document.getElementById("myTable");
						  tr = table.getElementsByTagName("tr");
						  for (i = 0; i < tr.length; i++) {
							//td = tr[i].getElementsByTagName("td")[0];
							td = tr[i].getElementsByTagName("td")[3];
							if (td) {
							  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
								tr[i].style.display = "";
							  } else {
								tr[i].style.display = "none";
							  }
							}
						  }
						}
						</script>
				  </div>
				
				</div>
           </div>
				
		<button onclick="document.getElementById('id03').style.display='block'" class="w3-btn w3-hover-red" style="width:100%;padding-right:100px;">Add Doctor</button>
				
			<div id="id03" class="w3-modal">
				<div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:500px;">

				  <div class="w3-center"><br><br>
				  <h4 style="font-size:20">ADD DOCTOR</h4>
					<span onclick="document.getElementById('id03').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
							
								<?php
								
									if($_SERVER["REQUEST_METHOD"] == "POST"){
										
										$servername =  "localhost";
										$username =  "root";
										$password = "";
										$dbname = "login";
										$dbconnect = new mysqli($servername, $username, $password, $dbname);
										
										if($dbconnect->connect_error){
											die("Connection failed: " . $conn->connect_error);

										}
										
										$sql  = "INSERT INTO doctor_info(Doctor_Name,Doctor_designation, Qualification, Specialist)
											VALUES ('".$_POST["Doctor_Name"]."','".$_POST["Doctor_designation"]."','".$_POST["Qualification"]."','".$_POST["Specialist"]."')";
										
										if ($dbconnect->query($sql) == TRUE) {
											echo "<script type='text/javascript'>alert('Successfully Add..')</script>";
										}
										
										
									}
							
							
							?>
							
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
							<br><br><label class="w3-left w3-margin-left">Doctor Name</label><br>
							<input style="width:60%;" class="w3-input w3-border w3-margin-bottom w3-margin-left" type="text" placeholder="Enter Doctor Name" name="Doctor_Name" required>
							<label class="w3-left w3-margin-left">Designation</label><br>
							 <input style="width:60%;" class="w3-input w3-border w3-margin-bottom w3-margin-left" type="text" placeholder="Enter Designation" name="Doctor_designation" required>
							<label class="w3-left w3-margin-left">Qualification</label><br>
							<input style="width:60%;" class="w3-input w3-border w3-margin-bottom w3-margin-left" type="text" placeholder="Enter Qualification" name="Qualification" required>
							<label class="w3-left w3-margin-left">Specialist</label><br>
							<input style="width:60%;" class="w3-input w3-border w3-margin-bottom w3-margin-left" type="text" placeholder="Enter Specialist" name="Specialist" required>
							
							
							<button class="w3-hover-red w3-margin-left" type="submit" name="submit" style="width:20%;height:10%;margin-bottom:10px;background-color: green;color:white">ADD</button>
							</form>
							
				</div>
			</div>
		</div>
			
			</div>	
		</div>
	</div>
	<div class="w3-col" style="width:20%"><a href="#" class="w3-hover-black"><b style="color:#00a38c;display: inline-block;">MANAGE TEST</b></a></div>
	<div class="w3-col" style="width:20%"><a href="#" class="w3-hover-black"><b style="color:#00a38c;display: inline-block;">MANAGE BILL</b></a></div>
	</div>
</div>


<div style="background:#2d2d2d;margin-left:120;margin-right:200;color:white;">
	<div class="w3-row" style="margin-left:50px;margin-right:50px;">
		<div class="w3-col" style="width:60%;">
		 <img src="photo/bar1.png" style="width:40%;margin-top:10px;"><br><br>
		 We are happy to answer any question you have.<br>Just send us a message in the form below with any <br>question you may have.<br>
		 <br>
		 <img src="photo/phone.png" style="width:30px;height:30px;margin-left:2px;">&nbsp;+8801830278221</img><br><br>
		 <img src="photo/email.png" style="width:30px;height:30px;margin-top:-12px;"/>&nbsp;ismail.mukul@yahoo.com</img><br><br>
		 <img src="photo/facebook.png" style="margin-left:2.5px;width:30px;height:30px;margin-top:-15px;margin-left:-1px;color:red;"/><a href="https://www.facebook.com/ismail.mukul" style="text-decoration:none;">&nbsp;/ismail.mukul</a></img><br><br>
		 <img src="photo/twitter.png" style="width:37px;height:37px;margin-top:-15px;margin-left:-4px;">&nbsp;@HMS</img><br>
		 
		 
		 <div>
			<script
				src="http://maps.googleapis.com/maps/api/js">
			</script>

			<script>
			var myCenter=new google.maps.LatLng(22.359338,91.830778);
			var marker;

			function initialize()
			{
			var mapProp = {
			  center:myCenter,
			  zoom:17,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			  };

			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

			var marker=new google.maps.Marker({
			  position:myCenter,
			  animation:google.maps.Animation.BOUNCE
			  });

			marker.setMap(map);
			}

			google.maps.event.addDomListener(window, 'load', initialize);
			</script>
			<div id="googleMap" style="width:90%;height:150px;"></div> 
		 
		 </div>
		</div>
		<div class="w3-col" style="width:40%;">
		<img src="photo/bar.png" style="width:60%;margin-top:10px;"><br>
		<br>
		 <label>NAME</label><br>
		 <input type="text" name="name" style="width:80%;border-radius:5px;height:5%;" required/><br>
		 <label>E-MAIL</label><br>
		 <input type="email" name="email"style="width:80%;border-radius:5px;height:5%;" required/><br><br>
		 <label>SUBJECT</label><br>
		 <input type="text" name="subject" style="width:80%;border-radius:5px;height:5%;"/><br>
		 <label>MESSAGE</label><br>
		 <textarea type="text" name="message" style="width:80%;"></textarea><br><br>
		 <button type="submit" style="background:#db152e;margin-left:60px;width:50%;color:white;">SEND</button>
		 <br>
	</div>
	</div>
</div>
<footer class="signup">Copyright &copy; Ismail Hossain & Mohammad Hasan</footer>
</body>
</html>
