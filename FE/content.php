<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="website.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
    <style>
      
    

.col-2 a{
    text-decoration: none;
}

    </style>
</head>
<body>




          <div class="Slider1 py-4">
            <div class="container">
            <hr style="color:red">
                <div class="row custom" style="text-align:center ;">
                   

                     <div class="col-2 ">
                        <a href="" style="color:coral">
                        <img src="../img/icon1.png" alt=""  >
                        <p >Đồng Pi</p>
                        </a>
                      </div>
                     <div class="col-2 ">
                      <a href="" style="color:coral">
                        <img src="../img/icon2.png" alt="">
                        <p>Vận chuyển</p>
                        </a>
                      </div>
                    <div class="col-2 ">
                      <a href=""style="color:coral">
                        <img src="../img/icon3.png" alt="">
                        <p width="">Mua sắm</p>
                        </a>
                      </div>
                    <div class="col-2 ">
                      <a href=""style="color:coral">
                        <img src="../img/icon4.png" alt="">
                        <p>Giảm giá</p>
                        </a>
                      </div>
                    <div class="col-2 ">
                      <a href=""style="color:coral">
                        <img src="../img/icon5.png" alt="">
                        <p>Phụ kiện nữ</p>
                        </a>
                      </div>
                    <div class="col-2 ">
                      <a href=""style="color:coral">
                        <img src="../img/icon6.png" alt="">
                        <p>Quần áo</p>
                        </a>
                      </div>
                      
                    <div class="col-2 ">
                      <a href=""style="color:coral">
                        <img src="../img/icon8.png" alt="">
                        <p>Khu tiện ích</p>
                        </a>
                      </div>
                    <div class="col-2 ">
                      <a href=""style="color:coral">
                        <img src="../img/icon9.png" alt="">
                        <p>Làm mới </p>
                        </a>
                      </div>
                    <div class="col-2 ">
                      <a href=""style="color:coral">
                        <img src="../img/icon10.png" alt="">
                        <p>Khuyến mãi</p>
                        </a>
                        
                      </div>

                     <div class="col-2 ">
                      <a href=""style="color:coral">
                        <img src="../img/icon7.png" alt="">
                        <p>Giỏ hàng</p>
                        </a>
                      </div>
                     
                 
                  

            </div>

            

            <!-- ----------------------- -->
             <div class="product-list mb-3 p-2 " >
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 fs-2 ">
                    <a  href="" style="color:red;text-decoration:none"><hr>Thời trang <hr></a>
                   
                    </div>

                    
                  </div>
                </div>

                <!-- _____________________________________ -->
                <?php
                  include_once('../BE/connect.php');
                  $sql = "SELECT * FROM sanpham ORDER BY RAND() LIMIT 5";
                  $result = $connect->query($sql);
                  $duongdanimg = "../img/SanPham/";

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
                    if(data.length  < 6){
                      var valueCardReplace = 6 - data.length;
                      var newElement = document.getElementById("cardReplace");
                      for(var i =1; i <= valueCardReplace; i++){
                        var oldElement = document.getElementById("card"+i);
                        if(newElement && oldElement)
                        {
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
                <div class="container text-center">
                  <div class="row g-5">
                    <div class="col-4" >
                      <div id ='card6' class="card" style="width: 18rem;">
                        <img src="<?=$duongdanimg.$data[0]['sp_img']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?=$data[0]['sp_ten']?></h5>
                          <p class="card-text"><?=$data[0]['sp_mota']?></p>
                          <a href="./product.php?sp_ma=<?=$data[0]['sp_ma']?>" class="btn btn-primary">Xem</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                    <div id ='card5' class="card" style="width: 18rem;">
                      <img src="<?=$duongdanimg.$data[1]['sp_img']?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?=$data[1]['sp_ten']?></h5>
                            <p class="card-text"><?=$data[1]['sp_mota']?></p>
                            <a href="./product.php?sp_ma=<?=$data[1]['sp_ma']?>" class="btn btn-primary">Xem</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                    <div id ='card4' class="card" style="width: 18rem;">
                        <img src="<?=$duongdanimg.$data[2]['sp_img']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?=$data[2]['sp_ten']?></h5>
                          <p class="card-text"><?=$data[2]['sp_mota']?></p>
                          <a href="./product.php?sp_ma=<?=$data[2]['sp_ma']?>"class="btn btn-primary">Xem</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                    <div id ='card3' class="card" style="width: 18rem;">
                        <img src="<?=$duongdanimg.$data[3]['sp_img']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?=$data[3]['sp_ten']?></h5>
                          <p class="card-text"><?=$data[3]['sp_mota']?></p>
                          <a href="./product.php?sp_ma=<?=$data[3]['sp_ma']?>" class="btn btn-primary">Xem</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                    <div id ='card2' class="card" style="width: 18rem;">
                       <img src="<?=$duongdanimg.$data[4]['sp_img']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?=$data[4]['sp_ten']?></h5>
                          <p class="card-text"><?=$data[4]['sp_mota']?></p>
                          <a href="./product.php?sp_ma=<?=$data[4]['sp_ma']?>" class="btn btn-primary">Xem</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                    <div id ='card1' class="card" style="width: 18rem;">
                        <img src="<?=$duongdanimg.$data[5]['sp_img']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?=$data[5]['sp_ten']?></h5>
                          <p class="card-text"><?=$data[5]['sp_mota']?></p>
                          <a href="./product.php?sp_ma=<?=$data[5]['sp_ma']?>" class="btn btn-primary">Xem</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            </div>
</body>
</html>