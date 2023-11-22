

<head>
  <meta charset="utf-8">
  <title>Product List</title>
</head>

<body>

  <?php
  include('./MenuAdmin.php');
  include($linkJs . "Product.js");
  ?>


  <div class=" container content">
    <hr style="color:aqua">
    <h1 style="text-align: center; padding-top:40px">Danh mục sản phẩm</h1>
    <hr style="color:red">

    <div> <?= isset($_GET["notifi"]) ? $_GET["notifi"] : '' ?></div>

    <?php
    include_once($linkconnPages);
    $sqlLSP =  "SELECT * FROM loaisp";
    $resultLSP = $connect->query($sqlLSP);

    $danhsachLSP = [];
    while ($row =  mysqli_fetch_array($resultLSP, MYSQLI_ASSOC)) {
      $danhsachLSP[] = array(
        'loaisp_ten' => $row['loaisp_ten'],
      );
    }

    $sqlSP =  "SELECT * FROM sanpham";
    $resultSP = $connect->query($sqlSP);

    $danhsachSP = [];
    while ($row =  mysqli_fetch_array($resultSP, MYSQLI_ASSOC)) {
      $danhsachSP[] = array(
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

    // var_dump(($danhsachSP));
    ?>

    <table id="danhsach" class="table table-striped table-secondary stable-bordered table-hover">
      <thead>
        <tr style="border:1px solid;text-align:center">
          <th>Mã sp</th>
          <th>Tên sp</th>
          <th>Loại sp</th>
          <th>Giá sp</th>
          <th>Mô tả</th>
          <th>Mô tả chi tiết</th>
          <th>Image</th>
          <th>Số lượng</th>
          
          <th>Thao tác</th>
          <th>Check</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($danhsachSP as $sp) : ?>
          <tr style="border:1px solid ;text-align:center">
            <td><?= $sp['sp_ma'] ?></td>
            <td><?= $sp['sp_ten'] ?></td>
            <td><?= $sp['loaisp_ten'] ?></td>
            <td><?= number_format($sp['sp_gia'], 0, '.', ',') ?></td>
            <td><?= $sp['sp_mota'] ?></td>
            <td><?= $sp['sp_motachitiet'] ?></td>
            <td>
              <img style="max-height: 100px;" src="<?php echo $linkSanPham.$sp['sp_img']?>" alt="">
            </td>
            <td><?= $sp['sp_soluong'] ?></td>
           
            <td>
              <div class="container text-center">
                <div class="row gx-2">
                  <div class="col">
                    <div class="p-2"><a href=<?= $linkBE . "DeleteSQL.php?key=sp_ma&table=sanpham&datakey=" . $sp['sp_ma'] ?>>
                        <button type="submit" name="submit" type="button" class="btn btn-dark">Xóa</button>
                      </a></div>
                  </div>
                  <div class="col">
                    <div class="p-2"><a href=<?= $linkBE . "Edit_product.php?sp_ma=" . $sp['sp_ma'] ?>>
                        <button type="submit" name="submit" type="button"  class="btn btn-dark">Sửa</button>
                      </a>
                    </div>
                  </div>
                </div>
                
              </div>
            </td>
            <td>
  <input type="checkbox" style="width: 20px; height: 20px;" name="selectedProducts[]" value="<?= $sp['sp_ma'] ?>"></td>
          </tr>
        <?php endforeach;
        ?>
      </tbody>


  <script>
    $(document).ready(function() {
      $('#danhsach').DataTable();
    });
  </script>
</body>

</html>









<button type="button" id="deleteMultipleButton" class="btn btn-danger">Xóa nhiều</button>
<script>
  // Lấy nút "Xóa nhiều" và danh sách các checkbox
  const deleteMultipleButton = document.getElementById("deleteMultipleButton");
  const checkboxes = document.querySelectorAll('input[name="selectedProducts[]"]');

  // Xử lý sự kiện khi nút "Xóa nhiều" được nhấp
  deleteMultipleButton.addEventListener("click", function() {
    const selectedProducts = Array.from(checkboxes)
      .filter(checkbox => checkbox.checked)
      .map(checkbox => checkbox.value);

    if (selectedProducts.length > 0) {
      // Gửi yêu cầu xóa các sản phẩm đã chọn lên máy chủ
      // Thực hiện xử lý xóa trên phía máy chủ

      // Sau khi xóa thành công, có thể hiển thị thông báo hoặc làm các thao tác khác
      alert(`Đã xóa ${selectedProducts.length} sản phẩm.`);
    } else {
      alert("Vui lòng chọn ít nhất một sản phẩm để xóa.");
    }
  });
</script>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddProduct">
 Thêm sản phẩm
</button>

<?php
  include($linkFE."ModalAddProduct.php");
?>