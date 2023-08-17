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
    <title>Bảng Quản Trị - Cài Đặt</title>

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
        
                <!-- Cài đặt tổng quát -->
                <div class="card border-0 shadow mb-4" >
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Cài Đặt Tổng Quan</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                            <i class="bi bi-pencil-square"></i>Điều Chỉnh
                            </button>
                        
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Tiêu Đề</h6>
                        <p class="card-text" id="site_title"></p>

                        <h6 class="card-subtitle mb-1 fw-bold">Tin Tức</h6>
                        <p class="card-text"  id="site_about"></p>

                        
                    </div>
                </div>
                


                <!-- Cài đặt Điều chỉnh -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" >Cài Đặt Chung</h5> 
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Tiểu Đề</label>
                                        <input type="email" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tin Tức</label>
                                        <!--<input type="text" class="form-control shadow-none">-->
                                        <textarea name="site_about" id="site_about_inp" class="form-control shadow-none"  rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Hủy</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Đăng</button>
                                </div>
                            </div>  
                        </form>
                        
                    </div>
                </div>

                <!--Cai Dat Tat WEB-->
                <div class="card border-0 shadow-sm" >
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Tắt WEBSITE</h5>
                            <div class="form-check form-switch">
                                <form action="">
                                    <input  onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">

                                </form>
                            </div>
                        
                        </div>
                        <p class="card-text">
                            Trình duyệt sẽ tắt khi nhập vào nút tắt.
                        </p>

                        
                    </div>
                </div>
                <!--Liên Hệ-->
                
                <div class="card border-0 shadow mb-4" >
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Cài Đặt Tổng Quan</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                            <i class="bi bi-pencil-square"></i>Điều Chỉnh
                            </button>
                        
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Địa chỉ</h6>
                                
                                    <p class="card-text" id="address"></p>

                                </div>

                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                
                                    <p class="card-text" id="gmap"></p>

                                </div>

                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Số Điện Thoại</h6>
                                
                                    <p class="card-text mb-1" id="">
                                        <i class="bi bi-telephone-fill"></i>+842546928
                                        <span id="ph1"> </span>
                                    </p>
                                    <p class="card-text" id="">
                                        <i class="bi bi-telephone-fill"></i>+842546928
                                        <span id="ph2"> </span>
                                    </p>

                                </div>
                               
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Email</h6>
                                
                                    <p class="card-text" id="email"></p>

                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Link</h6>
                                
                                    <p class="card-text mb-1" id="">
                                        <i class="bi bi-twitter me-1"></i>
                                        <span id="tw"> </span>
                                    </p>
                                    <p class="card-text" id="">
                                        <i class="bi bi-facebook"></i>
                                        <span id="fb"> </span>
                                    </p>
                                    <p class="card-text" id="">
                                        <i class="bi bi-instagram"></i>
                                        <span id="insta"> </span>
                                    </p>

                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Bản Đồ</h6>
                                
                                    <iframe  id="iframe" class="border p-2 w-100" loading="lazy"></iframe>

                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>

     
                <!-- Cài đặt Liên Hệ Điều chỉnh -->
                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" >Liên Hệ Chung</h5> 
                                </div>
                                <div class="modal-body">


                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Địa Chỉ</label>
                                                    <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Google Map</label>
                                                    <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Số Điện Thoại</label>
                                                
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"> <i class="bi bi-twitter me-1"></i></span>
                                                        <input type="text" name="pn1" id="pn1_inp"  class="form-control shadow-none" required>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">@</span>
                                                        <input type="text" name="pn2" id="pn2_inp" class="form-control shadow-none" required>
                                                    </div>

                                                
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" name="email" id="email_inp" class="form-control shadow-none" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Theo Dõi</label>
                                                
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-twitter me-1"></i>
                                                            Twitter

                                                        </span>
                                                        <input type="" name="pn1" id="pn1_inp"  class="form-control shadow-none" required>
                                                    </div>

                                            

                                                
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                   
                                
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Hủy</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Đăng</button>
                                </div>
                            </div>  
                        </form>
                        
                    </div>
                </div>

                <!--Cài Đặt Người Quản Trị-->
                <div class="card border-0 shadow mb-4" >
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Quản Trị</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
                            <i class="bi bi-plus-square"></i>Thêm
                            </button>
                        
                        </div>
                     
                        <div class="row" id="team_data">
                           
                        </div>
                        
                    </div>
                </div>
                
                
                 <!--Trình Quản Lý-->

                <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="team_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" >Cài Đặt Chung</h5> 
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Tên</label>
                                        <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Ảnh</label>
                                        <input type="file" name="member_picture" id="member_picture_inp" accept="[.jpg, .png, .webp,...]" class="form-control shadow-none">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Hủy</button>
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
<script src="scripts/settings.js"></script>

</body>
</html>
