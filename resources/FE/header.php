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

li{
    list-style: none;
    
}
 #home ul{
   display: flex;
   justify-content: space-around;
    padding-top: 10px;
  



    
}
#home li:hover a {
    color: #d2d2e1 !important;;

}

#home a{
    color: #3d3d64;
    text-decoration: none;
}
#home li{
    padding: 5px 5px;
    
}


#header {
    background-image: linear-gradient(to bottom, #e46f6f, #6d6deb);
}


#menu-header{
    font-size: 25px;
}









@media  screen and (max-width: 456px) {
    #menu-header{
        flex-wrap: wrap;
        justify-content: space-evenly;
    
}
}
@media  screen and (max-width: 1200px) {
    #menu-header{
        flex-wrap: wrap;
        justify-content: space-evenly;
    
}
}
@media  screen and (max-width: 990px) {
    #home{
    display: none;
    
}
.header-input{
        padding: 0px 90px;
    }

}
    </style>
</head>
<body>
<?php


?>
<div class="" id="header">
        <div class="container" >
            <div class="row py-2 " style="text-align: center;">
                <!-- ------logo-------- -->
                <div class="col-lg-3 col-md-12" id="logo" style="padding:5px 5px">
                <a href="./website.php"><img src="../Images/index/Lazada.png" alt=""style="height:50px;witdh:100%" ></a>
               
            </div>

            <div class="col-lg-4 col-md-12 text-white " style="text-align:center;padding: 8px 0;">
                    <div class="input-group mb-3 " id="header-input" style="padding:5px 5px">
                            <input type="text" class="form-control" placeholder="Nhấn để tìm kiếm" >
                            <span  class="input-group-text" style="background-color:#9fa3fe;">
                            <a href="">
                            
                            
                            <i class="fa fa-search" aria-hidden="true"></i></a>
                          </div>


                    </div>

                <div class="col-lg-5 col-md-12 " id="home">
                    <div class="row ">
                        <ul id="menu-header">
                            <li><a href="">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                                
                            </a></li>


                            <li><a href="">
                            <i class="fa fa-commenting" aria-hidden="true" ></i>
                           
                            </a></li>


                            <li><a href="" >
                            <i class="fa fa-user-plus" aria-hidden="true"  style="color:#6d6deb"></i>
                           
                            </a></li>



                            <li><a href=""style="color:#ba4646;">
                            <i class="fa fa-phone" aria-hidden="true"  style="color:#ba4646;"></i>
                          
                            </a></li>
                            
                        </ul>
                    </div>


                </div>

               
                
                
                
            









            </div>
        </div>
    </div>
   
</body>
</html>