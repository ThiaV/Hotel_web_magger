

<?php
@include 'inc/db_config.php';

if(isset($_POST['add_room'])){

   $product_name = $_POST['room_name'];
   $product_price = $_POST['room_price'];
   $product_mt = $_POST['room_mt'];
   $product_image = $_FILES['room_image']['name'];
   $product_image_tmp_name = $_FILES['room_image']['tmp_name'];
   $product_image_folder = '../uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image) || empty($product_mt)){
      $message[] = 'Thêm Thông Tin Chưa đầy đủ';
   }else{
      $insert = "INSERT INTO `ks_phong` (`Gia_Phong`, `Mo_Ta`, `image`,`Trang_Thai`) VALUES('$product_name', '$product_price', '$product_image','$product_mt')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'Đã Thêm Thành Công';
      }else{
         $message[] = 'Thêm Không Thành Công';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM phong WHERE id = $id");
   header('location:phong.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Phòng Nghỉ</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style_1.css">
   <?php
        require('inc/link.php');
    ?>

</head>
<body>
   <?php
      require('inc/header.php');
   ?>
<a href="../../modules/in.php"><img src="../../../frontend/Images/logo-2.png" alt="" style="background-color: blue;"> </a>
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>


<div class="container-fluid" id= "main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <div class="container">

               <div class="admin-product-form-container">

                  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                     <h3>Thêm Phòng Nghỉ</h3>
                     <input type="text" placeholder="Thêm Phòng" name="room_name" class="box">
                     <input type="number" placeholder="Giá" name="room_price" class="box">
                     <input type="text" placeholder="Mô tả" name="room_mt" class="box">
                     <input type="file" accept="image/png, image/jpeg, image/jpg" name="room_image" class="box">
                     <input type="submit" class="btn" name="add_room" value="Thêm Phòng">
                  </form>

               </div>

               <?php

               $select = mysqli_query($conn, "SELECT * FROM phong");   
               ?>
               <div class="product-display">
                  <table class="product-display-table">
                     <thead>
                     <tr>
                        <th>Ảnh</th>
                        <th>Tên Phòng</th>
                        <th>Giá</th>
                        <th>Mô TẢ</th>
                        <th>Hoạt động</th>
                     </tr>
                     </thead>
                     <?php while($row = mysqli_fetch_assoc($select)){ ?>
                     <tr>
                        <td><img src="../uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                        <td><?php echo $row['TenPhong']; ?></td>
                        <td><?php echo $row['Gia']; ?> vnđ/1đêm</td>
                        <td><?php echo $row['MoTa'];?></td>
                        <td>
                           <a href="uploaded_room.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i>Chỉnh </a>
                           <a href="../../../frontend/rooms.php?booking=<?php $row['id']?>" class="btn"><i class="fas fa-check"></i></a>
                           <a href="phong.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> Xóa </a>
                        </td>
                     </tr>
                  <?php } ?>
                  </table>
               </div>

            </div>

        </div>
    </div>
</div>
</body>
</html>