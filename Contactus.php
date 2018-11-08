<?php
ob_start();
session_start();
?>

<html>
<head>
<title>Contact us</title>
<link rel="icon" type="image/png" href="profilepic.png" />
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" type="text/css" href="w3school.css">
<link rel="stylesheet" type="text/css" href="patientsignin.css">
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="jquery-3.1.1.js"></script>
<script type="text/javascript" src="notify.js"></script>
<script type="text/javascript" src="notify.min.js"></script>
<style>
.searchdoc{
	width: 200px;
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

 
 if(isset($_SESSION["patientinfo"])){
	 $patientinfo = $_SESSION["patientinfo"];
	echo "<script type='text/javascript'>$.notify('$patientinfo','warn')</script>";
	$_SESSION["patientinfo"]="";
 }

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
		<div class="w3-row" style="margin-top:-3.8px;background:black;">
			
			<div class="w3-col" style="width:15%"><button onclick="document.getElementById('id02').style.display='block'" class="w3-btn w3-hover-white" style="width:100%"><b style="color:#00a38c;display: inline-block;">NOTICE</b></button>
			
			
				<div id="id02" class="w3-modal">
					<div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:1000px">

					  <div class="w3-center"><br>
						<span onclick="document.getElementById('id02').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>					    </div>
						 <br><label><h4><b>NOTICE BOARD</b></h4></label>
						
						<table style="margin-left:100px;margin-bottom:10px;width:80%;background:#95c28d;">
							<tr style="background:gray;color:white;text-align:center;">
								<td style="width:50%;">File Name</td>
								<td style="width:30%;">File Type</td>
								<td style="width:20%;">View</td>
							</tr>
									
					   
					  
				<?php
				
						mysql_connect("localhost","root","") or die("mysql connection is failuer.");
						mysql_select_db("login") or die("Database does not exists.");
										
						$sql = "SELECT * FROM notice";
						$result_set=mysql_query($sql);
							$i=1;
							while($row=mysql_fetch_array($result_set)){
								$a =  $row["file_name"];
								$b = $row["file_type"];
								echo "<tr style='text-align:center;background:white;'><td  style='width:50%;'>$a</td><td  style='width:30%;'>$b</td><td  style='width:20%;'><a href='uploads/$a' target='_blank' style='color:blue;'>view</a></td></tr>";
										
							}
										
				?>
				
						</table>
					<br><br>
					</div>
			   </div>
			   
			</div>
			<div class="w3-col" style="width:15%"><button class="w3-btn w3-hover-white" style="width:100%"><b style="color:#00a38c;display: inline-block;">CONTACT US</b></button></div>
	        <div class="w3-col" style="width:15%"><button onclick="window.open('http://localhost/code/Project/Aboutus.php')" class="w3-btn w3-hover-white" style="width:100%"><b style="color:#00a38c;display: inline-block;">ABOUT US</b></button></div>
			<div class="w3-col" style="width:15%;margin-left:220px;">

			<button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-hover-white" style="width:100%"><b style="color:#00a38c;display: inline-block;">ADMIN LOGIN</b></button>
			
			<div id="id01" class="w3-modal">
				<div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:400px">

				  <div class="w3-center"><br>
					<span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
					<img src="profilepic.png" alt="Avatar" style="width:20%;margin-bottom:20px;" class="w3-circle">
				  </div>
				  <center>
				  
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST"){
					$username = $_POST['username'];
					$password = $_POST['password'];

					$username = stripcslashes($username);
					$password = stripcslashes($password);
					$username = mysql_real_escape_string($username);
					$password = mysql_real_escape_string($password);

					mysql_connect("localhost","root","") or die("mysql connection is failuer.");
					mysql_select_db("login") or die("Database does not exists.");

					$result  = mysql_query("select * from login_user where username = '$username 'and password = '$password'")
									or die("Fail to query database".mysql_error());
										
					$row = mysql_fetch_array($result);
						if($row['username'] == $username && $row['password'] == $password){
							$_SESSION["sessionusername"] = $username;
							$_SESSION["info"] = "Successfully Login.....";
							//echo "<script type='text/javascript'>$.notify('Successfully Login....','success')</script>";
							//echo "<script> window.location.assign('adminhome.php');</script>";
							header("refresh: 0; URL = adminhome.php");
						}
						else{
							echo "<script type='text/javascript'>$.notify('Wrong username or password','warn')</script>";
							//header("refresh: 1; URL = Home.php");
						}
				}

					?> 
				  <form class="w3-container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					  <label class="w3-center"><b>USERNAME</b></label>
					  <input style="width:80%;" class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
					  <label class="w3-center"><b>PASSWORD</b></label>
					  <input  style="width:80%;" class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
					  <button style="width:80%;" class="w3-btn-block w3-green w3-section w3-padding" type="submit">Login</button><br>
					  <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
				  </form>
				  </center> 
				<form action="adminsignup.php" method="POST"><button type="submit" class="w3-btn w3-red" style="margin-bottom:10px;">SIGN UP</button></form>
				
				</div>
           </div>
		   
			</div>
			
			<div class="w3-col" style="width:15%">
			<button class="w3-btn w3-hover-white" style="width:100%"><b style="color:#00a38c;display: inline-block;">PATIENT LOGIN</b></button>
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
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
</div>

<div class="main_menu w3-border" style="background:black;margin-top:-5px;">
<div class="w3-row">
	 <div class="w3-col" style="width:25%;margin-left:25px;"><a class="w3-hover-white"><b style="color:#00a38c;display: inline-block;">HOSPITAL MANAGEMENT</b></a></div>
	 <div class="w3-col" style="width:25%">
	 <div class="w3-dropdown-hover">
		<a class="w3-hover-white" style="color:#00a38c;"><b style="color:#00a38c;"><b>MANAGE PATIENT</b></a>
			<div class="w3-dropdown-content w3-hover">
			<form action="patientinform.php" method="POST"><button name="submit" class="w3-btn w3-hover-red" style="width:100%;">Patient Information</button></form>
			</div>
		  </div>
      </div>
    <div class="w3-col" style="width:25%">
	
	<div class="w3-dropdown-hover">
		<a class="w3-hover-white" style="color:#00a38c;"><b style="color:#00a38c;">MANAGE DOCTOR</b></a>
		<div class="w3-dropdown-content w3-hover">
			<button class="w3-btn w3-hover-red" style="width:100%;">Search Doctor</button>
			
		</div>
		
	</div>
	</div>
	<div class="w3-col" style="width:22%"><a class="w3-hover-white" href="Testmanage.php" style="color:#00a38c;"><b style="color:#00a38c;display: inline-block;">MANAGE TEST</b></a></div>	</div>
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
