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
    <title>Bảng Quản Trị - USER</title>

    <?php
        require('inc/link.php');
    ?>
</head>
<body class="bg-light">
   
    <?php require('inc/header.php');?>


    <div class="container-fluid" id= "main-content">
       <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Cài Đặt</h3>
 
                <!-- Cài đặt Liên Hệ Điều chỉnh -->


                <!--Cài Đặt Người Quản Trị-->
                <div class="card border-0 shadow mb-4" >
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Quản Trị</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#user-s">
                            <i class="bi bi-plus-square"></i>Thêm ảnh
                            </button>
                        
                        </div>
                     
                        <div class="row" id="user_data">
                           
                        </div>
                        
                    </div>
                </div>
                
                
                 <!--Trình Quản Lý-->

                <div class="modal fade" id="user-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="user_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" >Thêm ảnh</h5> 
                                </div>
                                <div class="modal-body">
                        
                                    <div class="mb-3">
                                        <label class="form-label">Ảnh</label>
                                        <input type="file" name="user_picture" id="user_picture_inp" accept="[.jpg, .png, .webp,...]" class="form-control shadow-none">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="user_picture.value=''" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Hủy</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Đăng</button>
                                </div>
                            </div>  
                        </form>
                                    
                    </div>
                           
                </div>
            </div>
        </div>
    </div>



    <?php require('inc/scripts.php');?>




<!--  Chua sua Loi--->
<script src="scripts/user.js"></script>

</body>
</html>
