<?php
include('../linkFIle.php');
include ($linkconnSources);
session_start();
ob_start();
if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != ''&& $_POST['rePass']!= ''){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $rePass = $_POST['rePass'];
    $role = 0;
    $error = null;
    $notifi = null;

    if($password != $rePass)
    {
        $connect->close();
        $error = 'Nhập lại mật khẩu sai';
        header("location:".$linkWebsite."register.php?error=".$error);
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
        $connect->close();
        $notifi = 'Đăng ký thành công';
        header("location:".$linkWebsite."login.php?notifi=".$notifi);
    }else {
        $error = 'Lỗi đăng ký !'. $conn->error;
        $connect->close();
        header("location:".$linkWebsite."register.php?error=".$error);
    }
    $connect->close();
}
else{
    $connect->close();
    $error = 'Chưa nhập toàn bộ thông tin bắt buộc';
    header("location:".$linkWebsite."register.php?error=".$error);
}
?>