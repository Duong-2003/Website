<!doctype html>
<html lang="en" >
  <head>
     <meta charset="utf-8">
    <title>Users List</title>
    
    <?php
    include("../Includes/linkAdmin.php");
    ?>
  </head>
  
  <body>

  <?php
  include("./MenuAdmin.php");
  ?>

<script>
  var myDiv = document.getElementById("user");
  myDiv.classList.add("active");
</script>

  <div class="content" style="padding: 0 30px;">
    <h1>Danh sách nguời dùng</h1>
    <?php
    include_once($linkconnPages);
    $sql =  "SELECT * FROM users";
    $result = $connect->query($sql);

    $ListUsers = [];
    while($row =  mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $ListUsers[] = array(
                'name' => $row['name'],
                'address' => $row['address'],
                'role' => $row['role'],
            );
    }
    
    // var_dump(($danhsachSP));
    ?>
    <table class = "table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Tên đăng nhập</th>
          <th>Email</th>
          <th>Địa chỉ</th>
          <th>Quyền</th>
          <th>Thao tác</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($ListUsers as $user): ?>
            <tr>
              <td><?= $user['name'] ?></td>
              <td><?= ($user['address'] == NULL? 'Chưa nhập' : 'Đã nhập') ?></td>
              <td><?= ($user['address'] == NULL? 'Chưa nhập' : $user['address']) ?></td>
              <td><?= ($user['role'] ? 'admin' : 'user') ?></td>
              <td>
                <div class="container text-center">
                  <div class="row gx-2">
                    <div class="col">
                    <div class="p-2"><a href=<?=$linkBE."DeleteSQL.php?key=name&table=users&datakey=".$user['name']?>>Xóa</a></div>
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
  </div>
</div>

</body>
</html>
