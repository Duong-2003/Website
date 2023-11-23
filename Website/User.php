<?php
    include_once($linkconnWebsite);
    if ($loggedInUsername) {
        $name = $loggedInUsername;
        $sql =  "SELECT * FROM users WHERE name = '$name'";
        $result = $connect->query($sql);
        if ($result->num_rows >0) {
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
        else{
            echo "ERROR: Không tìm thấy user";
            exit();
        }
    } else {
        echo "ERROR: Chưa đăng nhập";
        exit();
    }

?>
<div class="modal fade" id="User" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Thông tin người dùng</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div id="error-message" class="text-danger" style="text-align:center ;font-size:25px"></div>
            <div class="modal-body">
                <div class="menu-content  ">
                    <form action=<?= $linkBE . "Add_product.php" ?> method="post" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <img src="https://avatars.githubusercontent.com/u/125018793?s=400&u=d66a7dc1d555eb23d223fe07b638e9701a5735be&v=4" alt="" width="32" height="32" class="rounded-circle me-2">
                            <p>Tên: </p>
                            <p> <?= $user['name'] ?></p>
                        </div>
                        <div class="input-group mb-3">
                            <p>Email</p>
                            <p>****</p>
                            <button type="button" class="btn btn-dark">Đổi Email</button>

                        </div>
                        <div class="input-group mb-3">
                            <p>Địa chỉ</p>
                            <p> <?= $user['address'] ?></p>
                            <button type="button" class="btn btn-dark">Đổi địa chỉ</button>

                        </div>


                        <button type="button" class="btn btn-dark">Đổi mật khẩu</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>