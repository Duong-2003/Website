<?php
include('../connect.php');
session_start();
ob_start();
if(isset($_POST['submit']) && $_POST['sp_img'] != '' && $_POST['sp_motachitiet'] != '' && $_POST['sp_ten'] != '' && $_POST['sp_gia'] != ''&& $_POST['sp_soluong']!= ''){
    $name = $_POST['sp_ten'];
    $price = $_POST['sp_gia'];
    $describe = $_POST['sp_mota'];
    $describeDetail = $_POST['sp_motachitiet'];
    $quantity = $_POST['sp_soluong'];
    $type = $_POST['productType'];
    $img = $_POST['sp_img'];
    if(is_string($price)){
        $price = (float) str_replace(',', '', $price);
    }
    if($describe != ''){
        $query = "INSERT INTO sanpham (sp_ten, sp_gia, sp_mota,sp_motachitiet, sp_soluong,loaisp_ten,sp_img) 
        VALUES ('$name', '$price','$describe','$describeDetail','$quantity','$type','$img')";
    }
    else{
        $query = "INSERT INTO sanpham (sp_ten, sp_gia, sp_mota,sp_motachitiet, sp_soluong,loaisp_ten,sp_img) 
        VALUES ('$name', '$price',NULL,'$describeDetail','$quantity','$type','$img')";
    }
    if ($connect->query($query) === TRUE) {
        header("location:../../Pages/ListProduct.php");
        // echo ("Thành công");
    }else {
        echo "Lỗi không thêm được sản phẩm: " . $connect->error;
    }
    $connect->close();
}
else{
    $connect->close();
    // header("location:./adminIndex.php");
    echo ("chưa nhập toàn bộ ");
    exit(); 
}
?>