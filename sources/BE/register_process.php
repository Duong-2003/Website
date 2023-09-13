<?php
include ('../connect.php');
session_start();
ob_start();
if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != ''&& $_POST['rePass']!= ''){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $rePass = $_POST['rePass'];
    $role = 0;
    
    if($password != $rePass)
    {
        $connect->close();
        header("location:../../Pages/register.php");
        exit(); 
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    if($email != ''){
        $hashed_email = password_hash($email, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (name, pass, role,email) VALUES ('$username', '$hashed_password','$role','$hashed_email')";
    }
    else{
        $query = "INSERT INTO users (name, pass, role,email) VALUES ('$username', '$hashed_password','$role',NULL)";
    }
    if ($connect->query($query) === TRUE) {
        header("location:../../Pages/login.php");
    }else {
        echo "Lỗi khi đăng ký: " . $connect->error;
    }
    $connect->close();
}
else{
    $connect->close();
    header("location:../../Pages/register.php");
    exit(); 
}
?>