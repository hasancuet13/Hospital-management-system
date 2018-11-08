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
	background:black;
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

	<div style="font-size:50;text-align:center;color:white;font-family:times new roman;"> Hospital Management System</div>
	
	<div class="block1">
	<ul class="w3-navbar w3-black">
	  <li><a style="font-size:20px;" href="#">Home</a></li>
	  <li  style="float:right;" ><a style="font-size:20px;" href="#">Admin Name</a></li>	  
	  
	</ul>
	</div>
	<div class="w3-row" style="margin-left:150px;margin-right:150px;margin-top:10px;">
		
			<div class="w3-col" style="background:blue;width:15%;">
			 <button class="btn">Date</button><br>
			 <button class="btn">
			 <?php 
			    
				$symp = $_SESSION["symp"];
				
				echo $symp;
				
				//$row1 = $result1->fetch_assoc();
				
				
				?>
				</button><br>
			 <button class="btn">Doctor</button><br>
			 <button class="btn" style="margin-bottom:5px;">Serial</button><br>
			</div>
		
		
			<div class="w3-col" style="background:white;width:84%;border-radius:10px;border-style:double;margin-left:10px;">
			<h6 style='text-align:center;font-family:times new roman; font-size:50;color:green;'>Doctor who are present</h6>;

			<table class="w3-table-all w3-margin-top w3-border" id="myTable">
							<tr>
							  <td  class="w3-border" style="width:20%;">ID</td>
							  <td  class="w3-border" style="width:40%;">Doctor Name</td>
							  <td  class="w3-border" style="width:20%;">Qualification</td>
							  <td  class="w3-border" style="width:40%;"></td>
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
				$dept = $_POST["submit"];
				//echo $dept;
				
				$sql = "SELECT * FROM doctor_info where Specialist = '$dept'";
				
								
				$result = $dbconnect->query($sql);
				//echo 'i love you';
				if($result->num_rows > 0){
					//echo 'i love you';
					while($row = $result->fetch_assoc()){
					 $sp = " ";
					 $dname = $row["Doctor_Name"];
					 $Qualification = $row["Qualification"];
					 $id = $row["Doctor_Id"];
					 
					 
					echo "<tr><td>$id</td> <td>$dname</td><td>$Qualification</td><td><h3 style='font-family:arial;color:green;font-size:15;'><b>Online now</b></h3></td></tr>";

					 
					}
					
				}
				else{
				 echo "<h4>No Doctor Avaiable of <font color='red' size='20'>$dept</font> Department</h4>";
				}
								
			?>
			</table>
			
			<!--<input type="button" value="PDF" onclick="call_download();" class="w3-btn" style="margin-left:10px;margin-top:-30px;">-->

				
				</div>
			
			</div>
				
				
			</div>
	</div>
	

</body>

</html>