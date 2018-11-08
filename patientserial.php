<?php
ob_start();
session_start();
?>
<html>
<head>
<title>Patientserial</title>

<link rel="stylesheet" type="text/css" href="w3school.css">
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="jquery-3.1.1.js"></script>
<script type="text/javascript" src="notify.js"></script>
<script type="text/javascript" src="notify.min.js"></script>


    <script type="text/javascript">
      // this function is based on code found:
      // http://www.filamentgroup.com/lab/jquery_plugin_for_requesting_ajax_like_file_downloads/
      // to easily make a form and POST it
      var download = function(url, data, method){
        //url and data options required
        if( url && data ){
          jQuery('<form style="display: none" id="dr_submission" action="' + url
                 + '" method="' + (method||'post') + '">'
                 + '</form>').appendTo('body');
          //credentials
          jQuery('form#dr_submission').append('<textarea name="user_credentials"></textarea>');
          jQuery('form#dr_submission textarea[name=user_credentials]').val(data.user_credentials);

          //doc values
          for(var key in data.doc) {
            jQuery('form#dr_submission').append('<textarea name="doc['+key+']"></textarea>');
            jQuery('form#dr_submission textarea[name="doc['+key+']"]').val(data.doc[key]);
          }

          //submit the form
          if(confirm("press ok")) {jQuery('form#dr_submission').submit().remove(); }
        };
      };

      // setup the string represeting the html we want to submit
      var content = "Masudur Rahman";

      var data = {
        doc: {
          test: true,
          type: 'pdf',
          document_content: content
        },
        user_credentials: "YOUR_API_KEY_HERE"
      };

      var call_download = function() {
        // this drops a form on the page and submits, which will result in a download dialog popping up
        download("http://docraptor.com/docs", data);
      };
    </script>

<style>
.block1{
	background:red;
	margin-left:150px;
	margin-right:150px;
	
	
}
.block2{
	background:blue;
	margin-left:150px;
	margin-top:10px;
	width:15%;
	height:30%;
	
}
.block3{
	background:white;
	margin-left:0px;
	margin-top:10px;
	width:50%;
	height:50%;
	
}
.btn{
	margin-top:10px;
	margin-left:5px;
	margin-right:10px;
	width:95%;
	padding:10px 0px;
	border-radius: 10px;
	color: #9f6a08;
	font-size:20px;
	border: none;
	background-color: white;
}
.btn:hover{
	color:white;
	background:red;
}
</style>

</head>


