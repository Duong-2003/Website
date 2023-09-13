<?php
include('../linkFile.php');
include ($linkconnSources);

session_start();
ob_start();
$username = $_POST['account'];
$passwordReset = $_POST['passwordReset'];
$email = $_POST['email'];

if(isset($_POST['submit']) && $username != '' && $passwordReset != '' &&  $email != ''){
    $select_sql = "SELECT * FROM users WHERE name = '$username'";
    $result = $connect->query($select_sql);
    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();
        $stored_hashed_email = $user['email'];
        if($stored_hashed_email == NULL){
            echo "Tài khoản không có email không thể lấy lại";
            exit();
        }
        if (!password_verify($email, $stored_hashed_email)){
            echo "Nhấp sai email";
            exit();
        }
        $hashed_password = password_hash($passwordReset, PASSWORD_DEFAULT);
        $update_sql = "UPDATE users
                        SET pass = '$hashed_password'
                        WHERE name = '$username'";
        if ($connect->query($update_sql) === TRUE) {
            echo "Thay đổi mật khẩu thành công";
        } else {
            echo "Thay đổi mật khẩu không thành công". $conn->error;
        }
        
    } else {
        echo "Tài khoản đã nhập chưa đăng ký.";
    }
}
else
{
    echo "Nhap tk mkreset!";
}
$connect->close();

?>
