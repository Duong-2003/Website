<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Product List</title>
</head>

<body>

    <?php
    include("./MenuAdmin.php");
    ?>

    <?php
    include_once($linkconnPages);
    $dataKey = $_GET['datakey'];
    $sqldonhang =  "SELECT * FROM donhang WHERE donhang_ma = '$dataKey'";
    $result = $connect->query($sqldonhang);
    if ($result->num_rows != 1) {
        echo ('ERROR');
    }
    $donhang = $result->fetch_assoc();
    ?>
    <div class="content" style="padding: 100px 30px;">

        <table id="danhsach" class=" table table-striped table-hover table-secondary table-bordered table-hover">
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Mã sản phẩm</th>
                    <th>Người đặt</th>
                    <th>Ngày đặt</th>
                    <th>Trạng thái</th>
                    <th>Giá</th>
                    <th>Số lượng sản phẩm</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $donhang['donhang_ma'] ?></td>
                    <td><?= $donhang['sp_ma'] ?></td>
                    <td><?= $donhang['name'] ?></td>
                    <td><?= $donhang['timeorder'] ?></td>
                    <td><?= $donhang['donhang_trangthai'] ?></td>
                    <td><?= number_format($donhang['donhang_gia'], 0, '.', ',') ?></td>
                    <td><?= $donhang['donhang_soluongsp'] ?></td>

                </tr>
            </tbody>
        </table>

        <div>
            <span class="log_heading text-dark mb-3">
                <h5>Sửa đơn hàng</h5>
            </span>
            <form action="Edit_product.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Trạng thái<span style="color: red;">*</span></span>
                    <input value="<?= $donhang['donhang_trangthai'] ?>" name="sp_ten" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Giá<span style="color: red;">*</span></span>
                    <input value="<?= $donhang['donhang_gia'] ?>" name="sp_ten" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <button type="submit" name="submit" type="button" class="btn btn-dark">Sửa</button>
            </form>
        </div>
    </div>
    </div>

</body>

</html>