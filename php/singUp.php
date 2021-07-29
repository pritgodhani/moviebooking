<?php

include 'connection.php';
if (isset($_POST['submit'])) {
    echo ("singup");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =  $_POST['password'];
    $confirm_password = $_POST['confirm_Password'];
    $pass = md5($password);
    $cpass = md5($confirm_password);    if($password == $confirm_password){
        echo $qury = "INSERT INTO `register`(`name`, `email`, `password`, `confirm_password`)  VALUES ('$name', '$email','$pass','$cpass')";
        mysqli_query($mysqli,$qury);
      
$message = "register succsesfully!!!";
echo "<script type='text/javascript'>alert('$message');
window.location.href='http://localhost/js_curd_2/html/index.html?';</script>";
        // header('location: ');
    }else{
        $message = "Your password and confirmation password do not match.";
echo "<script type='text/javascript'>alert('$message');
window.location.href='http://localhost/js_curd_2/html/singUp.html?';</script>";
};
     

    
}
