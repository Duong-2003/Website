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
nav{
   
   background-image: linear-gradient(to bottom, #858585, #7f7f8d);
}
li{
    list-style: none;
}
nav #menu li a{
   color:#fff;
   text-decoration: none;
   display: block;
   padding: 10px 15px;

}
ul#menu{
   padding: 0;
}

#menu{
   display: flex;
   justify-content: space-evenly;
}
#menu a i{
    color:#ba4646;
}
nav #menu li:hover  a{
   background-image: linear-gradient(to bottom, #4f4d4d, #313133);
   transition: all 0.3s;
}

@media  screen and (max-width: 456px) {
    #menu{
        flex-wrap: wrap;
        justify-content: space-evenly;
    
}
}
@media  screen and (max-width: 1190px) {
    #menu{
        flex-wrap: wrap;
        justify-content: space-evenly;
    
}
}
    </style>
</head>
<body>
<nav >
                   
                   <div class="container">
                   <ul id="menu">
                            <li><a href="website.php">
                            <i class="fa fa-home" aria-hidden="true"  ></i>
                                Trang chủ
                            </a></li>


                            <li><a href="login.php">
                            <i class="fa fa-user-circle" aria-hidden="true"  ></i>
                            Đăng nhập
                            </a></li>


                            <li><a href="register.php" >
                            <i class="fa fa-user-plus" aria-hidden="true"  ></i>
                            Đăng kí
                            </a></li>

                            
                            <li><a href="register.php" >
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                             Giỏ hàng
                            </a></li>




                            
                        </ul>
                   </div>
               </nav>
</body>
</html>

