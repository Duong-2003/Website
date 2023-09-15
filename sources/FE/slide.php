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



@media  screen and (max-width: 990px) {
  
   #slide2 img{
    
    display: none;
    
   }
   #slide3 img{
    display: none;
    
  }

}
    </style>
</head>


<body>
  

<div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 ">



        <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" id="slide1">
    <div class="carousel-item active">
      <img src=<?=$linkImgIndex."ipslide1.webp" ?> class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src=<?=$linkImgIndex."ipslide2.webp" ?> class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">

      <img src=<?=$linkImgIndex."ipslide3.webp"?> class="d-block w-100" alt="...">

    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


            </div>















            <div class=" slide2 col-sm-4" >
                
                    <div class="col "id="slide2">
                        <img  src=<?=$linkImgIndex."/ipslide1.webp"?> alt="">
                    </div>

                    <div class="col "id="slide3">
                        <img src=<?=$linkImgIndex."ipslide2.webp"?> alt="">
                    </div>
                </div>
            </div>
        </div>

</body>