<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

    <!-- Main content -->
    <div class="container">
        <h1>Danh sách sp</h1>

        <?php
        // Truy vấn database để lấy danh sách
        // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
        include_once('connect.php');
      

        // 2. Chuẩn bị câu truy vấn $sql
        $sql ="SELECT * FROM sanpham";
        

        // 3. Thực thi câu truy vấn SQL để lấy về dữ liệu
        
        $res = $connect -> query ($sql);

        // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tách để sử dụng
        // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
        // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        $rowNum = 1;
        while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
            $data[] = array(
                'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'sp_ma' => $row['sp_ma'],
                'sp_ten' => $row['sp_ten'],
                'loaisp_ten' => $row['loaisp_ten'],
                'sp_gia' => $row['sp_gia'],
                'sp_mota' => $row['sp_mota'],
                'sp_motachitiet' => $row['sp_motachitiet'],
                'sp_img' => $row['sp_img'],
                'sp_soluong' => $row['sp_soluong'],
            );
            $rowNum++;
        }
        ?>

        <!-- Button Thêm mới -->
        <a href="List_add.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Thêm mới
        </a>

        <table class="table table-bordered table-info">
            <thead>
                <tr>
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Tên sản phẩm </th>
                    <th scope="col">Tên loại sản phẩm</th>
                    <th scope="col">Giá sp</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Mô tả chi tiết</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) : ?>
                    <tr>
                        <td><?php echo $row['sp_ma']; ?></td>
                        <td><?php echo $row['sp_ten']; ?></td>
                        <td><?php echo $row['loaisp_ten']; ?></td>
                        <td><?php echo $row['sp_gia']; ?></td>
                        <td><?php echo $row['sp_mota']; ?></td>
                        <td><?php echo $row['sp_motachitiet']; ?></td>
                        <td><?php echo $row['sp_img']; ?></td>
                        <td><?php echo $row['sp_soluong']; ?></td>
                        <td>
                             <!-- Button Sửa -->
                        <a href="list_update.php?id=<?php echo $row['sp_ma']; ?>" id="btnUpdate" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>

                        <!-- Button Xóa -->
                        <a href="list_del.php?id=<?php echo $row['sp_ma']; ?>" id="btnDelete" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Liên kết JS Jquery bằng CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <!-- Liên kết JS Popper bằng CDN -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- Liên kết JS Bootstrap bằng CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Liên kết JS FontAwesome bằng CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>

</html>