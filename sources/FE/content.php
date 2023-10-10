<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <title>Document</title>
  <style>
    .content a {
      text-decoration: none;
    }

    .card img {
      height: 200px;
      
      
    }

    .card {
      box-shadow: 0 0 5px 0px;
      color: #999;
    }


    div.card :hover a {
      box-shadow: 0 0 20px 5px;
      color:   white;
    }
    

    #font-card:hover {
      box-shadow: 0 0 20px 5px;
      color:  #c7a5a5;
      border-radius: 20px;
    }

    @media screen and (max-width: 456px) {
      #menu {
        flex-wrap: wrap;
        justify-content: space-evenly;

      }
      .card img{
        height: 200px;
      }
    }
    @media screen and (min-width: 768px ) and (max-width:1024px) {
      
      .card img{
      
        height: 150px;
      }
    }


    @media screen and  (min-width: 1024px )and (max-width: 1366px) {
      #menu {
        flex-wrap: wrap;
        justify-content: space-evenly;

      }
      
    }
  </style>

</head>

<body>




  <!-- <div class="Slider1 py-4">
            <div class="container">
            <hr style="color:red">
                <div class="row content" style="text-align:center ;">
                  

                  <div class=" col-lg-1 col-md-2 col-sm-2">
                        <a href="" style="color:coral">
                        <img src=<?= $linkImgSp . "ip1menu.webp" ?>alt="">
                        <p>Samsung Galaxy Z Flip5</p>
                        </a>
                    </div>
                   
                   
                 
                      </div>
                      

            </div> -->



  <!-- ----------------------- -->
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

    <!-- _____________________________________ -->
    <?php

    include_once($linkconnWebsite);

    $sql = "SELECT * FROM sanpham ORDER BY RAND() LIMIT 8";
    $result = $connect->query($sql);
    $duongdanimg = $linkImgSp;

    $data = array();
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
    }
    // Đóng kết nối
    $connect->close();

    ?>
    <script>
      var data = <?php echo json_encode($data); ?>;

      function myFunction() {
        if (data.length < 6) {
          var valueCardReplace = 6 - data.length;
          var newElement = document.getElementById("cardReplace");
          for (var i = 1; i <= valueCardReplace; i++) {
            var oldElement = document.getElementById("card" + i);
            if (newElement && oldElement) {
              var clonedElement = newElement.cloneNode(true);
              clonedElement.style.display = 'block';
              oldElement.parentNode.replaceChild(clonedElement, oldElement);
            }
          }
        }
      }
      document.addEventListener("DOMContentLoaded", myFunction);
    </script>

    <div id="cardReplace" class="card" aria-hidden="true" style="display: none;">
      <img src="#" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title placeholder-glow">
          <span class="placeholder col-6"></span>
        </h5>
        <p class="card-text placeholder-glow">
          <span class="placeholder col-7"></span>
          <span class="placeholder col-4"></span>
          <span class="placeholder col-4"></span>
          <span class="placeholder col-6"></span>
          <span class="placeholder col-8"></span>
        </p>
        <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
      </div>
    </div>

    <!-- ________________Show ther_____________________ -->
    <div class=" container text-center">
      <div class="row ">

        <div class=" col-lg-3 col-md-4 col-sm-6 py-2" id="font-card">
          <div id='card1' class="card">
            <img src="<?= $duongdanimg . $data[0]['sp_img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <div>
                <p class="card-title">Tên sản phẩm:<?= $data[0]['sp_ten'] ?></p>
                <p class="card-text">Giá sản phẩm:<?= $data[0]['sp_gia'] ?></p>
                <a href="./product.php?sp_ma=<?= $data[0]['sp_ma'] ?>" class="btn btn-primary">Xem</a>
              </div>
            </div>
          </div>
        </div>


        <div class=" col-lg-3 col-md-4 col-sm-6 py-2" id="font-card">
          <div id='card2' class="card">
            <img src="<?= $duongdanimg . $data[0]['sp_img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <div>
                <p class="card-title">Tên sản phẩm:<?= $data[0]['sp_ten'] ?></p>
                <p class="card-text">Giá sản phẩm:<?= $data[0]['sp_gia'] ?></p>
                <a href="./product.php?sp_ma=<?= $data[0]['sp_ma'] ?>" class="btn btn-primary">Xem</a>
              </div>
            </div>
          </div>
        </div>


        <div class=" col-lg-3 col-md-4 col-sm-6 py-2" id="font-card">
          <div id='card3' class="card">
            <img src="<?= $duongdanimg . $data[2]['sp_img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title">Tên sản phẩm:<?= $data[2]['sp_ten'] ?></p>
              <p class="card-text">Giá sản phẩm:<?= $data[2]['sp_gia'] ?></p>
              <a href="./product.php?sp_ma=<?= $data[2]['sp_ma'] ?>" class="btn btn-primary">Xem</a>
            </div>
          </div>
        </div>



        <div class=" col-lg-3 col-md-4 col-sm-6 py-2" id="font-card">
          <div id='card4' class="card">
            <img src="<?= $duongdanimg . $data[3]['sp_img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title">Tên sản phẩm:<?= $data[3]['sp_ten'] ?></p>
              <p class="card-text">Giá sản phẩm:<?= $data[3]['sp_gia'] ?></p>
              <a href="./product.php?sp_ma=<?= $data[3]['sp_ma'] ?>" class="btn btn-primary">Xem</a>
            </div>
          </div>
        </div>


        <div class=" col-lg-3 col-md-4 col-sm-6 py-2" id="font-card">
          <div id='card5' class="card">
            <img src="<?= $duongdanimg . $data[4]['sp_img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title">Tên sản phẩm:<?= $data[4]['sp_ten'] ?></p>
              <p class="card-text">Giá sản phẩm:<?= $data[4]['sp_gia'] ?></p>
              <a href="./product.php?sp_ma=<?= $data[4]['sp_ma'] ?>" class="btn btn-primary">Xem</a>
            </div>
          </div>
        </div>



        <div class=" col-lg-3 col-md-4 col-sm-6 py-2" id="font-card">
          <div id='card6' class="card">
            <img src="<?= $duongdanimg . $data[5]['sp_img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title">Tên sản phẩm:<?= $data[5]['sp_ten'] ?></p>
              <p class="card-text">Giá sản phẩm:<?= $data[5]['sp_gia'] ?></p>
              <a href="./product.php?sp_ma=<?= $data[5]['sp_ma'] ?>" class="btn btn-primary">Xem</a>
            </div>
          </div>
        </div>

        <div class=" col-lg-3 col-md-4 col-sm-6 py-2" id="font-card">
          <div id='card7' class="card">
            <img src="<?= $duongdanimg . $data[4]['sp_img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title">Tên sản phẩm:<?= $data[4]['sp_ten'] ?></p>
              <p class="card-text">Giá sản phẩm:<?= $data[4]['sp_gia'] ?></p>
              <a href="./product.php?sp_ma=<?= $data[4]['sp_ma'] ?>" class="btn btn-primary">Xem</a>
            </div>
          </div>
        </div>

        <div class=" col-lg-3 col-md-4 col-sm-6 py-2" id="font-card">
          <div id='card8' class="card">
            <img src="<?= $duongdanimg . $data[5]['sp_img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title">Tên sản phẩm:<?= $data[5]['sp_ten'] ?></p>
              <p class="card-text">Giá sản phẩm:<?= $data[5]['sp_gia'] ?></p>
              <a href="./product.php?sp_ma=<?= $data[5]['sp_ma'] ?>" class="btn btn-primary">Xem</a>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>
  </div>


</body>

</html>