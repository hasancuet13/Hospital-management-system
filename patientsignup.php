<html>
<head>
<title>signup</title>
<link rel="stylesheet" type="text/css" href="patientsignup.css">
<link rel="stylesheet" type="text/css" href="w3school.css">
</head>
<body>
<div class="container">

<form method="POST" action="register.php">
<h2>Patient Sign up</h2>
<div class="w3-row">
<div class="w3-col" style="width: 35%; text-align: right; margin-right:-40px;color: white;">
<div style="margin-top: 12px; margin-bottom: 15px"><b>First Name:</b></div>
<div style="margin-top: 5px;"><b>Last Name:</b></div>
<div style="margin-top: 20px;"><b>User ID:</b></div>
<div style="margin-top: 20px;"><b>Password:</b></div>
<div style="margin-top: 20px;"><b>Confrim Password:</b></div>
<div style="margin-top: 10px;"><b>E-mail:</b></div>
<div style="margin-top: 20px;"><b>Mobile:</b></div>
</div>
<div class="w3-col w3-container" style="width: 50%">
<input name="fname" type="text" class="textinput" required>
<input name="lname" type="text" class="textinput" required>
<input name="userid" type="text" class="textinput" required>
<input name="pass" type="password" class="textinput" required>
<input name="conpass" type="password" class="textinput" required>
<input name="email" type="email" class="textinput" required>
<input name="mobile" type="text" class="textinput" required>
<input type="submit" name="LOGIN" class="btn-login">
</div>
</div>
</form>
</div>
</body>
</html>