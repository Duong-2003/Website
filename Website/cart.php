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
    ob_start();
    include($linkFE . 'header.php');
    ob_end_flush();

    include_once($linkconnWebsite);
    if (isset($_SESSION['username'])) {
        $name = $_SESSION['username'];
    } else {
        $connect->close();
        $notifi = "Vui lòng đăng nhập để vào giỏ hàng";
        echo "<script>window.location.href = './login.php?notifi=" . $notifi . "';</script>";
        exit();
    }

    $sql =  "SELECT * FROM donhang WHERE name = '$name'";
    $resul = $connect->query($sql);
    if ($resul) {
        $danhsachdonhang = [];
        while ($row =  mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
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
    ?>
    <h1>Giỏ hàng</h1>
    <ul>
        <?php
        $cartValueShow = 10;
        $pagination = ceil(count($danhsachdonhang) / $cartValueShow);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        if ($danhsachdonhang) : ?>
            <?php
            $firstPage = ($page - 1) * $cartValueShow;
            $endPage = $cartValueShow * $page;
            for ($i = $firstPage; $i < $endPage; $i++) : ?>
                <?php
                if (!isset($danhsachdonhang[$i]))
                    break;
                $donhang = $danhsachdonhang[$i];
                // Truy vấn sản phẩm tương ứng với đơn hàng
                $sql = "SELECT sanpham.*
                        FROM donhang
                        INNER JOIN sanpham ON donhang.sp_ma = sanpham.sp_ma
                        WHERE donhang.sp_ma = '" . $donhang['sp_ma'] . "';";
                $result = $connect->query($sql);
                $sp = array();

                if (!$result) {
                    echo ("Lỗi select đơn hàng");
                    exit();
                }

                while ($row = $result->fetch_assoc()) {
                    $sp = array(
                        'sp_ma' => $row['sp_ma'],
                        'sp_ten' => $row['sp_ten'],
                        'loaisp_ten' => $row['loaisp_ten'],
                        'sp_gia' => $row['sp_gia'],
                        'sp_mota' => $row['sp_mota'],
                        'sp_motachitiet' => $row['sp_motachitiet'],
                        'sp_img' => $row['sp_img'],
                        'sp_soluong' => $row['sp_soluong']
                    );
                }
                ?>

                <li>
                    <div class="card mb-3 " style="max-width: 540px; max-height: 200px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= $linkImgSp . $sp['sp_img'] ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $sp['sp_ten'] ?></h5>
                                    <p class="card-text">Mã đơn hàng: <?= $donhang['donhang_ma'] ?></p>
                                    <p class="card-text">Số lượng: <?= $donhang['donhang_soluongsp'] ?></p>
                                    <p class="card-text">Giá: <?= number_format($donhang['donhang_gia'], 0, '.', ',') ?> <sub>đ</sub></p>
                                    <p class="card-text">Trạng thái: <?= $donhang['donhang_trangthai'] ?></p>
                                    <p class="card-text"><small class="text-body-secondary">Ngày đặt: <?= $donhang['timeorder'] ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endfor; ?>
        <?php endif; ?>


    </ul>

    <nav aria-label="Page navigation example" style="display: flex;justify-content: center;">
        <ul class="cartValueShow$cartValueShow">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true" style="font-weight: bold;font-size: 30px;">&laquo;</span>
                </a>
            </li>
            <?php for ($i = 1; $i <= $pagination; $i++) : ?>
                <li class="page-item"><a class="page-link" href="./cart.php?page=<?= $i ?>" style="font-weight: bold;font-size: 30px;"> <?= $i ?></a> </li>
            <?php endfor; ?>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true" style="font-weight: bold;font-size: 30px;">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</body>

</html>