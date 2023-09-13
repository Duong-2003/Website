<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="website.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <?php
    include('./header.php');
    include('./menu.php');
    ?>

    <?php
    include_once('../BE/connect.php');
    if($_GET['sp_ma'] != '' ){
        $id = $_GET['sp_ma'];
        $sql =  "SELECT * FROM sanpham WHERE sp_ma = $id";
        $result = $connect->query($sql);
        $duongdanimg = '../img/SanPham/';
        $sp = mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(!$sp){
            echo "ERROR: Không tìm thấy sản phẩm";
            exit();     
        }
    }
    else{
        echo "ERROR: Không nhận được id";
        exit();
    }
    
    ?>
    <html>
        <!-------------------PRODUCT----------------  -->
        <section class="product">
            <div class="container">
                 <div class="row">
                    <div class="col-6">
                        <img src="<?=$duongdanimg.$sp['sp_img']?>" alt=""  style="width: 100%;height: auto;">
                    </div>
                    <div class="col-6">
                    <div class="row gy-2">
                        <div >
                            <div class="p-1">
                                <h3><?=$sp['sp_ten']?></h3>
                            </div>
                        </div>
                        <div >
                            <div class="p-1">MSP:<?=$sp['sp_ma']?></div>
                        </div>
                        <div >
                            <div class="p-1">
                                Giá x1: <?=number_format($sp['sp_gia'], 0, '.', ',') ; ?>
                                <sub>đ</sub>
                            </div>
                        </div>
                        <div >
                            <div class="p-1">
                                <p>Số lượng còn lại: <?=$sp['sp_soluong']?></p>
                            </div>
                        </div>
                        <div >
                            <div class="p-1">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Số lượng mua<span style="color: red;">*</span></span>
                                    <input id ='value_buy' name="sp_soluong" type="number" max ='<?=$sp['sp_soluong']?>' min='0'  value="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                        </div>
                        <div >
                            <div class="p-1" id='pay'>
                                Giá phải trả : <?=number_format($sp['sp_gia'], 0, '.', ',') ; ?>
                                <script>
                                    const inputElement = document.getElementById('value_buy');
                                    const ouputElement = document.getElementById('pay');
                                    inputElement.addEventListener('change', function(event) {
                                        var valuepay  =event.target.value * <?=$sp['sp_gia']?> ;
                                        valuepay = valuepay.toLocaleString('en-US');
                                        var textpay = "Giá phải trả : "+ valuepay ;
                                        ouputElement.textContent = textpay ;
                                    });
                                </script>
                            </div>
                        </div>
                        <div >
                            <div class="p-1">
                                <p>Chi tiết:</p>
                                <?=$sp['sp_motachitiet']?>
                            </div>
                        </div>
                        <div >
                            <div class="p-1">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">Thêm vào giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                
            </div>

        </section>

        <!---------------------------------------  -->
</body>
</html>
    