{{-- @yield('content') --}}
{{-- {{request()-is('')?'active':''}}" --}}
{{-- <img src="{{ asset('storage/images/logo (1).png')}}"
            width="100%"
            height=""
            alt="">     --}}
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <link rel="icon" type="image/x-icon" href="images/logotiki.png">
                <title>Shop bán hàng</title>

                <link  href="{{asset('view/layouts/web.css')}}">



            </head>
            <body style="font-family:Arial, Helvetica, sans-serif">

            {{-- _____________________HEADER________________________ --}}

            <div class="header ">
                <div class="container md-3">
                    <div class="row">


                            {{-- logo --}}
                        <div class="col-md-1 ">

                            <img src="{{asset('/images/logotiki.png')}}"
                            width="100%"


                            alt="">
                        </div>
                        {{-- input --}}
                        <div class="col-md-5  py-4">
                            <div class="input-group mb-3">
                                <input  type="text" class="form-control" placeholder="Nhấn để tìm kiếm"  >
                                <span class="input-group-text " style="background-color: #dc3545!important;">
                                <a class="text-white" href=""><i class="fa-solid fa-magnifying-glass"></i></a></span>
                              </div>



                        </div>

                        {{-- info+login --}}
                        <div class="col-md-4 py-3">
                                <div class="row">

                                    <div class="col">
                                        <div class="row">
                                            <div class="col-md-3 ">
                                               <div class="fs-3 text-danger">

                                                <i class="fa-solid fa-phone"></i>

                                               </div>

                                            </div>
                                            <div class="col-md-9 ">
                                               <Strong>Liên hệ</Strong>
                                               <br>
                                                <strong class="text-danger">123456789</strong>
                                            </div>
                                        </div>
                                    </div>
                                            {{-- --------- --}}

                                            <div class="col">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                       <div class="fs-3 text-info">

                                                            <i class="fa-solid fa-circle-user"></i>

                                                       </div>

                                                    </div>
                                                    <div class="col-md-9">
                                                        <Strong>Xin chào</Strong>
                                                        <br>
                                                        <strong ><a class="text-info" style="text-decoration: none" href="http://localhost:8000/dangnhap?">Đăng nhập</a></strong>
                                                    </div>
                                                </div>
                                            </div>

                                </div>
                        </div>

                        {{-- <i class="fa-solid fa-circle-user"></i> --}}




                        {{-- item --}}
                        <div class="col-md-2 py-3">
                                <div class="row">
                                    <div class="col">

                                        <a href="#" class=" position-relative">
                                            <span class="fs-3"><i class="fa-solid fa-heart"></i></span>
                                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                              0

                                            </span>
                                          </a>

                                    </div>
                                    {{--  --}}
                                    <div class="col">

                                        <a href="#" class=" position-relative">
                                            <span class="fs-3"><i class="fa-solid fa-bag-shopping"></i></span>
                                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                              0

                                            </span>
                                          </a>

                                    </div>
                                    {{--  --}}
                                    <div class="col">


                                        <a href="#" class=" position-relative">
                                            <span class="fs-3"><i class="fa-solid fa-comments"></i></span>
                                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                              0

                                            </span>
                                          </a>

                                    </div>
                                </div>






                        </div>
                    </div>
                </div>

            </div>

            {{-- _____________________MENU___________________________ --}}

            <div class="menu bg-danger">
                <div class="container-fluid ">
                    <div class="row">

                        <div class="col-md-3 text-white " style="text-align: center;padding:20px">

                            <li  class="nav-item dropdown"
                            style="list-style: none;" >


                                <a class="nav-link dropdown-toggle text-white"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-align-left" aria-hidden="true"></i> Danh mục sản phẩm
                                </a>
                                {{-- <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><hr class="dropdown-divider"></li>

                                </ul> --}}
                              </li>

                        </div>



                        <div class="col-md-9" >

                                    {{-- <ul  class="navbar-nav me-auto mb-2 mb-lg-0 " style="display:flex">
                                      <li class="nav-item" >
                                        <a  class="nav-link active text-white" aria-current="page" href="#">Trang chủ</a>
                                      </li>

                                      <li class="nav-item" >
                                        <a class="nav-link text-white" href="#">Giới thiệu</a>
                                      </li>
                                      <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Sản phẩm
                                        </a>

                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Sản phẩm 1</a></li>
                                          <li><a class="dropdown-item" href="#">Sản phẩm 2</a></li>
                                          <li><hr class="dropdown-divider"></li>
                                          <li><a class="dropdown-item text-white" href="#">Something else here</a></li>
                                        </ul>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link text-white" aria-disabled="true">Tin tức</a>


                                      </li>

                                      <li class="nav-item" >

                                        <a class="nav-link text-white" aria-disabled="true">Tuyển dụng</a>

                                      </li>

                                      <li class="nav-item">


                                        <a class="nav-link text-white" aria-disabled="true">Liên hệ</a>
                                      </li>
                                    </ul> --}}

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-9 " style="text-align:center;padding:28px 0">
                                            <a style="text-decoration: none;padding-right:10px;color:white" href="">Trang chủ</a>
                                            <a style="text-decoration: none; padding-right:10px;color:white" href="">Giới thiệu</a>
                                            <a style="text-decoration: none; padding-right:10px;color:white" href="">Trang 2</a>
                                            <a style="text-decoration: none; padding-right:10px;color:white" href="">Tin tức</a>
                                            <a style="text-decoration: none; padding-right:10px;color:white" href="">Tuyển dụng</a>
                                            <a style="text-decoration: none; padding-right:10px;color:white" href="">Liên hệ</a>
                                         </div>
                                        </div>
                                    </div>


                        </div>


                    </div>
                </div>
            </div>







            {{-- _____________________CONTENT___________________________ --}}


            {{-- slide --}}
            <div class="Slider py-3">
                <div class="container">
                  <div class="row" style="justify-content: space-evenly">

                    <div class="col-lg-8 col-md-6" style="display:flex;padding:0;height:auto" >
                      <div class="Slider">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>

                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="/images/slide2.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="/images/slide3 (1).png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="/images/slide3 (1).png" class="d-block w-100" alt="...">
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


                    <div class="col-lg-4 col-md-1  px-3" >
                          <div>
                            <img src="/images/slide3 (1).png" class="img-fluid " alt="...">
                          </div>

                          <div class="py-3">
                            <img src="/images/slide2.png" class="img-fluid" alt="...">
                          </div>

                    </div>

                </div>
            </div>
            <div class="Slider1 py-4">
                <div class="row" >

                    <div class="custom col-10" style="display: flex;">
                        <a href="">
                            <svg style="color: #dc3545" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
                            </svg>
                            <p>Giỏ hàng</p>
                        </a>
                        <a href="">
                            <svg style="color: #dc3545" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
                                </svg>
                                <p>Giỏ hàng</p>
                        </a>
                        <a href="">
                            <svg style="color: #dc3545" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
                                </svg>
                                <p>Giỏ hàng</p>
                        </a>
                        <a href="">
                            <svg style="color: #dc3545" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
                                </svg>
                                <p>Giỏ hàng</p>
                        </a>
                        <a href="">
                            <svg style="color: #dc3545" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
                                </svg>
                                <p>Giỏ hàng</p>
                        </a>
                        <a href="">
                            <svg style="color: #dc3545" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
                                </svg>
                                <p>Giỏ hàng</p>
                        </a>



                    </div>
                    <div class="col-md-1"></div>






            </div>

            {{-- _____________________________________CAST-LIST______________________ --}}
             <div class="product-list mb-3 p-2 " >
                <div class="product-title border-bottom border-bottom border-danger  "style="display:flex">
                    <div class="col-md-4 ">
                        <strong class="bg-danger text-white p-1" >THỜI TRANG</strong>


                    </div>

                    <div class="col-md-8  "  >
                        {{-- <ul style="display:flex;justify-content: space-between; list-style:none; margin:0;">
                          <li><a style=" text-decoration: none;" class="text-white bg-secondary p-1" href="">Thời trang nữ</a></li>
                          <li><a style=" text-decoration: none;" class="text-white bg-secondary p-1"  href="">Thời trang nam</a></li>
                          <li><a style=" text-decoration: none;" class="text-white bg-secondary p-1"  href="">Giày dép nữ</a></li>
                          <li><a style=" text-decoration: none;" class="text-white bg-secondary p-1"  href="">Giày dép nam</a></li>
                          <li><a style=" text-decoration: none;" class="text-white bg-secondary p-1" href="">Đồng hồ & Trang sức</a></li>

                        </ul> --}}

                        <a style=" text-decoration: none;" class="text-white bg-danger p-1" href="">Thời trang nữ</a>
                        <a style=" text-decoration: none;" class="text-white bg-danger p-1" href="">Thời trang nam</a>
                        <a style=" text-decoration: none;" class="text-white bg-danger p-1" href="">Giày dép nữ</a>
                        <a style=" text-decoration: none;" class="text-white bg-danger p-1" href="">Giày dép nam</a>
                        <a style=" text-decoration: none;" class="text-white bg-danger p-1" href="">Đồng hồ & Trang sức</a>

                    </div>
                </div>
                <div class="row">
                <div class="col-2">
                    <div class="sidebar my-4" style="height:100%;width:70%;box-shadow: px 0 rgba(255, 0, 0, 0.2) inset;">
a
                    </div>
                </div>
                <div class="col-8">
                <div class="product-list-s py-3">
                  <div class="row">
                    <div class="col-md-3 mb-3">
                      <img src="/images/aophong.jpg" class="img-fluid w-100 " alt="...">
                      <h4>Áo phông đen</h4>
                      <h3>Giá:1000 đồng </h3>
                    </div>

                    <div class="col-md-3 mb-3">
                      <img src="/images/aophong.jpg" class="img-fluid w-100" alt="...">
                      <h4>Áo phông đen</h4>
                      <h3>Giá:1000 đồng </h3>
                    </div>

                    <div class="col-md-3 mb-3">
                      <img src="/images/aophong.jpg" class="img-fluid w-100" alt="...">
                      <h4>Áo phông đen</h4>
                      <h3>Giá:1000 đồng </h3>
                    </div>

                    <div class="col-md-3 mb-3">
                      <img src="/images/aophong.jpg" class="img-fluid w-100" alt="...">
                      <h4>Áo phông đen</h4>
                      <h3>Giá:1000 đồng </h3>
                    </div>

                    <div class="col-md-3 mb-3">
                      <img src="/images/aophong.jpg" class="img-fluid w-100" alt="...">
                      <h4>Áo phông đen</h4>
                      <h3>Giá:1000 đồng </h3>
                    </div>

                    <div class="col-md-3 mb-3">
                      <img src="/images/aophong.jpg" class="img-fluid w-100" alt="...">
                      <h4>Áo phông đen</h4>
                      <h3>Giá:1000 đồng </h3>
                    </div>

                    <div class="col-md-3 mb-3">
                      <img src="/images/aophong.jpg" class="img-fluid w-100" alt="...">
                      <h4>Áo phông đen</h4>
                      <h3>Giá:1000 đồng </h3>
                    </div>


                    <div class="col-md-3 mb-3">
                      <img src="/images/aophong.jpg" class="img-fluid w-100" alt="...">
                      <h4>Áo phông đen</h4>
                      <h3>Giá:1000 đồng </h3>
                    </div>

                  </div>
                </div>
            </div>
            </div>
             </div>
                


            {{-- _____________________FOOTER________________________________ --}}


            <div class="footer bg-dark text-white py-4 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h5>THÔNG TIN BÁN HÀNG</h5>
                        <ul>
                            {{-- 1 --}}
                            <li><a href=""></a>Trang chủ</li>
                            <li><a href=""></a>Sản phẩm</li>
                            <li><a href=""></a>Giới thiệu</li>
                            <li><a href=""></a>Tin tức</li>
                            <li><a href=""></a>Trang 2</li>
                            <li><a href=""></a>trang 4</li>


                        </ul>





                    </div>
                    {{-- 2 --}}
                    <div class="col-md-3">
                        <h5>THÔNG TIN BÁN HÀNG</h5>
                        <ul>

                            <li><a href=""></a>Trang chủ</li>
                            <li><a href=""></a>Sản phẩm</li>
                            <li><a href=""></a>Giới thiệu</li>
                            <li><a href=""></a>Tin tức</li>
                            <li><a href=""></a>Trang 2</li>
                            <li><a href=""></a>trang 4</li>


                        </ul>


                    </div>
                    {{-- 3 --}}
                    <div class="col-md-3">
                        <h5>THÔNG TIN BÁN HÀNG</h5>
                        <ul>

                            <li><a href=""></a>Trang chủ</li>
                            <li><a href=""></a>Sản phẩm</li>
                            <li><a href=""></a>Giới thiệu</li>
                            <li><a href=""></a>Tin tức</li>
                            <li><a href=""></a>Trang 2</li>
                            <li><a href=""></a>trang 4</li>


                        </ul>

                    </div>
                    {{-- 4 --}}
                    <div class="col-md-3">
                        <h5>THÔNG TIN BÁN HÀNG</h5>
                        <ul>

                            <li><a href=""></a>Trang chủ</li>
                            <li><a href=""></a>Sản phẩm</li>
                            <li><a href=""></a>Giới thiệu</li>
                            <li><a href=""></a>Tin tức</li>
                            <li><a href=""></a>Trang 2</li>
                            <li><a href=""></a>trang 4</li>


                        </ul>

                    </div>





                </div>
                <hr>
                <div class="row">

                    <div class="col-md-6">
                            <h5>THIÊN ĐƯỜNG MUA SẮM </h5>

                               <p class="m-0"> Copyright@ 2021 Công ty cổ phần thương mại</p>
                               <p class="m-0">  Chứng nhận ĐKKD:8342934793847 do KHGF</p>
                               <p class="m-0">  Địa chỉ:Việt Nam</p>
                               <p class="m-0">  Điện thoại:123456 Email:12345@gmail.com</p>






                        </div>
                        <div class="col-md-6">
                        <h5>NHẬN TIN KHUYẾN MÃI</h5>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nhấn để tìm kiếm" >
                            <span class="input-group-text"><a style="text-decoration: none;color: rgb(217, 58, 58)" href="">Đăng kí</a>
                          </div>
                          <span>
                            <a style="text-decoration: none;color:#dc3545;font-size:20px" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-index-thumb-fill" viewBox="0 0 16 16">
                                    <path d="M8.5 1.75v2.716l.047-.002c.312-.012.742-.016 1.051.046.28.056.543.18.738.288.273.152.456.385.56.642l.132-.012c.312-.024.794-.038 1.158.108.37.148.689.487.88.716.075.09.141.175.195.248h.582a2 2 0 0 1 1.99 2.199l-.272 2.715a3.5 3.5 0 0 1-.444 1.389l-1.395 2.441A1.5 1.5 0 0 1 12.42 16H6.118a1.5 1.5 0 0 1-1.342-.83l-1.215-2.43L1.07 8.589a1.517 1.517 0 0 1 2.373-1.852L5 8.293V1.75a1.75 1.75 0 0 1 3.5 0z"/>
                                  </svg>

                                Đăng kí để nhận ưu đãi</a>
                          </span>
                          {{-- <span class="box" ><i class="fa fa-facebook-official" aria-hidden="true"></i></span>
                          <span class="box" ><i class="fa fa-youtube" aria-hidden="true"></i></span>
                          <span class="box" ><i class="fa fa-facebook" aria-hidden="true"></i></span>
                          <span class="box" ><i class="fa fa-facebook" aria-hidden="true"></i></span> --}}
                    </div>


                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                            TRANG WEBSITE CHÍNH CHỦ
                    </div>
                    <div class="col-md-6 ">
                        <div class="row ">
                        <div class="" style="text-align:center">
                        <a class="px-2" style="text-decoration: none;" href="">

                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                              </svg>
                        </a>
                         <a href="" class="px-2" style="text-decoration: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                              </svg>
                         </a>
                         <a href="" class="px-2" style="text-decoration: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                              </svg>


                        </a>
                            <a href="" class="px-2" style="text-decoration: none;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                  </svg>

                            </a>



                            </div>
                        </div>
                    </div>
                </div>
            </div>



            </div>













            </body>
            </html>
