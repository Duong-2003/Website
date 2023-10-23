<body>
    <div>
        Sắp xếp
    </div>

    <?php

    include_once($linkconnWebsite);

    $valueCartShow = 20;
    $page;
    if ($_GET['page'] != '' || $_GET['page'] != null) {
        $page = $_GET['page'];
    } else {
        echo "ERROR: Không nhận được trang";
        exit();
    }
    $page = $_GET['page'];
    $minShow = $valueCartShow * ($page - 1);

    $sql = "SELECT * FROM sanpham LIMIT $minShow,$valueCartShow";
    $result = $connect->query($sql);
    $duongdanimg = $linkImgSp;

    $dataArray = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $dataArray[] = $row;
        }
    }

    ?>

    <div class="container text-center">
        <div class="row">
            <?php foreach ($dataArray as $data) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 py-2" id="font-card">
                    <div id="card<?= $i ?>" class="card">
                        <img src="<?= $duongdanimg . $data['sp_img'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">Tên sản phẩm:<?= $data['sp_ten'] ?></p>
                            <p class="card-text">Giá sản phẩm:<?= $data['sp_gia'] ?></p>
                            <a href="./product.php?sp_ma=<?= $data['sp_ma'] ?>" class="btn btn-primary">Xem</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div>
        <?php
        $sql =  "SELECT COUNT(*) as total FROM sanpham";
        $result = $connect->query($sql);
        $total = 0;
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $total = $row['total'];
        }
        $pagination = ceil($total / $valueCartShow);
        // Đóng kết nối
        $connect->close();
        ?>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php for ($i =1; $i<= $pagination ;$i++) : ?>
                    <li class="page-item"><a class="page-link" href="./List.php?page=<?=$i?>" > <?=$i?></a> </li>
                <?php endfor; ?>
                <li class="page-item"> 
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</body>