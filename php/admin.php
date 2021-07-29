<?php 
include 'connection.php';
if (isset($_POST['submit'])) {
    $user = $_POST['userName'];
    $password =  $_POST['password'];
    $pass = md5($password);
    $adminPass = md5('admin');
    if($user == 'admin' && $pass == $adminPass){
        header('location: http://localhost/js_curd_2/html/admin.html');
    }else{
        $message = "please enter a valid user name and password";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='http://localhost/js_curd_2/html/adminLogin.html';</script>";
    };

    
}
?>