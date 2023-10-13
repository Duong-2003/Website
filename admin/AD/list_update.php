<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop bán hàng</title>
    <!-- Liên kết JS Jquery bằng CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <!-- Liên kết JS Popper bằng CDN -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- Liên kết JS Bootstrap bằng CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Liên kết JS FontAwesome bằng CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <!-- Liên kết CSS Bootstrap bằng CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <?php
    // Truy vấn database
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    include_once('connect.php');

    // 2. Chuẩn bị câu truy vấn $sqlSelect, lấy dữ liệu ban đầu của record cần update
    // Lấy giá trị khóa chính được truyền theo dạng QueryString Parameter key1=value1&key2=value2...
    $sp_ma = $_GET['id'];
    $sqlSelect = "SELECT * FROM `sanpham` WHERE sp_ma=$sp_ma;";

    // 3. Thực thi câu truy vấn SQL để lấy về dữ liệu ban đầu của record cần update
    $resultSelect = mysqli_query($connect, $sqlSelect);
    $Row = mysqli_fetch_array($resultSelect, MYSQLI_ASSOC); // 1 record

    // Nếu không tìm thấy dữ liệu -> thông báo lỗi
    if (empty($Row)) {
        echo "Giá trị id: $id không tồn tại. Vui lòng kiểm tra lại.";
        die;
    }
    ?>

    <!-- Main content -->
    <div class="container">
        <h1>Form Cập nhật Nhà cung cấp</h1>

        <form name="frmEdit" id="frmEdit" method="post" action="" class="form">
            <table class="table">
                <tr>

                <tr>
                    <td>Mã sản phẩm</td>
                    <td><input type="text" name="sp_ma" id="sp_ma" class="form-control" value="<?php echo $Row['sp_ma'] ?>" /></td>
                </tr>
                <tr>
                    <td>Tên sản phẩm </td>
                    <td><input type="text" name="sp_ten" id="sp_ten" class="form-control" value="<?php echo $Row['sp_ten'] ?>" /></td>
                </tr>
                <tr>
                    <td>Tên loại sản phẩm</td>
                    <td><input type="text" name="loaisp_ten" id="loaisp_ten" class="form-control" value="<?php echo $Row['loaisp_ten'] ?>" /></td>
                </tr>
                <tr>
                    <td>Giá sp</td>
                    <td><input type="text" name="sp_gia" id="sp_gia" class="form-control" value="<?php echo $Row['sp_gia'] ?>" /></td>
                </tr>
                <tr>
                    <td>Mô tả </td>
                    <td><input type="text" name="sp_mota" id="sp_mota" class="form-control" value="<?php echo $Row['sp_mota'] ?>" /></td>
                </tr>
                <tr>
                    <td>Mô tả chi tiết</td>
                    <td><input type="text" name="sp_motachitiet" id="sp_motachitiet" class="form-control" value="<?php echo $Row['sp_motachitiet'] ?>" /></td>
                </tr>
                <tr>
                    <td>Ảnh </td>
                    <!-- <td><textarea name="sp_img" id="sp_img" class="form-control" value="<?php echo $Row['sp_img'] ?>" ></textarea></td> -->
                    <td><input type="file" name="sp_img" id="sp_img" class="form-control" value="<?php echo $Row['sp_img'] ?>" /></td>
                </tr>
                <tr>
                    <td>Số lượng</td>
                    <td><input type="text" name="sp_soluong" id="sp_soluong" class="form-control" value="<?php echo $Row['sp_soluong'] ?>" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Lưu dữ liệu</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>


    <?php
    // 4. Nếu người dùng có bấm nút Đăng ký thì thực thi câu lệnh UPDATE
    if (isset($_POST['btnSave'])) {
        // Lấy dữ liệu người dùng hiệu chỉnh gởi từ REQUEST POST
        $sp_ma = $_POST['sp_ma'];
        $sp_ten = $_POST['sp_ten'];
        $loaisp_ten = $_POST['loaisp_ten'];
        $sp_gia = $_POST['sp_gia'];
        $sp_mota = $_POST['sp_mota'];
        $sp_motachitiet = $_POST['sp_motachitiet'];
        $sp_img = $_POST['sp_img'];
        $sp_soluong = $_POST['sp_soluong'];

        // Câu lệnh UPDATE
        $sql = "UPDATE  `sanpham` SET sp_ma='$sp_ma', sp_ten='$sp_ten', loaisp_ten='$loaisp_ten', sp_gia='$sp_gia', sp_mota='$sp_mota', sp_motachitiet='$sp_motachitiet',sp_img='$sp_img',sp_soluong='$sp_soluong'
        WHERE sp_ma=$sp_ma;";

        mysqli_query($connect, $sql);

        // Đóng kết nối
        mysqli_close($connect);

        // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
        header('location:list.php');
    }
    ?>


</body>

</html>