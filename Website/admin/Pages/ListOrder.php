<!doctype html>
<html lang="en" >
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

  <div class="content" style="padding: 0 30px;">
    <h1>Danh sách loại sản phẩm</h1>
    <?php
    include_once($linkconnPages);
    $sql =  "SELECT * FROM donhang";
    $result = $connect->query($sql);

    $danhsachdonhang = [];
    while($row =  mysqli_fetch_array($result,MYSQLI_ASSOC)){
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
    <table  id="danhsach" class = " table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Mã đơn hàng</th>
          <th>Mã sản phẩm</th>
          <th>Người đặt</th>
          <th>Ngày đặt</th>
          <th>Trạng thái</th>
          <th>Giá</th>
          <th>Số lượng sản phẩm</th>
          <th>Thao tác</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danhsachdonhang as $donhang): ?>
            <tr>
              <td><?= $donhang['donhang_ma'] ?></td>
              <td><?= $donhang['sp_ma'] ?></td>
              <td><?= $donhang['name'] ?></td>
              <td><?= $donhang['timeorder'] ?></td>
              <td><?= $donhang['donhang_trangthai'] ?></td>
              <td><?= number_format($donhang['donhang_gia'], 0, '.', ',')?></td>
              <td><?= $donhang['donhang_soluongsp'] ?></td>
              
              <td>
                <div class="container text-center">
                  <div class="row gx-5">
                    <div class="col">
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
    <!-- <div >
        <span class="log_heading text-dark mb-3"><h5>Danh sách đơn hàng</h5></span>
        <form action=<?=$linkBE.'Add_productType.php'?> method="post">
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Tên loại sp<span style="color: red;">*</span></span>
            <input name="loaisp" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <button type="submit" name="submit" type="button" class="btn btn-dark">Thêm</button>
        </form>
    </div> -->
  </div>
</div>
<script>
  $(document).ready(function(){
    $('#danhsach').DataTable();
  });
</script>
</body>
</html>
