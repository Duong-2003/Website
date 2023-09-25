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
    <?php
    include_once('../sources/linkFIle.php');
    ?>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* width: 100%; */
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include($linkFE . 'header.php');
    include($linkFE . 'menu.php');
    ?>

    <?php
    include_once($linkconnWebsite);

    if ($_GET['sp_ma'] != '') {
        $id = $_GET['sp_ma'];
        $sql =  "SELECT * FROM sanpham WHERE sp_ma = $id";
        $result = $connect->query($sql);
        $duongdanimg = $linkImgSp;
        $sp = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (!$sp) {
            echo "ERROR: Không tìm thấy sản phẩm";
            exit();
        }
    } else {
        echo "ERROR: Không nhận được id";
        exit();
    }

    ?>
    <html>
    <!-------------------PRODUCT----------------  -->
    <form method="post" action=<?= $linkBE . "order_process.php" ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 py-3" >
                    <img  src="<?= $duongdanimg . $sp['sp_img'] ?>" alt="" style="width: 100%; height:100%;border-radius:15px">
                </div>
                <div class="col-lg-5 col-md-5 " style="    border-radius: 15px; box-shadow: 0 0 10px 0px;">
                    <div class="row gy-2">
                
                        <div>
                            <div class="p-1 text-center text-secondary">
                                <h3><?= $sp['sp_ten'] ?></h3>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="p-1">
                                <strong>MSP:</strong>
                                <?= $sp['sp_ma'] ?>
                            </div>
                            <input style="display: none;" type="text" name="sp_ma" value="<?php echo $sp['sp_ma']; ?>">
                        </div>
                       
                        <div>
                            <div class="p-1">
                                <strong>Giá sản phẩm:</strong>
                                <?= number_format($sp['sp_gia'], 0, '.', ','); ?>
                                <sub>đ</sub>
                            </div>
                        </div>
                       
                        <div>
                            <div class="p-1">
                                <strong>Số lượng còn lại:</strong>
                                <?= $sp['sp_soluong'] ?>
                            </div>
                        </div>
                        
                        <div>
                            <div class="p-1">
                                <div class="input-group ">
                                    <span class="input-group-text" id="" style="margin:0;padding:0">
                                        <strong>Số lượng mua:</strong>
                                        <span style="color: red;">*</span></span>
                                    <input id='value_buy' name="donhang_soluongsp" type="number" max='<?= $sp['sp_soluong'] ?>' min='0' value="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="p-1" id='pay'>
                            <strong>Giá phải trả:</strong>
                                 <?= number_format($sp['sp_gia'], 0, '.', ','); ?>
                                <script>
                                    const inputElement = document.getElementById('value_buy');
                                    const ouputElement = document.getElementById('pay');
                                    inputElement.addEventListener('change', function(event) {
                                        var valuepay = event.target.value * <?= $sp['sp_gia'] ?>;
                                        valuepay = valuepay.toLocaleString('en-US');
                                        var textpay = "Giá phải trả : " + valuepay;
                                        ouputElement.textContent = textpay;
                                    });
                                </script>
                            </div>
                        </div>
                       
                        <div>
                            <div class="p-1">
                            <strong>Chi tiết:</strong>
                                <?= $sp['sp_motachitiet'] ?>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="p-1">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="submit" name="submit" id="btn_dathang">Mua</button>
                                </div>
                            </div>
                            
                        </div>
                      
                    </div>
                </div>
            </div>

        </div>
    </form>

    <!---------------------------------------  -->
</body>
<?php

include($linkFE . 'footer.php');


?>

</html>