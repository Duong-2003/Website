<?php
require('connect.php');
?>


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
        header {
            display: flex;
            justify-content: space-evenly;
            text-decoration: none;
            list-style: none;
            background-color: aliceblue;
            line-height: 60px;
           
            

        }
        header a {
          text-decoration: none;
          font-size: 25px;
          color:grey;
          
           
            

        }


    </style>
</head>

<body>


    <header>
        <div>
            <a href="?act=loai">Quản lý loại</a>
        </div>
        <div>
            <a href="?act=sp">Quản lý sản phẩm</a>
        </div>
        <div>
            <a href="?act=users">Quản lý người dùng</a>
        </div>
        <div>
            <a href="?act=order">Quản lý đơn hàng</a>
        </div>


    </header>
    <?php
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'loai':
                require('ListTypeProduct.php');
                break;

            case 'sp':
                require('List.php');
                break;

            case 'users':
                require('ListUsers.php');
                break;
            case 'order':
                require('ListOrder.php');
                break;
            default:
                require('List.php');
                break;
        }
    }
    ?>









</body>

</html>