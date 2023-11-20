<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Product List</title>
</head>

<body>

  <?php
  include('./MenuAdmin.php');
  ?>

  <script>
    var myDiv = document.getElementById("product");
    myDiv.classList.add("active");
  </script>

  <?php
  //Mở modal khi eror
  if (isset($_GET['error'])) {
 
    echo '<script >
            $(document).ready(function(){
                $("#staticBackdrop").modal("show");
            });
          </script>';
}
?>
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

    <table id="danhsach" class="table table-striped table-success table-bordered table-hover">
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
            <td><?= $sp['sp_img'] ?></td>
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
                    <div class="p-2"><a href="./Edit_product.php?key=sp_ma&table=sanpham&datakey=<?= $sp['sp_ma'] ?>">
                        <button type="submit" name="submit" type="button" class="btn btn-dark">Sửa</button>
                      </a></div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        <?php endforeach;
        ?>
      </tbody>
    <!-- </table>

    <span class="log_heading text-dark mb-3">
      <hr>
      <h1 style="text-align:center">Xóa toàn bộ TUDO</h1>
    </span>


    <span class="log_heading text-dark mb-3">
      <hr>
      <h1 style="text-align:center">Thêm sản phẩm</h1>
    </span>
    <hr>
    <div id ="error"> <?= isset($_GET["error"]) ? $_GET["error"] : '' ?></div>

    <div class="menu-content  " style="margin: 0 150px;">
      <form action=<?= $linkBE . "Add_product.php" ?> method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Tên sp<span style="color: red;">*</span></span>
          <input name="sp_ten" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Tên Loại sp<span style="color: red;">*</span></span>
          <select name="productType" class="form-select" aria-label="Default select example">
            <?php
            foreach ($danhsachLSP as $Lsp) : ?>
              <option value="<?= $Lsp['loaisp_ten'] ?>"><?= $Lsp['loaisp_ten'] ?></option>
            <?php endforeach;
            ?>
          </select>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Giá sp<span style="color: red;">*</span></span>
          <input name="sp_gia" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Mô tả sp</label>
          <textarea name="sp_mota" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Mô tả sp chi tiết<span style="color: red;">*</span></span></label>
          <textarea name="sp_motachitiet" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Img<span style="color: red;">*</span></span>
          <input name="sp_img" type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Số lượng<span style="color: red;">*</span></span>
          <input name="sp_soluong" type="number" min='0' value="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <button type="submit" name="submit" type="button" class="btn btn-dark">Thêm</button>
      </form>
    </div>
  </div>
  </div> -->

  <script>
    $(document).ready(function() {
      $('#danhsach').DataTable();
    });
  </script>
</body>

</html>




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
 Thêm sản phẩm
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Thêm sản phẩm</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>
      <div id="error-message" class="text-danger" style="text-align:center ;font-size:25px" ></div>
      <div id="success-message" class="text-success" style="text-align:center ;font-size:25px"></div>
      <div class="modal-body">
      <div class="menu-content  " >
      <form action=<?= $linkBE . "Add_product.php" ?> method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Tên sp<span style="color: red;">*</span></span>
          <input name="sp_ten" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Tên Loại sp<span style="color: red;">*</span></span>
          <select name="productType" class="form-select" aria-label="Default select example">
            <?php
            foreach ($danhsachLSP as $Lsp) : ?>
              <option value="<?= $Lsp['loaisp_ten'] ?>"><?= $Lsp['loaisp_ten'] ?></option>
            <?php endforeach;
            ?>
          </select>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Giá sp<span style="color: red;">*</span></span>
          <input name="sp_gia" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Mô tả sp</label>
          <textarea name="sp_mota" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Mô tả sp chi tiết<span style="color: red;">*</span></span></label>
          <textarea name="sp_motachitiet" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Img<span style="color: red;">*</span></span>
          <input name="sp_img" type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Số lượng<span style="color: red;">*</span></span>
          <input name="sp_soluong" type="number" min='0' value="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <button type="submit" name="submit" type="button" class="btn btn-dark">Thêm</button>
        
      </form>
      
    </div>
  </div>
     
    </div>
  </div>
</div>

<script>
  // Lấy form và nút "Thêm"
  const form = document.querySelector("form");
  const submitButton = document.querySelector('button[name="submit"]');

  // Xử lý sự kiện khi form được gửi
  form.addEventListener("submit", function(event) {
    // Kiểm tra các trường nhập liệu
    const productName = document.querySelector('input[name="sp_ten"]').value;
    const productType = document.querySelector('select[name="productType"]').value;
    const productPrice = document.querySelector('input[name="sp_gia"]').value;
    const productDescription = document.querySelector('textarea[name="sp_mota"]').value;
    const productDetail = document.querySelector('textarea[name="sp_motachitiet"]').value;
    const productImage = document.querySelector('input[name="sp_img"]').value;
    const productQuantity = document.querySelector('input[name="sp_soluong"]').value;

    if (
      productName.trim() === "" ||
      productType.trim() === "" ||
      productPrice.trim() === "" ||
      productDescription.trim() === "" ||
      productDetail.trim() === "" ||
      productImage.trim() === "" ||
      productQuantity.trim() === ""
    ) {
      // Hiển thị thông báo lỗi
      document.getElementById("error-message").textContent = "Vui lòng nhập đầy đủ thông tin.";
      event.preventDefault(); // Ngăn chặn gửi form
    } else {
      // Hiển thị thông báo thành công
      document.getElementById("success-message").textContent = "Thêm sản phẩm thành công.";
    }
  });

  // Xóa thông báo lỗi và thành công khi người dùng bắt đầu nhập liệu
  form.addEventListener("input", function() {
    document.getElementById("error-message").textContent = "";
    document.getElementById("success-message").textContent = "";
  });
</script>