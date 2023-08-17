<?php
    require('inc/essential.php');
    adminLogin();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Quản Trị - Bảng Điều Khiển</title>
    <?php
        require('inc/link.php');
    ?>
</head>

</body>
<?php require('inc/header.php');?>

<div class="container-fluid" id= "main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">


            <div class="contarner-fluid">
                <div>
                    <h2>Danh Sách USER</h2>
                </div>
                <div class="card-table">
                    <table class="table">
                        <thead class="thead-dark" style="background-color: #000; color:aliceblue;">
                            <tr>
                            <th>#</th>
                            <th>Họ và Tên</th>
                            <th>Mật Khẩu</th>
                            <th>Email</th>
                            <th>Số Điện Thoại</th>
                            <th>Ảnh</th>
                            <th>Địa chỉ</th>
                            <th>Ngày Sinh</th>

                            <th> Thêm </th>
                            <th> Sửa </th>
                            <th> Xóa </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require('inc/db_config.php');
                                

                                // $sql = mysqli_query($conn,"SELECT * FROM ks_user");
                                // $stmt = $conn->prepare($sql);
                                // $stmt->bind_param("s", $partid);
                                // $stmt->execute();
                                // $result = $stmt->get_result();
                               
                                $query = "SELECT * FROM user_tk";
                                $result = mysqli_query($conn, $query);
                                
                                if ($result === false) { // Kiểm tra xem câu truy vấn có thành công hay không
                                    die(mysqli_error($conn));
                                }
                                
                                
                                ?>
                            <?php
                              
                                    while( $row = mysqli_fetch_assoc($result)){?>
                                        <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['pass']; ?></td>
                                            <td><?php echo $row['Email']; ?></td>
                                            <td><?php echo $row['Phone']; ?></td>
                                            <td><?php echo $row['Anh']; ?></td>
                                            <td><?php echo $row['address'];?></td>
                                            <td><?php echo $row['Ngay_sinh'];?></td>

                                            <td> <a href="view/User/them.php"> <button style="color: blue;"> Thêm </button> </a></td>
                                            <td> <a href="view/User/sua.php<?php echo $row['id'];?>"> <button style="color: blue;"> Sửa </button></a> </td>
                                            <td><a href="view/User/xoa.php<?php echo $row['id'];?>"> <button style=" color: blue;"> Xóa </button></a> </td>
                                        </tr>

                                    <?php
                                    } 
                                    ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>