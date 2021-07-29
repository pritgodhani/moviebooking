<?php
session_start();
include 'connection.php';
if (isset($_POST['submit'])) {
    // echo ("singIn");
    $email = $_POST['email'];
    $password =  $_POST['password'];
    $pass = md5($password);
    // echo($email);
    // echo($password);
    // echo($pass);
    
    $qury = "SELECT `email`, `password` FROM `register` WHERE email='{$email}'AND password='{$pass}'";
    $result = mysqli_query($mysqli,$qury); 
    $row = mysqli_num_rows($result);
    echo($row);
    if ($row==1) {
        echo $_SESSION["email"] = $email;
        header('location: http://localhost/js_curd_2/html/home.html');
    }
    else{
        
        $message = "please enter a valid email and password";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='http://localhost/js_curd_2/html/singIn.html';</script>";
    }
}
?>