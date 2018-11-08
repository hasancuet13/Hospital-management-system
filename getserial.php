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
<style>
</style>


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
<?php 
	if(isset($_SESSION["info"])){
		echo $_SESSION["info"];
	}
	$_SESSION["info"]="";
?>

	
	
	<div class="block1">
	<img src="photo/plus.png" style="float:left;width:100px;height:95px"></img>
	<h4 style="font-size:50;text-align:center;color:white;font-family:times new roman;">Hospital Management System</h4><br>
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
	
	<div class="w3-row" style="margin-left:150px;margin-right:150px;margin-top:5px;">

			<div class="w3-col" style="background:white;width:100%;border-style:double;">
			<h6 style='text-align:center;font-family:times new roman; font-size:50;color:green;'>Available Serial</h6>

			<table class="w3-table-all w3-margin-top w3-border" id="myTable">
							<tr style="background:gray;color:white;">
							  <td  class="w3-border" style="width:10%;text-align:center;">Patient_id</td>
							  <td  class="w3-border" style="width:30%;text-align:center;">Doctor Name</td>
							  <td  class="w3-border" style="width:5%;"></td>
							  <td  class="w3-border" style="width:10%;text-align:center;">Serial</td>
							
							  <td  class="w3-border" style="width:8%;text-align:center;">Meet Time</td>
							  <td  class="w3-border" style="width:10%;text-align:center;">Meet Date</td>
							  
							  
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
				 
				if(isset($_POST["submit"])){
					$_SESSION["dept"] = $_POST["submit"]; 
				}
				$dept = $_SESSION["dept"];
				//echo $dept;
				
				$sql = "SELECT * FROM patient_info";
				
								
				$result = $dbconnect->query($sql);
				//echo 'i love you';
				if($result->num_rows > 0){
					//echo 'i love you';
					$i=0;
					while($row = $result->fetch_assoc()){
					 $sp = " ";
					 $dept1 = $row["department_name"];
					 $id = $row["Patient_id"];
						if($dept == $dept1){
							$_SESSION["Patient_id"] = $id;
							$doctor="";
							$serial="";
							
							$sql1 = "SELECT * FROM patient_list where Patient_id = '$id'";
				
							$result1 = $dbconnect->query($sql1);
							$row1 = $result1->fetch_assoc();
							
							$j = ++$i;
							if(!$serial and !$doctor){
								$serial = $row1["Serial_no"];
								$doctor = $row1["Doctor_name"];
															
							}
							if($j%2==0){
								
								echo "<tr style='background:#c0c0c0;'><td><form action='patientserial.php' method='POST'><button class='w3-hover-red' style='color:blue;' name='submit' value=$id>$id</button></form></td><td>$doctor</td><td><form action='getserialdbconnect.php' method='POST'><button class='w3-btn w3-hover-red' style = 'width:90%;margin-left:3px;background:green;border-radius:5px;' name='click' value =$id>click</button></form></td><td style='text-align:center;'>$j</td><td><input type='time' placeholder='hh:mm AM/PM' style='width:100%'/></td><td><input placeholder='dd-mm-yyyy' type='date' style='width:100%'/></td></tr>";
							}
							else{
								echo "<tr style='background:white;'><td><form action='patientserial.php' method='POST'><button class='w3-hover-red' style='color:blue;' name='submit' value=$id>$id</button></form></td><td>$doctor</td><td><form action='getserialdbconnect.php' method='POST'><button class='w3-btn w3-hover-red' style = 'width:90%;margin-left:3px;background:green;border-radius:5px;' name='click' value =$id>click</button></form></td><td style='text-align:center;'>$j</td><td><input type='time' placeholder='hh:mm AM/PM' style='width:100%'/></td><td><input placeholder='dd-mm-yyyy' type='date' style='width:100%'/></td></tr>";
							}
							
						}
					}	
				}
				
								
			?>
			</table>
			
			<div id="id01" class="w3-modal">
				<div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:1500px">

				  <div class="w3-center"><br>
					<span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
						<br><br><br><br>
	
							
					</div>
				</div>
			</div>
			<!--<input type="button" value="PDF" onclick="call_download();" class="w3-btn" style="margin-left:10px;margin-top:-30px;">-->

				
				</div>
			
			</div>
				
				
			</div>
	</div>
	

</body>

</html>