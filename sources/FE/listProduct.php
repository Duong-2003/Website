

<style>
    .dropdown-content a {
        background-color: #6c757d;
        color: aliceblue;
    }
    .card {
        transition: transform 0.3s;
        margin-bottom: 20px;
    }

    .card:hover {
        transform: scale(1.1);
    }

</style>

<body>
    <?php

    include_once($linkconnWebsite);

    $productValueShow = 20;
    $page;
    if ($_GET['page'] != '' || $_GET['page'] != null) {
        $page = $_GET['page'];
    } else {
        echo "ERROR: Không nhận được trang";
        exit();
    }
    $arrange = isset($_GET['arrange']) ? $_GET['arrange'] : "";
    $minShow = $productValueShow * ($page - 1);

    if ($arrange == "") {
        $sql = "SELECT * FROM sanpham LIMIT $minShow,$productValueShow";
    } else if ($arrange == "price") {
        $sql = "SELECT * FROM sanpham ORDER BY sp_gia DESC LIMIT $minShow,$productValueShow";
    }

    $result = $connect->query($sql);
    $duongdanimg = $linkImgSp;

    $dataArray = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $dataArray[] = $row;
        }
    }

    ?>

    <div class="container px-5" style="margin-top:10px">

        <ul>
            <li>
                <a href="" style="color:red;text-decoration:none;font-size:30px">
                    <hr>Sản phẩm mới nhất
                    <hr>
                </a>
                <div class="dropdown ">

                    <a href="#" class="btn btn-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sắp Xếp
                    </a>
                    <div class="dropdown-content">
                        <a href="#" style="cursor: pointer; border-radius:6px" class="menu-dropdown" id="menu-dr-price">Theo giá</a>
                        <a href="#" style="cursor: pointer;border-radius:6px" class="menu-dropdown" id="menu-dr-reviews">Theo đánh giá</a>
                        <!-- <a  href="./List.php?page=1&&arrange=reviews" class="menu-dropdown" id ="menu-dr-reviews">Theo đánh giá</a>  -->
                    </div>
                </div>
            </li>
        </ul>
    </div>





    <script>
        var arrange = "<?php echo $arrange ?>";
        var element;
        if (arrange == "price") {
            element = document.getElementById("menu-dr-price");

            console.log(element + " testt");
        } else if (arrange == "reviews") {
            element = document.getElementById("menu-dr-reviews");
        }
        if (element)
            element.style.backgroundColor = "#6464d8";

        document.getElementById("menu-dr-price").addEventListener("click", function() {
            if (arrange == "price")
                window.location.href = "./List.php?page=1";
            else {
                window.location.href = "./List.php?page=1&&arrange=price";
            }
        });
    </script>
    </div>



    <div class="container text-center ">
        <div class="row">
            <?php foreach ($dataArray as $data) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 py-2" id="font-card">
                    <div id="card<?= $i ?>" class="card">
                        <img src="<?= $duongdanimg . $data['sp_img'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">
                                <!-- Tên sản phẩm: -->
                                <?= $data['sp_ten'] ?>
                            </p>
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
        $pagination = ceil($total / $productValueShow);
        // Đóng kết nối
        $connect->close();
        ?>

        <nav aria-label="Page navigation example" style="display: flex; justify-content: center;">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true" style="font-weight: bold; font-size: 30px;">&laquo;</span>
                    </a>
                </li>
                <?php for ($i = 1; $i <= $pagination; $i++) : ?>
                    <li class="page-item">
                        <a class="page-link" href="./List.php?page=<?= $i ?>" style="font-weight: bold; font-size: 30px;">
                            <?= $i ?>
                        </a>
                    </li>
                <?php endfor; ?>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true" style="font-weight: bold; font-size: 30px;">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>