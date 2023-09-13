<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./website.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Login</title>
    <link rel="stylesheet" href="./website.css">
</head>
<body>
<?php
include('./header.php');


?>

<div id="main_login">
  <div class="container">
    <div class="logForm">
      <div class="login log_logo">
        <img src="./assets/img/user.png" alt="">
      </div>
      <div class="error">
        <p name = "notifi" id="notifi_log"></p>
        <p name="error" id="error_log"></p>
      </div>
      <span class="log_heading text-dark mb-3">ĐĂNG NHẬP</span>
      <form action="../BE/funtion/log_process.php" method="post">
        <div class="form-group">
          <label for="account" id="userAccount">Tài khoản:</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Nhập tài khoản<span style="color: red;">*</span></span>
            </div>
            <input id="account" type="text" class="form-control" name="account" aria-label="Default" aria-describedby="inputGroup-sizing-default">
          </div>
        </div>
        <div class="form-group">
          <label for="password" id="userPassword">Mật khẩu:</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Nhập mật khẩu<span style="color: red;">*</span></span>
            </div>
            <input type="password" id="password" class="form-control" name="password"aria-label="Default" aria-describedby="inputGroup-sizing-default">
          </div>
        </div>
        <div class="d-flex justify-content-between mb-3">
          <a href="./resetpass.php">Quên mật khẩu</a>
        </div>
        <div class="text-center">
          <button type="submit" id="loginSubmit" name="submit" class="btn btn-primary">Đăng nhập</button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
.error > p{
  font-size: 15px;
}
#error{
  color: red;
}
</style>

<?php
include('./footer.php');

?>
</body>
</html>