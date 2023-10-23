<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <title>Document</title> -->
<style>
  .content a {
    text-decoration: none;
  }


  .card {
    box-shadow: 0 0 5px 0px;
    color: #999;
  }


  div.card :hover a {
    box-shadow: 0 0 20px 5px;
    color: white;
  }

  #font-card:hover {
    box-shadow: 0 0 20px 5px;
    color: #c7a5a5;
    border-radius: 20px;
  }

  @media screen and (max-width: 456px) {
    #menu {
      flex-wrap: wrap;
      justify-content: space-evenly;

    }
  }

  @media screen and (max-width: 1190px) {
    #menu {
      flex-wrap: wrap;
      justify-content: space-evenly;

    }

  }
</style>

</head>

<body>

  <div class="product-list mb-3 p-2 ">
    <div class="container">
      <div class="row">
        <div class="col-md-12 fs-2 ">
          <a href="" style="color:red;text-decoration:none">
            <hr>Sản phẩm mới nhất
            <hr>
          </a>

        </div>


      </div>
    </div>

    <?php

    include_once($linkconnWebsite);
    $valueCart = 8;
    $sql = "SELECT * FROM sanpham LIMIT $valueCart";
    $result = $connect->query($sql);
    $duongdanimg = $linkImgSp;

    $dataArray = array();
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $dataArray[] = $row;
      }
    }
    // Đóng kết nối
    $connect->close();

    ?>
   
    <!-- ________________Show thẻ_____________________ -->
    <div class="container text-center">
      <div class="row">

        <?php foreach ($dataArray as $data) : ?>
         
          <div class="col-lg-3 col-md-4 col-sm-6 py-2" id="font-card">
            <div id="card<?= $i ?>" class="card">
              <img src="<?= $duongdanimg . $data['sp_img'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-title">Tên sản phẩm:<?= $data['sp_ten'] ?></p>
                <p class="card-text">Giá sản phẩm:<?= $data['sp_gia'] ?></p>
                <a href="./product.php?sp_ma=<?= $data['sp_ma'] ?>" class="btn btn-primary">Xem</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>


    <div class="text-center p-3">
      <a class="btn btn-primary" href="./resetpass.php">Xem thêm</a>
    </div>
  </div>


</body>