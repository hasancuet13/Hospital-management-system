<html>
<head>
<title>signup</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="w3school.css">
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="notify.min.js"></script>
<script type="text/javascript" src="notify.js"></script>

<script type="text/javascript">
	$(document).ready(function()
	{
		$("#password").keyup(function()
		{
			var password = $(this).val();
				if(password.length<6){
				$("#result_password").html('<span class="error">Password aleast 6 characters</span>');
				}
				else{
					$("#result_password").html('');
				}
		});
	});
</script>

<script type="text/javascript">

$(document).ready(function(){
    $('#username').keyup(function(){
        var username = $(this).val(); // Get username textbox using $(this)
        var Result = $('#result_username'); // Get ID of the result DIV where we display the results
        if(username.length > 2) { // if greater than 2 (minimum 3)
            Result.html('Loading...'); // you can use loading animation here
            var dataPass = 'action=availability&username='+username;
            $.ajax({ // Send the username val to available.php
            type : 'POST',
            data : dataPass,
            url  : 'username_check.php',
            success: function(responseText){ // Get the result
                if(responseText == 0){
                    Result.html('<span class="success">Available</span>');
                }
                else if(responseText > 0){
                    Result.html('<span class="error">Username already exist</span>');
                }
                else{
                    alert('Problem with sql query');
                }
            }
            });
        }else{
            Result.html('Enter atleast 3 characters');
        }
        if(username.length == 0) {
            Result.html('');
        }
    });
});
</script>
<script type="text/javascript">

$(document).ready(function(){
    $('#email').keyup(function(){
		
        var email = $(this).val(); // Get username textbox using $(this)
		var result = $('#result_email'); // Get ID of the result DIV where we display the results
			if(email.length > 3) { // if greater than 2 (minimum 3)
				result.html('Loading...'); // you can use loading animation here
				var dataPass = 'action=availability&email='+email;
				$.ajax({ // Send the username val to available.php
				type : 'POST',
				data : dataPass,
				url  : 'email_check.php',
				success: function(responseText){ // Get the result
					if(responseText == 0){
						result.html('<span class="success">Available</span>');
					}
					else if(responseText > 0){
						result.html('<span class="error">Email already exist!!</span>');
					}
					else{
						alert('Problem with sql query');
					}
				}
				});
			}else{
				result.html('Enter atleast 3 characters');
			}
			if(email.length == 0) {
				result.html('');
			}
    });
});
</script>

<script type="text/javascript">

function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmpassword = $("#confirmpassword").val();

    if (password != confirmpassword){
        $("#result_confirmpassword").html('<span class="error">Passwords do not match!</span>');
        return false;
	}
    else
        $("#result_confirmpassword").html('<span class="success">Passwords match.</spand>');
    return true;
}

$(document).ready(function () {
   $("#password, #confirmpassword").keyup(checkPasswordMatch);
});

</script>


</script>
    <style type="text/css">
        .success
        {
            color: green;
        }
        .error
        {
            color: red;
        }
        .content
        {
            width:900px;
            margin:0 auto;
        }
        #username
        {
            width:500px;
            border:solid 1px #000;
            padding:10px;
            font-size:14px;
        }
		#password
        {
            width:500px;
            border:solid 1px #000;
            padding:10px;
            font-size:14px;
        }
		 #email
        {
            width:500px;
            border:solid 1px #000;
            padding:10px;
            font-size:14px;
        }
		 #confirmpassword
        {
            width:500px;
            border:solid 1px #000;
            padding:10px;
            font-size:14px;
        }
    </style>

</head>
<body>






<header class="signup">
<img src="logo.jpg" style="float: left;" width="10%" height="15%" >
<h1><font size="20">Hospital Management System</font></h1>
</header>

<h2>Register Form</h2>


