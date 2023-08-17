<?php
require 'admin/inc/db_config.php';
if(isset($_POST['Add'])){

    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $pass = mysqli_real_escape_string($conn, $_POST['Pass']);
    $email =mysqli_real_escape_string($conn, $_POST['email']);
    $sodt = mysqli_real_escape_string($conn, $_POST['SoDt']);
    $NgayThue = mysqli_real_escape_string($conn, $_POST['NgayThue']);
    $NgayTra = mysqli_real_escape_string($conn, $_POST['NgayTra']);
    
    if(!empty($fullname)  && !empty($pass)  && !empty($email)  && !empty($sodt)  && !empty($NgayThue)  && !empty($NgayTra)){
        // echo "<pre>";
        // print_r($_POST);
        $sql = "INSERT INTO `user_tk` (`fullname`, `pass`,`Email`,`Phone`,`Anh`,`address`,`Ngay_sinh`) VALUE('$fullname' , '$pass', '$email', '$sodt', '$NgayThue', '$NgayTra','$idPhong')";
        
        if($conn->query($sql)===TRUE){
            header("location : index.php");
        }
        else{
            echo "Lỗi {$sql}".$conn->error;
        }
     }
     else{
        echo 'Khong Thanh cong';
     }

}
?>
<?php  
if(isset($_POST['Them'])){
    $username = $_POST['nickname'];
    $fullname = $_POST['name'];
    $pass = md5($_POST['pass']);
    $cvpass = md5($_POST['cvpass']);
    $email = $_POST['email'];
    if(!empty($username) && !empty($fullname)  && !empty($pass)  && !empty($email) && !empty($cvpass)){
        if($pass == $cvpass){
            $sql = "INSERT INTO `user_tk` (`fullname`,`UserName`,`Pass`,`email` ) VALUE('$fullname' , '$username', '$pass', '$email')";
            if($conn->query($sql)===TRUE){
                echo 'Thêm dữ liệu thành công';
                header("location: ../modules/login.php");
            }
            else{
                echo "Lỗi {$sql}".$conn->error;
            }
        }
        else{
            echo "Xác nhận mật khẩu không thành công";
        }        
  }
    else {
        echo "Bạn cần nhập đầy đủ thông tin";
 }
}   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách Sạn CRT</title>
    <?php
        require('inc/link.php');
    ?>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
   

</head>
<body class="bg-light">
    <?php 
        require('inc/header.php');

    ?>
    <div id="booking" class="section">
         <div class="section-center">
             <div class="container"> 
                <div class="row">
                     <div class="booking-form">
                         <div class="form-header">
                         <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">CRT</a>
                            </div> <form method="post"> <div class="form-group"> 
                                <input class="form-control" type="text" placeholder="Họ và Tên" name="fullname"> 
                                <span class="form-label">Nhập Họ Và Tên</span>
 
                                <br>
                                <input class="form-control" type="pass" placeholder="Mật Khẩu" name="Pass"> 
                                <span class="form-label">Đặt Mật Khẩu</span>
                            </div> 
                            <div class="row"> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <input class="form-control" type="date" name="NgayThue" required> 
                                        <span class="form-label">Thời gian ở</span> 
                             
                                    <div class="col-md-6"> <div class="form-group"> 
                                        <input class="form-control" type="date" required name="NgayTra">
                                         <span class="form-label">Thời gian trả phòng</span>
                                        </div> 
                                         <div class="row"> 
                                            <div class="col-md-4"> 
                                            <div class="form-group"> 
                                                <select class="form-control" name="soluongdat" required> <option value="" selected hidden>Không có phòng</option>
                                                    <option>1</option> <option>2</option> <option>3</option> <option value="">4</option>
                                                    <option value="">5</option>
                                                    <option value="">6</option>
                                                    <option value="">7</option>
                                                    <option value="">8</option>
                                                    <option value="">9</option>
                                                    <option value="">10</option>
                                                    <option value="">11</option> </select>
                                                    <span class="select-arrow"></span> <span class="form-label">Phòng</span> 
                                           
                                           
                                                <select class="form-control" name= "soluong" required> 
                                                    <option value="" selected hidden>Không có người lớn</option>
                                                    <option>1</option> <option>2</option> <option>3</option> <option value="">4</option>
                                                    <option value="">5</option>
                                                    <option value="">6</option>
                                                    <option value="">7</option>
                                                    <option value="">8</option>
                                                    <option value="">9</option>
                                                    <option value="">10</option>
                                                    <option value="">11</option></select> 
                                                    <span class="select-arrow"></span> <span class="form-label">Người lớn</span> 
                                                       
                                                <select class="form-control" required> 
                                                    <option value="" selected hidden>Không Trẻ em</option> <option>0</option> <option>1</option> <option>2</option> <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                    <option value="">6</option>
                                                    <option value="">7</option>
                                                    <option value="">8</option>
                                                    <option value="">9</option>
                                                    <option value="">10</option> </select> 
                                                    <span class="select-arrow"></span> <span class="form-label">Trẻ em</span> </div> </div> </div> <div class="row">
                                                
                                                    <input type="text" name="id_phong">
                                                    
                                                    <div class="col-md-6"> <div class="form-group"> <input class="form-control" type="email" placeholder="Email" name="email"> 
                                                    <span class="form-label">Email</span> </div> </div> <div class="col-md-6"> 
                                                <div class="form-group"> <input class="form-control" type="tel" placeholder="Số Điện Thoại" name="SoDt"> 
                                                        <span class="form-label">Số Điện Thoại</span> </div> </div> </div> <div class="form-btn"> 
                                                        <button class="submit-btn" name="Add">Đặt Phòng Ngay</button>
                                            </div>
                                        </form> 
                                    </div> 
                                </div> 
                            </div> 
                        </div>
    </div>
</body>
</html>