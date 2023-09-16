<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>

    <?php
    include('../sources/linkFIle.php');
    ?>

</head>

<body>
    <?php
    session_start();
    include($linkFE.'header.php');
    include($linkFE.'menu.php');

    
    include_once($linkconnWebsite);
        if (isset($_SESSION['username'])) {
            $name = $_SESSION['username'];
        } else {
            $connect->close();
            header("location:./login.php?error='Vui lòng đăng nhập để vào giỏ hàng'");
        }

        $sql =  "SELECT * FROM donhang WHERE name = '$name'";
        $resul = $connect->query($sql);
        if($resul){
            $danhsachdonhang = [];
            while($row =  mysqli_fetch_array($resul,MYSQLI_ASSOC)){
                    $danhsachdonhang[] = array(
                        'donhang_ma' => $row['donhang_ma'],
                        'sp_ma' => $row['sp_ma'],
                        'name' => $row['name'],
                        'timeorder' => $row['timeorder'],
                        'donhang_trangthai' => $row['donhang_trangthai'],
                        'donhang_gia' => $row['donhang_gia'],
                        'donhang_soluongsp' => $row['donhang_soluongsp']
                    );
            }
        }
        $connect->close();
    ?>
    <h1>Giỏ hàng</h1>
    <ul>
    <?php
    if ($danhsachdonhang): ?>
        <?php foreach ($danhsachdonhang as $donhang): ?>
            <li>
                <div class="card mb-3" style="max-width: 540px; max-height: 200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= $linkImgSp . 'ip7.png' ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Sản phẩm</h5>
                                <p class="card-text">Số lượng: 30</p>
                                <p class="card-text">Giá: 3,000,000</p>
                                <p class="card-text">Trạng thái: Đang giao</p>
                                <p class="card-text"><small class="text-body-secondary">Ngày đặt: 30/3/2023</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    <?php endif; 
    ?>
    
    </ul>
</body>
</html>
    