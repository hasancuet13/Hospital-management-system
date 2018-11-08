<html>
<head>
<title>Admin's Information</title>
<style>
.phpcoding{width:900px; margin: 0 auto; background:LightBlue; padding:20px; min-height:600px;}
</style>
</head>
<body>
<section class="phpcoding">
<?php
$fname=$lname=$email=$website=$gender=$age=$comment=" ";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	echo "Name: ".$_POST["fname"]." ".$_POST["lname"];
	echo "<br>";
	echo "E-mail: ".$_POST["email"];
	echo "<br>";
	echo "Website: ".$_POST["website"];
	echo "<br>";
	echo "Gender: ".$_POST["gender"];
	echo "<br>";
	echo "Age: ".$_POST["age"];
	echo "Comment: ".$_POST["comment"];
	echo "<br>";
}

?>
</section>
</body>
</html>