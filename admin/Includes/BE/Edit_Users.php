<?php
include("../linkAdmin.php");
include($linkconnIncludes);
include('./CheckImg.php');
session_start();
ob_start();

if (isset($_POST['submit']) && $_POST['name'] != '') {
    $user_name = $_POST['name'];
    $user_pass = $_POST['pass'];
    $user_email = $_POST['email'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    $query = "UPDATE users 
                SET pass='$user_pass', email='$user_email', address ='$address', role ='$role'
                WHERE name='$user_name'";
    if ($connect->query($query) === TRUE) {
        $connect->close();
        header("location:" . $linkPages . "ListUsers.php?notifi=Sửa thành công");
        exit(); // Thêm dòng này để ngăn mã tiếp tục chạy sau khi chuyển hướng
    } else {
        $connect->close();
        $error = "&error=Lỗi không sửa được sản phẩm: " . $connect->error;
        header("location:" . $linkPages . "Edit_Users.php?datakey=" . $_POST['name'] . $error);
        exit(); // Thêm dòng này để ngăn mã tiếp tục chạy sau khi chuyển hướng
    }
} else {
    $connect->close();
    $error = "&error=Chưa nhập đủ thông tin";
    header("location:" . $linkPages . "Edit_Users.php?datakey=" . $_POST['name'] . $error);
    exit(); // Thêm dòng này để ngăn mã tiếp tục chạy sau khi chuyển hướng
}
// Lấy giá trị quyền từ trường select
$user_role = $_POST['role'];

// Kiểm tra giá trị quyền hợp lệ
if (in_array($user_role, $allowedRoles)) {
  // Thực hiện truy vấn SQL để cập nhật quyền người dùng
  $query = "UPDATE users 
            SET role = '$user_role'
            WHERE name = '$user_name'";

  if ($connect->query($query) === TRUE) {
    // Truy vấn thành công, chuyển hướng đến trang thông báo thành công
    $connect->close();
    header("location:" . $linkPages . "ListUsers.php?notifi=Sửa thành công");
    exit();
  } else {
    // Truy vấn không thành công, chuyển hướng đến trang thông báo lỗi
    $connect->close();
    $error = "&error=Lỗi không sửa được quyền";
    header("location:" . $linkPages . "ListUsers.php" . $error);
    exit();
  }
} else {
  // Giá trị quyền không hợp lệ, chuyển hướng đến trang thông báo lỗi
  $error = "&error=Giá trị quyền không hợp lệ";
  header("location:" . $linkPages . "ListUsers.php" . $error);
  exit();
}
?>


