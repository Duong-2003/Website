<?php
include('../linkFIle.php');
include ($linkconnSources);
session_start();

if (isset($_POST['submit']) && $_POST['donhang_soluongsp'] != '' && $_POST['sp_ma'] != '') {
    if (!isset($_SESSION['username'])) {
        $connect->close();
        $error = 'Vui lòng đăng nhập để đặt hàng';
        header("location:".$linkWebsite."login.php?error=".$error);
    }

        $sp_ma = $_POST['sp_ma'];
        $nameuser = $_SESSION['username'];
        $donhang_soluongsp = $_POST['donhang_soluongsp'];

        // Bảo mật: Sử dụng Prepared Statements để tránh SQL Injection
        $sql = "SELECT sp_gia FROM sanpham WHERE sp_ma = ?";
        $stmt = $connect->prepare($sql);
        $stmt->bind_param("i", $sp_ma);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $sp = $result->fetch_assoc();
            $sanpham_gia = $sp['sp_gia'];

            $donhang_gia = $donhang_soluongsp * $sanpham_gia;

            // Bảo mật: Sử dụng Prepared Statements
            $query = "INSERT INTO donhang (sp_ma, name, timeorder, donhang_gia, donhang_soluongsp, donhang_trangthai) VALUES (?, ?, NOW(), ?, ?, ?)";
            $stmt = $connect->prepare($query);
            $trangthai = 'Chờ xác nhận';
            $stmt->bind_param("isiss", $sp_ma, $nameuser, $donhang_gia, $donhang_soluongsp, $trangthai);


            if ($stmt->execute()) {
                echo "Thành công";
            } else {
                echo 'Lỗi đăng ký !' . $stmt->error;
            }
        } else {
            echo "Không có sản phẩm";
        }

        $stmt->close();
    
} else {
    echo "Input error";
}
$connect->close();
?>
