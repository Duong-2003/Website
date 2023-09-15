<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Register</title>

    <?php
    include_once('../sources/linkFIle.php');
    ?>
</head>

<body>


<?php
include($linkFE.'header.php');
include($linkFE.'menu.php');

?>

<style>
.error > p{
  font-size: 20px;
  text-align:center;
  font-weight: 600;
}

</style>


<div id="main_registry">
  <div class="container">
    <div class="logForm">
      <div class="registry log_logo">
        <img src=<?= $linkImgIndex."user.png"  ?> alt="">
      </div>

      <div class="error">
        <p name = "notifi" id="notifi_register" class="text-primary"><?= isset($_GET["notifi"]) ? $_GET["notifi"] : ''?></p>
        <p name = "error" id="error_register" class="text-danger"><?= isset($_GET["error"]) ? $_GET["error"] : ''?></p>
      </div>

      <span class="log_heading text-dark mb-3">ĐĂNG KÝ</span>
      <form action= <?= $linkBE."register_process.php"?> method="post">
        <div class="form-group">
            <label for="email" id="userEmail">Email:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default ">Nhập Email</span>
              </div>
              <input id="email" placeholder="Email để lấy lại mật khẩu" type="text" class="form-control" name="email" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
          </div>
        <div class="form-group">
          <label for="account" id="userAccount">Tài khoản:</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default ">Nhập tài khoản<span style="color: red;">*</span></span>
            </div>
            <input id="account" type="text" class="form-control" name="username" aria-label="Default" aria-describedby="inputGroup-sizing-default">
          </div>
        </div>
        <div class="form-group">
          <label for="password" id="userPassword">Mật khẩu:</label>
          <div class=" input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Nhập mật khẩu<span style="color: red;">*</span></span>
            </div>
            <input id="password" type="password" name="password"  autocomplete="new-password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default rePass">Nhập lại mật khẩu<span style="color: red;">*</span></span>
            </div>
            <input name="rePass" id="rePass" type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
          </div>
        </div>
        <div class="d-flex justify-content-between mb-3">
          <a href="./resetpass.php">Quên mật khẩu</a>
        </div>
        <div class="text-center">
          <button type="submit" name="submit" id="reg_submit" class="btn btn-primary">Đăng ký</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="regSucc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Đăng kí thành công</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="mt-2 mb-2">Bạn có muốn chuyển hướng tới trang đăng nhập ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Không</button>
        <a type="button" href="./login.php" class="btn btn-primary text-white">Đăng nhập</a>
      </div>   
    </div>
  </div>
</div>


<?php

include($linkFE.'footer.php');


?>
</body>
</html>