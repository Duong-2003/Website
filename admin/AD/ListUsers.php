
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





</style>

</head>

<body>

<?php

require('connect.php');

$sql ="SELECT * FROM users";
$res = $connect -> query ($sql);



?>
    

<table class="table table-bordered table-info">
  <thead>
    <tr style="text-align:center">
      <th scope="col">Tên đăng nhập</th>
      <th scope="col">Email </th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Mat khau</th>

      <th scope="col">Quyền</th>
      <th scope="col">Chức năng</th>
      
      
    </tr>

    
  </thead>
  <?php  while($row =  $res ->fetch_assoc()){?>
  <tr>
    <td><?php echo $row ['name'];?></td>
    <td><?php echo $row ['email'];?></td>
    <td><?php echo $row ['address'];?></td>
    <td><?php echo $row ['pass'];?></td>
    <td><?php echo $row ['role'];?></td>



    <td style="text-align:center">
     <button class="btn btn-info"><a style="text-decoration:none;color:gray"  href="">Sửa</a></button>  
     <button class="btn btn-info"><a style="text-decoration:none;color:gray"  href="">Xóa</a></button> 
     <button class="btn btn-info"><a style="text-decoration:none;color:gray"  href="">Thêm</a></button> 
    </td>
    
    
    
  </tr>

  <?php }?>
  



</table>



</body>

</html>