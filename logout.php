<?php

ob_start();
session_start();
if(isset($_SESSION['sessionusername'])){
	
	session_unset();
	header('Location:Home.php');
}
?>