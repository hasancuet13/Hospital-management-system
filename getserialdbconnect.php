<?php
ob_start();
session_start();
?>

<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "login";
								
				$dbconnect = new mysqli($servername, $username, $password, $dbname);
				if($dbconnect->connect_error){
				die("Connection failed: " . $conn->connect_error);
				}
				$id = $_POST["click"];
				$sql = "SELECT * FROM patient_list where Patient_id = '$id'";
				
				$result = $dbconnect->query($sql);
				if($result->num_rows > 0){
					$_SESSION['info']= "<script type='text/javascript'>$.notify('Already have a serial....','warn')</script>";
					header('location: getserial.php');
				
				}
				
				
				$sql = "SELECT * FROM patient_info where Patient_id = '$id'";
				$result = $dbconnect->query($sql);
				$dept="";
				if($result->num_rows > 0){
					
					$row = $result->fetch_assoc();
					$dept = $row["department_name"];
				}
				$sql = "SELECT * FROM doctor_info where Specialist = '$dept'";
				
				$result = $dbconnect->query($sql);
				$doctor="";
				if($result->num_rows > 0){
					$flag = false;
					$i=0;
					while($row = $result->fetch_assoc()){
						$doctor = $row["Doctor_Name"];
						
						$sql1 = "SELECT * FROM patient_list where Doctor_name = '$doctor'";
						
						//echo $doctor;
						
						$result1 = $dbconnect->query($sql1);
						$row1 = $result1->fetch_assoc();
						
						//echo $row1["Doctor_name"].$row1["Patient_id"];
						//$flag = false;
						if($result1->num_rows < 2){
							$flag = true;
						
						//$count = 0;
						
						
						
						$sql = "INSERT INTO patient_list (Patient_id,Doctor_name)
							VALUES ($id,'$doctor')";
						
							if ($dbconnect->query($sql) == TRUE) {
								
								
								$_SESSION["doctor"] = $doctor;
								
								
							   $_SESSION['info']= "<script type='text/javascript'>$.notify('Successfully Add..','success')</script>";
							   	header('location: getserial.php');

							}
							//else $_SESSION['info']= "<script type='text/javascript'>$.notify('Fail to Add..','warn')</script>";
							

						}
						
						
					}
					if(!$flag){
						$_SESSION['info']= "<script type='text/javascript'>$.notify('Serial not available..','warn')</script>";
							header('location: getserial.php');
					}
					
				}
				else{
					$_SESSION['info']= "<script type='text/javascript'>$.notify('There is no Doctor....','warn')</script>";
					header('location: getserial.php');
				}
				


?>