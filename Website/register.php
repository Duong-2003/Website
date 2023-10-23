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
  include($linkFE . 'header.php');
  // include($linkFE . 'menu.php');

  ?>

  <style>
    .error>p {
      font-size: 20px;
      text-align: center;
      font-weight: 600;
    }

    #font-register {
      border: 1px solid;
      color: #ac7d7d;
      border-radius: 20px;
      box-shadow: 0 0 12px 4px;
    }
  </style>



  <div class="container py-4">
    <div class="row">
      <div class="col-lg-6 ">
        <img src=<?= $linkImgIndex . "img-login1.webp" ?> width="100%" alt="">
      </div>

      <div class="col-lg-6 py-2" id="font-register">
        <h2 style="text-align:center; color: #da7070;">ĐĂNG KÝ TÀI KHOẢN</h2>
        <div class="error">
          <p name="notifi" id="notifi_register" class="text-primary"><?= isset($_GET["notifi"]) ? $_GET["notifi"] : '' ?></p>
          <p name="error" id="error_register" class="text-danger"><?= isset($_GET["error"]) ? $_GET["error"] : '' ?></p>
        </div>

        <form action=<?= $linkBE . "register_process.php" ?> method="post">
          <div class="form-group">
            <strong>Email: </strong>


            <input id="email" placeholder="Email để lấy lại mật khẩu" type="text" class="form-control" name="email" aria-label="Default" aria-describedby="inputGroup-sizing-default">

          </div>
          <div class="form-group">
            <strong>Tài khoản: <span style="color: red;">*</span></strong>

            <input id="account" placeholder="Tài khoản bạn muốn đăng ký" type="text" class="form-control" name="username" aria-label="Default" aria-describedby="inputGroup-sizing-default">

          </div>
          <div class="form-group">
            <strong>Nhập mật khẩu:  <span style="color: red;">*</span></strong>
            <input id="password" placeholder="Nhập mật khẩu" type="password" name="password" autocomplete="new-password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">

          </div>

          <div class="form-group">

            <strong>Nhập lại mật khẩu:  <span style="color: red;">*</span></strong>

            <input name="rePass" placeholder="Nhập lại mật khẩu" id="rePass" type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">

          </div>

          <div class="text-center p-3">
            <button type="submit" name="submit" id="reg_submit" class="btn btn-primary">Đăng ký</button>

            <!-- <a class="btn btn-primary" href="./login.php">Đăng nhập</a> -->
            <!-- <a class="btn btn-primary" href="./resetpass.php">Quên mật khẩu</a> -->
          </div>
        </form>
      </div>
    </div>
  </div>




  <!-- <div class="modal fade" id="regSucc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
  </div> -->


  <?php

  include($linkFE . 'footer.php');


  ?>
</body>

</html>