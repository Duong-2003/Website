
<head>
  <meta charset="utf-8">
  <title>Product List</title>
</head>

<body>

  <?php
  include("./MenuAdmin.php");
  ?>



  <div class="content" style="padding: 100px 30px;">
    <?php
    include_once($linkconnPages);
    $sql =  "SELECT * FROM users";
    $result = $connect->query($sql);

    $danhsach = [];
    while ($row =  mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $danhsach[] = array(
        'name' => $row['name'],
        'pass' => $row['pass'],
        'email' => $row['email'],
        'address' => $row['address'],
        'role' => $row['role'],


      );
    }
    
    $dataKey = $_GET['datakey'];

    $sql =  "SELECT * FROM users WHERE name = '$dataKey'";
    $result = $connect->query($sql);
    if ($result->num_rows != 1) {
      echo ('ERROR');
    }
    $user = $result->fetch_assoc();
    // var_dump(($danhsachSP));
    ?>
    <table class="table table-striped table-bordered table-hover">
      <!-- <thead>
        <tr>
          <th>Tên đăng nhập</th>
          <th>Pass</th>
          <th>Email</th>
          <th>Địa chỉ</th>
          <th>Quyền</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= $user['name '] ?></td>
          <td><?= $user['pass '] ?></td>
          <td><?= $user['email'] ?></td>
        
          <td><?= $user['address'] ?></td>
          <td><?= ($user['role'] ? 'admin' : 'user') ?></td>
          
        </tr>

      </tbody> -->
    </table>

    <div>
      <span class="log_heading text-dark mb-3">
        <h5>Sửa sản phẩm</h5>
      </span>
      <div id="error-message" class="text-danger" style="text-align:center ;font-size:25px"></div>
      <div class="text-danger" style="text-align:center ;font-size:25px">
        <?= isset($_GET['error']) ? $_GET['error'] : '' ?>
      </div>
      <form action="<?= $linkBE ?>Edit_Users.php" method="post" enctype="multipart/form-data">
        <!-- Trường ẩn hidden -->
        <input type="hidden" name="name" value="<?= $user['name'] ?>">
        <div class="input-group mb-3">
          <span class="input-group-text" id="">Name<span style="color: red;">*</span></span>
          <input value="<?= $user['name'] ?>" name="name" type="text" class="form-control" >
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="">Pass<span style="color: red;">*</span></span>
          <input value="<?= $user['pass'] ?>" name="pass" type="text" class="form-control" >
        </div>
        
        <div class="input-group mb-3">
          <span class="input-group-text" id=""> Email<span style="color: red;">*</span></span>
          <input value="<?= $user['email'] ?>" name="email" type="text" class="form-control" >
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id=""> address<span style="color: red;">*</span></span>
          <input value="<?= $user['address'] ?>" name="address" type="text" class="form-control" >
        </div>
        
        
        <div class="input-group mb-3">
          <span class="input-group-text" id=""> Quyền <span style="color: red;">*</span></span>
          <select name="productType" class="form-select" aria-label="Default select example">
            <?php
            foreach ($danhsach as $Lsp) : ?>
              <option value="<?= $Lsp['role'] ?>"><?= $Lsp['role'] ?></option>
            <?php endforeach;
            
            ?>
          </select>
        </div>
        <button type="submit" name="submit" type="button" class="btn btn-dark">Sửa</button>
      </form>
    </div>
  </div>
  </div>

</body>

</html>