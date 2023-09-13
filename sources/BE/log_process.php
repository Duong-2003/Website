<?php
include('../linkFile.php');
include ($linkconnSources);
session_start();
ob_start();
$username = $_POST['account'];
$password = $_POST['password'];
if(isset($_POST['submit']) && $username != '' && $password != ''){
    $query = "SELECT * FROM users WHERE name = '$username'";
    $result = $connect->query($query);  
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $stored_hashed_password = $user['pass'];
        if (password_verify($password, $stored_hashed_password)) {
            if($user['role'] !=1){
            $connect->close();
            header("location:".$linkWebsite."website.php");
            exit();
            }
            else{
                $connect->close();
                header("location:../../admin/Includes/FE/MenuAdmin.php");
                exit(); 
            }
        } 
        else {
            echo "Sai mật khẩu!";
        }
    } else {
        // Tên đăng nhập không tồn tại
        echo "Tên đăng nhập không tồn tại!";
    }
}
else
{
    echo "Nhap tk mk!";
}
$connect->close();

?>
