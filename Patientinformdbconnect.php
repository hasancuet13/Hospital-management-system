<?php
	if(isset($_POST["submit"])){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "login";
		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$symptom = $_POST["symptom"];
		//echo $symptom;
		$sql1 = "SELECT * FROM department where symptom = '$symptom'";
		
		$result = $conn->query($sql1);
		$row = $result->fetch_assoc();
		
		$department_name = $row["department_name"];
		//echo $department;
		
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$userid = $_POST["userid"];
		$address = $_POST["address"];
		$district = $_POST["district"];
		$division = $_POST["division"];
		$age = $_POST["age"];
		$day = $_POST["day"];
		$month = $_POST["month"];
		$year = $_POST["year"];
		$email = $_POST["email"];
		$cellphone = $_POST["cellphone"];
		$homephone = $_POST["homephone"];
		$contactmethod = $_POST["contactmethod"];
		$nid = $_POST["nid"];
		$maritalstatus = $_POST["maritalstatus"];
		$employment = $_POST["employment"];
		$preferredpharmacy = $_POST["preferredpharmacy"];
		$preferredpharmacyphone = $_POST["preferredpharmacyphone"];
		$pharmacyaddress = $_POST["pharmacyaddress"];
		
		//$symptom = $_POST["symptom"];
		
		$bonefractures = $_POST["bonefractures"];
		$exerciseactivity = $_POST["exerciseactivity"];
		$exercisedays = $_POST["exercisedays"];
		$tobaccouse = $_POST["tobaccouse"];
		$alcoholuse = $_POST["alcoholuse"];
		$caffeineuse = $_POST["caffeineuse"];
		$prescriptionmedication = $_POST["prescriptionmedication"];
		$allergies = $_POST["allergies"];
		
		$sql = "INSERT INTO patient_info(fname,lname, userid, address, district, division, month, day, year, age, email, cellphone, homephone, contactmethod, nid, maritalstatus, preferredpharmacy, preferredpharmacyphone,pharmacyaddress,employment,symptom,department_name,bonefractures,exerciseactivity,exercisedays,tobaccouse,alcoholuse,caffeineuse,prescriptionmedication,allergies)
		VALUES ('$fname','$lname', '$userid', '$address', '$district', '$division', '$month', '$day', '$year', '$age', '$email', '$cellphone', '$homephone', '$contactmethod', '$nid', '$maritalstatus', '$preferredpharmacy', '$preferredpharmacyphone','$pharmacyaddress', '$employment','$symptom','$department_name', '$bonefractures', '$exerciseactivity', '$exercisedays', '$tobaccouse', '$alcoholuse', '$caffeineuse', '$prescriptionmedication', '$allergies')";
		
		if ($conn->query($sql) == TRUE){
			//echo "<script type='text/javascript'>&.notify('message','success')</script>";
			echo "<script>window.location.assign('patientinform.php');</script>";
		}
		else{
			echo "i love you";
		}
	}

?>