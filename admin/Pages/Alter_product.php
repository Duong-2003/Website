<!doctype html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <title>Product List</title>
  </head>
  
  <body>

  <?php
  include('../Includes/FE/MenuAdmin.php');
  ?>

<script>
  var myDiv = document.getElementById("product");
  myDiv.classList.add("active");
</script>

  <div class="content" style="padding: 0 30px;">
    <?php
   include_once('../Includes/connect.php');
    $sqlLSP =  "SELECT * FROM loaisp";
    $resultLSP = $connect->query($sqlLSP);

    $danhsachLSP = [];
    while($row =  mysqli_fetch_array($resultLSP,MYSQLI_ASSOC)){
            $danhsachLSP[] = array(
                'loaisp_ten' => $row['loaisp_ten'],
            );
    }
    $privateKey = $_GET['key'];
    $dataKey = $_GET['datakey'];
    $nameTable = $_GET['table'];

    $sqlSP =  "SELECT * FROM $nameTable WHERE $privateKey = '$dataKey'";
    $result = $connect->query($sqlSP);
    if($result->num_rows != 1){
        echo('EROR');
    }
    $sp = $result->fetch_assoc();
    // var_dump(($danhsachSP));
    ?>
    <table class = "table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Mã sp</th>
          <th>Tên sp</th>
          <th>Loại sp</th>
          <th>Giá sp</th>
          <th>Mô tả</th>
          <th>Mô tả chi tiết</th>
          <th>Image</th>
          <th>Số lượng</th>
        </tr>
      </thead>
      <tbody>
          <tr>
              <td><?= $sp['sp_ma'] ?></td>
              <td><?= $sp['sp_ten'] ?></td>
              <td><?= $sp['loaisp_ten'] ?></td>
              <td><?= number_format($sp['sp_gia'], 0, '.', ',') ?></td>
              <td><?= $sp['sp_mota'] ?></td>
              <td><?= $sp['sp_motachitiet'] ?></td>
              <td><?= $sp['sp_img'] ?></td>
              <td><?= $sp['sp_soluong'] ?></td>
            </tr>
          
      </tbody>
    </table>
    <div >
    <span class="log_heading text-dark mb-3"><h5>Sửa sản phẩm</h5></span>
      <form action="./Add_product.php"   method="post">
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Tên sp<span style="color: red;">*</span></span>
          <input value="<?=$sp['sp_ten'] ?>" name="sp_ten" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Tên Loại sp<span style="color: red;">*</span></span>
        <select name="productType" class="form-select" aria-label="Default select example">
        <?php
          foreach($danhsachLSP as $Lsp): ?>
            <option value="<?=$Lsp['loaisp_ten']?>"><?=$Lsp['loaisp_ten']?></option>
          <?php endforeach; 
        ?>
        </select>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Giá sp<span style="color: red;">*</span></span>
          <input value="<?=$sp['sp_gia'] ?>" name="sp_gia" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mô tả sp</label>
        <textarea  name="sp_mota" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=$sp['sp_mota'] ?></textarea>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mô tả sp chi tiết<span style="color: red;">*</span></span></label>
        <textarea  name="sp_motachitiet" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=$sp['sp_motachitiet'] ?></textarea>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Img<span style="color: red;">*</span></span>
          <input value="<?=$sp['sp_img'] ?>" name="sp_img" type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Số lượng<span style="color: red;">*</span></span>
          <input value="<?=$sp['sp_soluong'] ?>" name="sp_soluong" type="number" min='0'  value="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <button type="submit" name="submit" type="button" class="btn btn-dark">Sửa</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>