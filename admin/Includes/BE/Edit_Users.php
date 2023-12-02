<?php
include("../linkAdmin.php");
include($linkconnIncludes);
include('./CheckImg.php');
session_start();
ob_start();

if (isset($_POST['submit']) && $_POST['name'] != '') {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $query = "UPDATE users 
                SET  pass='$pass', email='$email', address='$address'";
    if ($connect->query($query) === TRUE) {
        $connect->close();
        header("location:" . $linkPages . "ListUsers.php?notifi=Sửa thành công");
    } else {
        $connect->close();
        $error = "&error=Lỗi không sửa được sản phẩm: " . $connect->error;
        header("location:" . $linkPages . "Edit_Users.php?datakey=" . $_POST['name'] . $error);
    }
} else {
    $connect->close();
    $error = "&error=Chưa nhập đủ thông tin";
    header("location:" . $linkPages . "Edit_Users.php?datakey=" . $_POST['name'] . $error);
}
?>