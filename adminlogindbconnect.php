<?php
ob_start();
session_start();
?>
<?php
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
		echo "<script> window.location.assign('adminhome.php');</script>";
	}
	else{
		echo "<script type='text/javascript'>&.notify('Wrong username or password','warn')</script>";
		header("refresh: 1; URL = Home.php");
		//echo "<script> window.location.assign('Home.php');</script>";
	}

?>

