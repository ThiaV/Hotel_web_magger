<?php
    require '../../inc/db_config.php';        
    if(isset($_POST['them'])){
    $loi = 'Vui lòng nhập thêm';  
    $fullname = $_POST['HoT'];
    $pass = $_POST['pass'];
    $email = $_POST['mail'];
    $sodt = $_POST['SoDt'];
    $NgayThue = $_POST['Anh'];
    $NgayTra = $_POST['address'];
    $idPhong = $_POST['Ngay_sinh'];

    if($NgayTra == ''){
            echo "<font color = 'red'>".$loi.'Ngày Trả'."</font> <br>";
    }

    if($NgayThue == ''){
            echo 'Vui lòng thêm Ngày thuê!';
    }
    if($sodt == ''){
        echo "<font color = 'red'>".'Vui lòng thêm !'."</font><br>";
    }

    if($email == ''){
        echo 'Vui lòng thêm Phòng Thuê!';
    }
    
    if($idPhong == ''){
        echo "font color = 'red'".'Vui lòng thêm Phòng Thuê!'."</font><br>";
    } 
    if($pass == ''){
        echo "<font color = 'red>".$loi.'mật khẩu!'."</font><br>";
    }
          
    if($fullname == ''){
        echo "<font color = 'red'>".$loi.'họ và tên'."</font><br>";
    }
   if($NgayTra == ''){
        echo 'Vui lòng thêm Ngày Trả!';
    } 
    if(!empty($username) &&!empty($fullname)  && !empty($pass)  && !empty($email)  && !empty($sodt)  && !empty($NgayThue)  && !empty($NgayTra) && !empty($idPhong)){
        // echo "<pre>";
        // print_r($_POST);
        $sql = "INSERT INTO `user_tk` (`fullname`, `pass`,`Email`,`Phone`,`Anh`,`address`, `Ngay_sinh`) VALUE('$fullname' , '$username', '$pass', '$email', '$sodt', '$NgayThue', '$NgayTra','$idPhong')";
        if($conn->query($sql)===TRUE){
            echo 'Thêm dữ liệu thành công';
        }
        else{
            echo "Lỗi {$sql}".$conn->error;
        }
     }
   
    }
?>
<h2>ADMIN TỰ THÊM KHI KHÁCH TỚI ĐẶT PHÒNG TRỰC TIẾP</h2>
<form action="" method="post" class="form_class">
    <label for="">Họ và Tên</label> 
    <input type="text" name="HoT">
    <br> <br>
    
    <label for="">PassWord</label>
    <input type="password" name="pass">
    <br> <br>
    <label for="">Email</label>
    <input type="text" name="mail">
    <br> <br>
    <label for="">Số Điện Thoại</label>
    <input type="text" name="SoDt">
    <br> <br>
    <label for="">Ảnh</label>
    <input type="file" name="Anh"> 
    <br> <br>
    <label for="">Địa chỉ</label>
    <input type="text" name="address"><br> <br>
    <br> <br>
    <label for="">Ngày Sinh</label>
    <input type="date" name="Ngay_sinh"><br> <br>
    <button type="submit" name="them"> Thêm</button>

</form>