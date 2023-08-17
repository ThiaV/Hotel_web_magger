<?php
    require '../../inc/db_config.php';
    // $sql = "SELECT *FROM ks_user WHERE id = '$id'";
    // $query = mysqli_query($conn,$sql);
    // $rows = mysqli_fetch_array($query);
    
    $loi = 'Vui lòng nhập thêm';  

    
    
    if(isset($_POST['sua'])){     
        $username = $_POST['UserName'];
        $fullname = $_POST['fullname'];
        $pass = $_POST['Pass'];
        $email = $_POST['email'];
        $sodt = $_POST['SoDt'];
        $NgayThue = $_POST['NgayThue'];
        $NgayTra = $_POST['NgayTra'];
        $idPhong = $_POST['id_phong'];
        if($username == ''){
         echo "<font color = 'red'>".$loi."username"."</font>";
        }if($fullname == ''){
        echo "<font color = 'red'>".$loi."họ và tên"."</font>";
        } if($pass == ''){
        echo "<font color = 'red>".$loi."mật khẩu!"."</font>";
        } if($idPhong == ''){
        echo "font color = 'red'"."Vui lòng thêm Phòng Thuê!"."</font>";
        } if($email == ''){
        echo 'Vui lòng thêm Phòng Thuê!';
        } if($sodt == ''){
        echo "<font color = 'red'>"."Vui lòng thêm !"."</font>";
        } if($NgayThue == ''){
            echo 'Vui lòng thêm Ngày thuê!';
        } if($NgayTra == ''){
            echo "<font color = 'red'>".$loi.'Ngày Trả'."</font>";
        }

       
    }
?>

<?php
    if(isset($_GET["id"])){
       $id = $_GET["id"];
        $sql = mysqli_query($conn,"SELECT * FROM user_tk WHERE id = $id");
        // $query = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_array($sql);
    } 

?>

<?php
 if(!empty($username) &&!empty($fullname)  && !empty($pass)  && !empty($email)  && !empty($sodt)  && !empty($NgayThue)  && !empty($NgayTra) && !empty($idPhong)){
            // echo "<pre>";
            // print_r($_POST);
            $sql = "UPDATE user SET  fullname = '$fullname',UserName = '$username' , Pass = '$pass',email = '$email',SoDt = '$sodt',NgayThue = '$NgayThue',NgayTra = '$NgayTra',id_phong = '$idPhong' WHERE id = '$id'";
            if($conn->query($sql)===TRUE){
                echo 'Thêm dữ liệu thành công';
            }
            else{
                echo "Lỗi {$sql}".$conn->error;
            }
         }
?>
<h2>ADMIN TỰ THÊM KHI KHÁCH TỚI ĐẶT PHÒNG TRỰC TIẾP</h2>
<form action="" method="post" class="form_class">
    <label for="">Họ và Tên</label> 
    <input type="text" name="fullname" value="<?php echo $rows['fullname']?>">
   <br> <br>
    <label for="">UserName</label>
    <input type="text" name="UserName" value="<?php echo $rows['UserName']?>"> 
    <br> <br>
    <label for="">PassWord</label>
    <input type="password" name="Pass" value="<?php echo $rows['Pass']?>">
     <br> <br>
    <label for="">Phòng</label>
    <input type="check" name = "id_phong" value="<?php echo $rows['id_phong']?>"> 
    <br> <br>
    <label for="">Email</label>
    <input type="text" name="email" value="<?php echo $rows['email']?>">
    <br> <br>
    <label for="">Số Điện Thoại</label>
    <input type="text" name="SoDt" value="<?php echo $rows['SoDt']?>">
    <br> <br>
    <label for="">Ngày Thuê</label>
    <input type="date" name="NgayThue" value="<?php echo $rows['NgayThue']?>">
    <br> <br>
    <label for="">Ngày Trả</label>
    <input type="date" name="NgayTra" value="<?php echo $rows['NgayTra']?>">
    <br> <br>
    <input type="submit" value="Sua" name="sua">
</form>