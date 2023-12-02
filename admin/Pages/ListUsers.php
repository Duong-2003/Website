
  <head>
     <meta charset="utf-8">
    <title>Users List</title>
    
  </head>
  
  <body>

  <?php
  include("./MenuAdmin.php");
  ?>

<script>
  var myDiv = document.getElementById("user");
  myDiv.classList.add("active");
</script>

  <div class="content">


    <h1 style="text-align: center; padding-top:40px;color:tomato">Danh sách người dùng</h1>
    <hr style="color:red">

   
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
                'email' => $row['email'],
                'pass' => $row['pass'],
            );
    }
    
    ?>
    <div class="container">
    <table id="danhsach" class = "table table-striped table-hover table-secondary table-bordered table-hover">
      <thead>
      <tr>
                <th>Tên đăng nhập</th>
                <th>Email</th>
                <th>Mật khẩu</th>
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
            <td><?= $user['email'] ?></td>
            <td><?= $user['pass'] ?></td>
            <td><?= $user['address'] ?></td>
              <!-- <td><?= ($user['address'] == NULL? 'Chưa nhập' : 'Đã nhập') ?></td> -->
              <!-- <td><?= ($user['address'] == NULL? 'Chưa nhập' : $user['address']) ?></td> -->
              <td><?= ($user['role'] ? 'admin' : 'user') ?></td>
              <td>
                        <div class="container text-center">
                            <div class="row gx-2">
                                <div class="col">
                                    <div class="p-2"><a href=<?= $linkBE . "DeleteSQL.php?key=name&table=users&datakey=" . $user['name'] ?>>Xóa</a></div>
                                </div>
                                <div class="col">
                                <div class="p-2"><a href=<?="./Edit_Users.php?datakey=" . $user['name'] ?>>Sửa
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>
</div>
<script>
  $(document).ready(function(){
    $('#danhsach').DataTable();
  });
</script>
</body>
</html>