<body style="background:#00a38c;">

	
	
	<div class="block1">
	<img src="photo/plus.png" style="float:left;width:100px;height:95px"></img>
	<div style="font-size:50;text-align:center;color:white;font-family:times new roman;"> Hospital Management System</div><br>
	<ul class="w3-navbar w3-black">
	 <li><a style="font-size:20px;" href="adminhome.php">Home</a></li>
	 <li><a style="font-size:20px;">Date:</a></li>
	 <li><a style="font-size:20px;">Department:
	 <?php 
			    $servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "login";
								
				$dbconnect = new mysqli($servername, $username, $password, $dbname);
				if($dbconnect->connect_error){
				die("Connection failed: " . $conn->connect_error);
				}
				$id = $_SESSION["Patient_id"];
				
				$sql = "SELECT * FROM patient_info where Patient_id = '$id'";
				
								
				$result = $dbconnect->query($sql);
				$row = $result->fetch_assoc();
				
				$dept = $row["department_name"];
				
				echo $dept;
				
				//$row1 = $result1->fetch_assoc();
				
				
				?></a></li>
	  <li  style="float:right;" ><a style="font-size:20px;"><?php echo $_SESSION["sessionusername"];?></a></li>	  
	  
	</ul>
	</div>
		
		
			<div style="background:white;width:76.7%;border-style:double;margin-left:150px;margin-left:150px;margin-top:5px;">
			
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "login";
								
				$dbconnect = new mysqli($servername, $username, $password, $dbname);
				if($dbconnect->connect_error){
				die("Connection failed: " . $conn->connect_error);
				}
				$id = $_POST["submit"];			
				$sql = "SELECT * FROM patient_info where Patient_id = $id";
				
								
				$result = $dbconnect->query($sql);
				
				if($result->num_rows > 0){
					$row = $result->fetch_assoc();
					$fname = $row["fname"];
					$lname = $row["lname"];
					$id = $row["Patient_id"];
					$address = $row["address"];
					$district = $row["district"];
					$division = $row["division"];
					$age = $row["age"];
					$day = $row["day"];
					$month = $row["month"];
					$year = $row["year"];
					$email = $row["email"];
					$cellphone = $row["cellphone"];
					
					$contactmethod = $row["contactmethod"];
					
					$maritalstatus = $row["maritalstatus"];
					
					$preferredpharmacy = $row["preferredpharmacy"];
					$preferredpharmacyphone = $row["preferredpharmacyphone"];
					$pharmacyaddress = $row["pharmacyaddress"];
					$symptom = $row["symptom"];
					
					$_SESSION["symp"] = $row["department_name"];
					
					$exerciseactivity = $row["exerciseactivity"];
					$exercisedays = $row["exercisedays"];
					$tobaccouse = $row["tobaccouse"];
					$alcoholuse = $row["alcoholuse"];
					$caffeineuse = $row["caffeineuse"];
					
				}
				
				
			?>
			<h6 style="text-align:center;font-family:times new roman; font-size:50;color:green;">Patient Information</h6>
			<!--<input type="button" value="PDF" onclick="call_download();" class="w3-btn" style="margin-left:10px;margin-top:-30px;">-->

				
				<?php

					$sp = " ";
					$cm = ",";
					$hi = "-";
					?>
					<table style="margin-left:50px;color:black;font-family:times new roman;font-size:21;">
					<tr>
					<td><p>Patient Name: </p></td><td><?php echo $fname.$sp.$lname;?></td>
					</tr>
					<tr>
					<td><p>Userid: </p></td><td><?php echo $id;?></td>
					</tr>
					<tr>
					<td><p>Symptom: </p></td><td><?php echo $symptom;?></td>
					
					</tr>
					<tr>
					<td><p>Age: </p></td><td><?php echo $age;?></td>
					</tr>
					<tr>
					<td><p>Date of Birth: </p></td><td><?php echo $day.$hi.$month.$hi.$year;?></td>
					</tr>
					<tr>
					<td><p>Mobile: </p></td><td><?php echo $cellphone;?></td>
					</tr>
					
					
					
					<tr>
					<td><p>Preferred Pharmacy: </p></td><td><?php echo $preferredpharmacy;?></td>
					</tr>
					<tr>
					<td><p>Preferred Pharmacy Phone: </p></td><td><?php echo $preferredpharmacyphone;?></td>
					</tr>
					<tr>
					<td><p>Preferred Pharmacy Address: </p></td><td><?php echo $pharmacyaddress;?></td>
					</tr>
					<tr>
					<td><p>Exercise Activity: </p></td><td><?php echo $exerciseactivity;?></td>
					</tr>
					<tr>
					<td><p>Exercise days/week: </p></td><td><?php echo $exercisedays;?></td>
					</tr>
					<tr>
					<td><p>Tobacco Use: </p></td><td><?php echo $tobaccouse;?></td>
					</tr>
					<tr>
					<td><p>Alcohol Use: </p></td><td><?php echo $alcoholuse;?></td>
					</tr>
					<tr>
					<td><p>E-mail: </p></td><td><?php echo $email;?></td>
					</tr>
					<tr>
					<td><p>Address: </p></td><td><?php echo $address.$cm.$district.$cm.$division;?></td>
					</tr>
						
				</table>
				</div>
			
			</div>
				
				
			</div>
	</div>
	

</body>

</html>