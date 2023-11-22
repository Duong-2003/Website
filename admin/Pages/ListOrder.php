<head>
  <meta charset="utf-8">
  <title>Product List</title>

</head>

<body>

  <?php
  include("./MenuAdmin.php");

  ?>

  <script>
    var myDiv = document.getElementById("order");
    myDiv.classList.add("active");
  </script>


  <div class="content" style="padding: 100px 30px;">
    <h1>Danh sách đơn hàng</h1>

    <?php
    include_once($linkconnPages);
    $sql =  "SELECT * FROM donhang";
    $result = $connect->query($sql);

    $danhsachdonhang = [];
    while ($row =  mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $danhsachdonhang[] = array(
        'donhang_ma' => $row['donhang_ma'],
        'sp_ma' => $row['sp_ma'],
        'name' => $row['name'],
        'timeorder' => $row['timeorder'],
        'donhang_trangthai' => $row['donhang_trangthai'],
        'donhang_gia' => $row['donhang_gia'],
        'donhang_soluongsp' => $row['donhang_soluongsp'],
      );
    }

    // var_dump(($danhsachSP));
    ?>
    <table id="danhsach" class=" table table-striped table-hover table-secondary table-bordered table-hover">
      <thead>
        <tr>
          <th>Mã đơn hàng</th>
          <th>Mã sản phẩm</th>
          <th>Người đặt</th>
          <th>Ngày đặt</th>
          <th>Trạng thái</th>
          <th>Tiền thu</th>
          <th>Số lượng sản phẩm</th>
          <th>Thao tác</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($danhsachdonhang as $donhang) : ?>
          <tr>
            <td><?= $donhang['donhang_ma'] ?></td>
            <td><?= $donhang['sp_ma'] ?></td>
            <td><?= $donhang['name'] ?></td>
            <td><?= $donhang['timeorder'] ?></td>
            <td><?= $donhang['donhang_trangthai'] ?></td>
            <td><?= number_format($donhang['donhang_gia'], 0, '.', ',') ?></td>
            <td><?= $donhang['donhang_soluongsp'] ?></td>

            <td>
              <div class="container text-center">
                <div class="row gx-5">
                  <div class="col">
                    <div class=""><a href="./Edit_Order.php?datakey=<?= $donhang['donhang_ma'] ?>">Thông tin</a></div>
                  </div>
                  <div class="col">
                    <div class="p-2"><a href="./Edit_Order.php?datakey=<?= $donhang['donhang_ma'] ?>">Sửa</a></div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        <?php endforeach;
        ?>
      </tbody>
    </table>
  </div>

  <script>
    $(document).ready(function() {
      $('#danhsach').DataTable();
    });
  </script>
</body>