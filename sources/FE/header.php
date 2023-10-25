<style>
    li {
        list-style: none;

    }

    #header {
        z-index: 10000;
        top: 0;
        position: sticky;

    }


    #home ul {
        display: flex;
        justify-content: space-evenly;
        padding-top: 10px;





    }

    #home li:hover a {
        color: #d2d2e1 !important;
        ;

    }

    #home a {
        color: #3d3d64;
        text-decoration: none;
    }

    #home li {
        padding: 5px 5px;

    }


    #header {
        background-image: linear-gradient(to bottom, #bfa4a4, #9b9be1);
    }


    #menu-header {
        font-size: 20px;
    }

    /* #home :hover a  {
        border-radius: 5px;

        box-shadow: 0 0 20px 3px;
    } */


    .hidden-header {
        /* display: none; */
        opacity: 0;
    }







    @media screen and (max-width: 456px) {
        #menu-header {
            flex-wrap: wrap;
            justify-content: space-evenly;

        }
    }

    @media screen and (max-width: 1200px) {
        #menu-header {
            flex-wrap: wrap;
            justify-content: space-evenly;

        }
    }

    @media screen and (max-width: 990px) {
        #home ul {
            /* display: none; */
            padding: 0px;
            margin-top: -10px;
            justify-content: center;

        }

        .header-input {
            padding: 0px 90px;
        }

    }











    /* Style The Dropdown Button */
    .dropbtn {
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        /* display: inline-block; */
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        min-width: 160px;
        /* box-shadow: 0px 8px 16px px rgba(0, 0, 0, 0.2); */
        z-index: 100;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        background-color: #7070a7;
        padding: 10px 0;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    /* .dropdown-content a:hover {background-color: #f1f1f1} */

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown-content :hover a {
        color: red;
    }
</style>
<script>
    window.onscroll = function() {
        var header = document.getElementById("header");
        if (window.pageYOffset >= 100) {
            header.classList.add("hidden-header");
        } else {
            handleScrollDirection();
        }
    };

    function handleScrollDirection() {
        var lastScrollTop = 0;

        window.addEventListener("scroll", function() {
            var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (currentScroll > lastScrollTop) {
                // Hành động khi người dùng cuộn chuột xuống
                header.classList.add("hidden-header");
            } else {
                // Hành động khi người dùng cuộn chuột lên
                header.classList.remove("hidden-header");
            }

            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Đảm bảo giá trị không âm
        });
    }
    //Xử lý ảnh lỗi 
    function yourFunction() {
        var images = document.querySelectorAll('img');
        images.forEach(function(img) {
            img.addEventListener('error', function() {
                this.onerror = null; 
                var linkImg = '<?php echo $linkImgIndex; ?>nope-not-here.webp';
                this.src = linkImg;
            });
        });
    }
    document.addEventListener('DOMContentLoaded', function() {
        yourFunction();
    });
</script>

<body>
    <?php
    // Kiểm tra xem người dùng đã đăng nhập chưa
    if (isset($_SESSION['username'])) {
        // Sử dụng thông tin đăng nhập từ session
        $loggedInUsername = $_SESSION['username'];
    }
    ?>
    <script>
        var username = <?php echo isset($loggedInUsername) ? json_encode($loggedInUsername) : 'null'; ?>;

        // Xử lý thay đổi icone user
        function myFunction() {
            console.log(username);
            if (typeof username !== 'undefined' && username !== null) {
                console.log("Đăng nhập: " + username);
                var newElement = document.getElementById("ic-user");
                var oldElement = document.getElementById("ic-notuser");
                if (newElement && oldElement) {
                    var clonedElement = newElement.cloneNode(true);
                    clonedElement.style.display = 'block';
                    oldElement.parentNode.replaceChild(clonedElement, oldElement);
                }
            } else {
                console.log("Chưa đăng nhập");
            }
        }
        document.addEventListener("DOMContentLoaded", myFunction);
    </script>

    <div class="dropdown" id="ic-user" style="display: none;">
        <a href="#">
            <img src="https://avatars.githubusercontent.com/u/125018793?s=400&u=d66a7dc1d555eb23d223fe07b638e9701a5735be&v=4" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong><?= $loggedInUsername ?></strong>
        </a>
        <div class="dropdown-content">
            <a href="#" class="menu-dropdown">Thông tin</a>
            <a href=<?= $linkBE . "logout_process.php" ?> class="menu-dropdown">Đăng xuất</a>
        </div>
    </div>


    <div class="header" id="header">

        <div class="container">
            <div class="row py-2 " style="text-align: center;">
                <!-- ------logo-------- -->
                <div class="col-lg-3 col-md-12" id="logo" style="padding:5px 5px">
                    <a href="./website.php"><img src=<?= $linkImgIndex . "logo1.webp" ?> alt="" style="height:auto;witdh:100%"></a>

                </div>

                <div class="col-lg-3 col-md-12 text-white " style="text-align:center;padding: 8px 0;">
                    <div class="input-group mb-3 " id="header-input" style="padding:5px 5px">
                        <input id="searchInput" type="text" class="form-control" placeholder="Nhấn để tìm kiếm">
                        <span class="input-group-text" style="background-color:#9fa3fe;">
                            <a style="cursor: pointer;" id="searchClick">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                        </span>
                    </div>
                </div>
                <script>
                    function getInputSearch() {
                        var input = document.getElementById('searchInput').value;
                        return input;
                    }

                    document.getElementById("searchClick").addEventListener("click", function() {
                        var searchValue = getInputSearch();
                        if (searchValue) {
                            window.location.href = "./listSearch.php?search=" + searchValue;
                        }
                    });
                </script>


                <div class="col-lg-6 col-md-12 " id="home">

                    <ul id="menu-header">

                        <li>
                            <div class="">
                                <a href="website.php" class="nav-link " id="order">
                                    <i class="fa fa-home" aria-hidden="true" style="font-size:24px;color: #5c64b4;"></i>
                                    <strong style=" font-family: cursive;font-size:25px">HOME</strong>
                                </a>



                        </li>
                        <li>
                            <div class="">
                                <a href="./cart.php" class="nav-link " id="order">
                                    <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:24px;color: #5c64b4;"></i>
                                    <strong style=" font-family: cursive;font-size:25px">CART</strong>
                                </a>



                        </li>
                        <li>
                            <div class="dropdown" id="ic-notuser">
                                <a href="#" class="nav-link " id="order">
                                    <i class="fa-solid fa-circle-user" style="font-size:25px;color: #5c64b4;"></i>
                                    <strong style=" font-family: cursive;font-size:25px">USER</strong>
                                </a>
                                <div class="dropdown-content">
                                    <a href="./login.php" class="menu-dropdown">Đăng nhập</a>
                                    <a href="./register.php" class="menu-dropdown">Đăng ký</a>
                                </div>


                        </li>


                    </ul>
                </div>


            </div>





        </div>
    </div>
    </div>


</body>

</html>