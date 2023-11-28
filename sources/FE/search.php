<style>
    .dropdown-content>a {
        background-color: #6c757d;
        color: aliceblue;
    }
</style>

<body>

    <?php

    
    include($linkconnWebsite);
    $search = strtolower($_GET['search']);
$arrange = isset($_GET['arrange']) ? $_GET['arrange'] : "";
// Sử dụng Prepared Statements để tránh lỗ hổng SQL Injection
if($arrange == "price") {
    $query = "SELECT * FROM sanpham WHERE LOWER(sp_ten) LIKE ? ORDER BY sp_gia DESC";
}
else {
    $query = "SELECT * FROM sanpham WHERE LOWER(sp_ten) LIKE ?";
}

$stmt = $connect->prepare($query);
// Bắt đầu binding parameters và thực hiện truy vấn
$searchParam = "%" . $search . "%";
$stmt->bind_param("s", $searchParam);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo '<span style="color: red;font-size: 30px;">Không có sản phẩm nào có từ khóa: ' . htmlspecialchars($search) . '</span>';
    exit();
}

$name = [];
while ($row = $result->fetch_assoc()) {
    $name[] = $row;
}

    ?>
    <div>
    <div class="dropdown ">
        <a class="btn btn-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sắp Xếp
        </a>
        <div class="dropdown-content">
            <a style="cursor: pointer;" class="menu-dropdown" id="menu-dr-price">Theo giá</a>
            <a style="cursor: pointer;" class="menu-dropdown" id="menu-dr-reviews">Theo đánh giá</a>
            <!-- <a  href="./List.php?page=1&&arrange=reviews" class="menu-dropdown" id ="menu-dr-reviews">Theo đánh giá</a>  -->
        </div>
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
            if(element)
            element.style.backgroundColor = "red";

            document.getElementById("menu-dr-price").addEventListener("click", function() {
                if (arrange == "price")
                    window.location.href = "./ListSearch.php?search=<?=$search?>&&page=1";
                else {
                    window.location.href = "./ListSearch.php?search=<?=$search?>&&page=1&&arrange=price";
                }
            });
        </script>
    </div>



    <div class="container text-center">
        <div class="row">
            <?php foreach ($name as $data) : ?>
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
        $pagination = ceil($total / 20);
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
                <?php for ($i = 1; $i <= $pagination; $i++) : ?>
                    <li class="page-item"><a class="page-link" href="./List.php?page=<?= $i ?>"> <?= $i ?></a> </li>
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






