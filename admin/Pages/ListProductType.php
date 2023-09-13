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
  var myDiv = document.getElementById("productType");
  myDiv.classList.add("active");
</script>

  <div class="content" style="padding: 0 30px;">
    <h1>Danh sách loại sản phẩm</h1>
    <?php
    include_once('../Includes/connect.php');
    $sql =  "SELECT * FROM loaisp";
    $result = $connect->query($sql);

    $danhsachLSP = [];
    while($row =  mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $danhsachLSP[] = array(
                'loaisp_ten' => $row['loaisp_ten'],
            );
    }
    
    // var_dump(($danhsachSP));
    ?>
    <table class = " table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Tên loại sản phẩm</th>
          <th>Thao tác</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danhsachLSP as $lsp): ?>
            <tr>
              <td><?= $lsp['loaisp_ten'] ?></td>
              <td>
                <div class="container text-center">
                  <div class="row gx-5">
                    <div class="col">
                    <div class="p-2"><a href="../Includes/BE/DeleteSQL.php?key=loaisp_ten&table=loaisp&datakey=<?= $lsp['loaisp_ten']?>">Xóa</a></div>
                    </div>
                    <div class="col">
                    <div class="p-2"><a href="">Sửa</a></div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          <?php endforeach; 
        ?>
      </tbody>
    </table>
    <div >
    <span class="log_heading text-dark mb-3"><h5>Thêm loại sản phẩm</h5></span>
      <form action='../Includes/BE/Add_productType.php' method="post">
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Tên loại sp<span style="color: red;">*</span></span>
          <input name="loaisp" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        
        <button type="submit" name="submit" type="button" class="btn btn-dark">Thêm</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>