<!DOCTYPE html>

<head>
<title>Admin</title>
<link rel="icon" type="image/png" href="profilepic.png" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<header class="admin" >
<img src="logo.jpg" style="float: left;" width="7%" height="3%" >
<font size="20">Hospital Management System</font>
</header>

<h2>Login Form</h2>


<div style="background: #E6EAE9; margin:0 150px 0 150px; color: #4f6b72;" align="center">

<form action="login.php" method="POST">
<center>
  <div class="imgcontainer">
    <img src="profilepic.png" alt="Avatar" class="avatar">
  </div>

  <div class="fcontainer">
    <b>Username</b>
	<input type="text" placeholder="Enter Username" name="user" class="userinput" required><br>
    <b>Password</b>
    <input type="password" placeholder="Enter Password" name="pass" class="passinput" required><br>
	
    <button type="submit" class="signinbutton"><b>Sign in</b></button><br>
    <input type="checkbox" checked="checked"> Remember me
	
  </div>
</form>
<form action="SignUp.php">
<button type="submit"><b>Sign up</b></button>
</form>
</center>
 </div>

<footer class="admin">Copyright @ Ismail Hossain & Mohammad Hasan</footer>
</body>
</html>

