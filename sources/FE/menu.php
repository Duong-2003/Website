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
nav{
   
   background-image: linear-gradient(to bottom, #858585, #7f7f8d);
}
li{
    list-style: none;
}
nav #menu li  a{
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

nav #menu li:hover a.menu-dropdown {
   background-image: none;
   transition: none; 
}
.dropdown-content a:hover {
   background-color: #4f4d4d;
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

<style>
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
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  box-shadow: 0px 8px 16px px rgba(0,0,0,0.2);
  z-index: 100;
}

/* Links inside the dropdown */
.dropdown-content a {
  background-color: #7f7f8d;
  padding: 12px 16px;
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

</style>

</head>


<body>
                <?php
                    // Kiểm tra xem người dùng đã đăng nhập chưa
                    if (isset($_SESSION['username'])) {
                        // Sử dụng thông tin đăng nhập từ session
                        $loggedInUsername = $_SESSION['username'];
                    } else {
                        // Người dùng chưa đăng nhập, thực hiện xử lý phù hợp
                    }
                ?>
                <script>
                var username = <?php echo isset($loggedInUsername) ? json_encode($loggedInUsername) : 'null'; ?>;
                
                function myFunction() {
                    console.log(username);
                    if(typeof username !== 'undefined' && username !== null){
                        console.log("Đăng nhập: " + username);
                        var newElement = document.getElementById("ic-user");
                        var oldElement = document.getElementById("ic-notuser");
                        if(newElement && oldElement)
                        {
                          var clonedElement = newElement.cloneNode(true);
                          clonedElement.style.display = 'block';
                          oldElement.parentNode.replaceChild(clonedElement, oldElement);
                        }
                    } 
                    else{
                        console.log("Chưa đăng nhập");
                    }
                }
                document.addEventListener("DOMContentLoaded", myFunction);
                </script>

                            <div class="dropdown" id="ic-user" style="display: none;">
                                <a href="#"> 
                                    <img src="https://avatars.githubusercontent.com/u/125018793?s=400&u=d66a7dc1d555eb23d223fe07b638e9701a5735be&v=4" alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong><?=$loggedInUsername?></strong>
                                 </a>
                                <div class="dropdown-content" >
                                    <a href="#" class ="menu-dropdown">Thông tin</a>
                                    <a href=<?=$linkBE."logout_process.php"?> class ="menu-dropdown">Đăng xuất</a>
                                </div>
                            </div>
<nav >
                   
                   <div class="container">
                   <ul id="menu">
                            <li><a href="website.php">
                            <i class="fa fa-home" aria-hidden="true"  ></i>
                                Trang chủ
                            </a></li>


                            <!-- <li><a href="login.php">
                            <i class="fa fa-user-circle" aria-hidden="true"  ></i>
                            Đăng nhập
                            </a></li>


                            <li><a href="register.php" >
                            <i class="fa fa-user-plus" aria-hidden="true"  ></i>
                            Đăng kí
                            </a></li> -->

                            <li>
                            <div class="dropdown" id= "ic-notuser" >
                                <a href="#" class="nav-link " id="order"> 
                                    <i class="fa fa-user" aria-hidden="true"  style="color:white"></i>
                                    <strong>user</strong>
                                </a>
                                <div class="dropdown-content">
                                    <a href="./login.php" class ="menu-dropdown">Đăng nhập</a>
                                    <a href="./register.php" class ="menu-dropdown">Đăng ký</a>
                                </div>
                            </div>    
                            
                            </li>
                            
                           

                            <li><a href="./cart.php" >
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                             Giỏ hàng
                            </a></li>




                            
                        </ul>
                   </div>
               </nav>

               
               
</body>
</html>

