<?php

@include 'inc/db_config.php';

$id = $_GET['edit'];

if(isset($_POST['update_room'])){

   $product_name = $_POST['room_name'];
   $product_price = $_POST['room_price'];
   $product_mt = $_POST['room_mt'];
   $product_image = $_FILES['room_image']['name'];
   $product_image_tmp_name = $_FILES['room_image']['tmp_name'];
   $product_image_folder = '../uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image) || empty($product_mt)){
      $message[] = 'Vui lòng thêm đầy đủ thông tin';    
   }else{

      $update_data = "UPDATE phong SET TenPhong='$product_name', Gia='$product_price', MoTa = '$product_mt',image='$product_image'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location: phong.php');
      }else{
         $message[] = 'Vui lòng thêm đầy đủ thông tin!'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM phong WHERE id = ?");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">Cập Nhật Phòng</h3>
      <input type="text" class="box" name="room_name" value="<?php echo $row['TenPhong']; ?>" placeholder="Phòng ">
      <input type="number" min="0" class="box" name="room_price" value="<?php echo $row['Gia']; ?>" placeholder="Giá">
      <input type="text" class="box" name="room_mt" value="<?php echo $row['MoTa'];?>" placeholder="Mô Tả">
      <input type="file" class="box" name="room_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="Cập Nhật Phòng" name="update_room" class="btn">
      <a href="phong.php" class="btn">Phòng !</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>