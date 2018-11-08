<?php
define('server', 'localhost');
define('username', 'root');
define('password', '');
define('dbname', 'login');

$connection = mysqli_connect(server,username,password,dbname);

if(isset($_POST['action']) && $_POST['action'] == 'availability'){
        $email = mysqli_real_escape_string($connection,$_POST['email']); // Get the email values
            $query  = "select email from login_user where email='".$email."'";
            $res    = mysqli_query($connection,$query);
            $count  = mysqli_num_rows($res);
            echo $count;
    }
?>