<div class="w3-row">
<div class="w3-col" style="width:100%">

	<?php
		// define variables and set to empty values
		$usernameErr = $emailErr = $passwordErr= $password_matchErr =$mobileErr="";

		$cnt=0;
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		   	if (empty($_POST["username"])) {
		    } else {
		    	$username = htmlspecialchars($_POST["username"]);
		     	// check if name only contains letters and whitespace
		     	if (!preg_match("/^[a-zA-Z0-9_\.]*$/",$username)) {
		       		$usernameErr = "Letters and numbers allowed"; 
		     	} else { $cnt++;}
		   	}

		   	}
		   	if(empty($_POST["confirmpassword"])){
		   		$passwordErr = "Confirm Password";
		   	} else {
			   $password = htmlspecialchars($_POST["password"]);

		   		$password_match = htmlspecialchars($_POST["confirmpassword"]);
		   		if ($password_match==$password) {
		       		$cnt++;
		    	}
			}
			if(empty($_POST["password"])){
			   		$passwordErr = "Password is required";
			   	} else {
			   		$password = htmlspecialchars($_POST["password"]);
					if (!preg_match("/^[a-zA-Z0-9]*$/",$password)) {
			       		$passwordErr = "Letters and numbers allowed";
			     	} else { $cnt++; }
			   	}
				
			if(empty($_POST["mobile"])){
			   		$mobileErr = "Mobile is required";
			   	} else {
			   		$mobile = htmlspecialchars($_POST["mobile"]);
					if (!preg_match("/^[0-9]*$/",$mobile)) {
			       		$mobileErr = "Only numbers allowed";
			     	} else { $cnt++; }
			   	}
		  	
			   	$servername="localhost";
			    $username="root";
			    $pass="";
			    $dbname="login";
			    $conn=mysqli_connect($servername, $username, $pass, $dbname);
				
 		  	 	if($cnt==4){
				    $conn=mysqli_connect($servername, $username, $pass, $dbname);

				    if(!$conn->connect_error){
				      $sql = "INSERT INTO login_user(fname, lname, username, password, email, mobile, gender,bday) 
							VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."',".$_POST["mobile"].",'".$_POST["gender"]."','".$_POST["bday"]."')";
		
				    if($conn->query($sql)){
						echo "<script type='text/javascript'>$.notify('Registration Successful...','success')</script>"; 
				      	//header("Refresh: 5; URL = Home.php");
				      	echo "<script> window.location.assign('Home.php'); </script>";
				    }
				}   
			}
	
?>

	  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<div class="w3-row">
			<div class="w3-col" style="width:40%">
			    <div class="w3-right">
					<label cla><b>&nbsp&nbsp&nbspFirst Name:</b></label>
					<input id="fname" name="fname" pattern="[a-zA-Z]+" type="text" class="w3-input w3-border w3-margin-left" style="width:90%;" required><br>
	
					<label><b>&nbsp&nbsp&nbspLast Name:</b></label>
					<input id="lname" name="lname" pattern="[a-zA-Z]+" type="text" class="w3-input w3-border w3-margin-left" style="width:90%; align:center;" required><br>

					<label><b>&nbsp&nbsp&nbspUser Name:</b></label>
					<input id="username" name="username" pattern="[a-zA-Z0-9_\.]+" type="text" class="w3-input w3-border w3-margin-left" style="width:90%;" required><br>
					<label><b>&nbsp&nbsp&nbspPassword:</b></label>
					<input id="password" name="password" pattern="[a-zA-Z0-9_\.]+" type="password" class="w3-input w3-border w3-margin-left" style="width:90%;" required><br>
					<label><b>&nbsp&nbsp&nbspConfrim Password:</b></label>
					<input id="confirmpassword" name="confirmpassword" type="password" class="w3-input w3-border w3-margin-left" style="width:90%;" required><br>
					<label><b>&nbsp&nbsp&nbspE-mail:</b></label>
					<input id="email" name="email" type="email" class="w3-input w3-border  w3-margin-left" style="width:90%;" required><br>
					<label><b>&nbsp&nbsp&nbspMobile</b></label>
					<input id="mobile" name="mobile" pattern="[0-9]+" type="text" class="w3-input w3-border  w3-margin-left" style="width:90%;" required><br>
					<label><b>&nbsp&nbsp&nbspGender:</b></label>
					<label><input id="gender" name="gender" type="radio" value="male">Male</label>
					<label><input id="gender" name="gender" type="radio" value="female">Female</label>
					<label><input id="gender" name="gender" type="radio" value="other">Other</label><br>
					<label><b>&nbsp&nbsp&nbspBirthday:</b></label>
					<input id="date" type="date" name="bday" required><br>
					</div>
			</div>
			<div class="w3-col" style="width:20%">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<span class="error"> <?php echo $usernameErr;?></span>
				<span id="result_username" style="test-align:left;"></span>
				<br>
				<br>
				<br>
				<br>
				<span id="result_password" style="text-align:left;"></span>
				<br>
				<br>
				<br>
				<br>
				<span id="result_confirmpassword" style="text-align:left;"></span>
				<br>
				<br>
				<br>
				<br>
				<span id="result_email" style="text-align:left;"></span>
			</div>
		</div>
				<div class="w3-center w3-margin-top"><button type="submit" name="submit"><b>Submit</b></button><br></div>
	</form>
</div>
</div>

<footer class="signup">Copyright @ Ismail Hossain & Mohammad Hasan</footer>
</body>
</html>