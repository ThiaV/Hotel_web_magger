
<?php  
    require('admin/inc/db_config.php');
    require('admin/inc/essential.php');

?>
<nav id= "navbar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.">CRT</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active me-2" aria-current="page" href="index.php">Trang Chủ</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="phong.php">Phòng</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="TienNghi.php">Tiện Nghi</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="LienHe.php">Liên Hệ</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="TinTuc.php">Tin Tức</a>
                </li>
            </ul>
            <div class="d-flex">
                <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Tìm kiếm</button>-->
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Đăng Nhập
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Đăng Ký
                </button>

            </div>
            </div>
        </div>
</nav>
    <!--Đăng nhập-->



<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center" >
                            <i class="bi bi-person-circle fs-3 me-2"></i>Đăng Nhập
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!---From đăng nhập-->
                    <div class="modal-body">
                        <form method="post">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input name="Email" type="email" class="form-control shadow-none">
                            </div>
                            <div class="mb-4">
                                <label  class="form-label">Mật Khẩu</label>
                                <input name="pass" type="pass" class="form-control shadow-none">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <button type="submit"  name="login" class="btn btn-dark shadow-none">Đăng Nhập</button>
                                <a href="javascrip: void(0)" class="">Quên mật khẩu?</a>
                            </div>
                           <!-- <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> -->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>-->
                    </div>
                    </div>
                </div>
            </form>
            
</div>

    <!--Đăng ký -->



<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center" >
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>Đăng Ký
                    </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Ghi chú: thông tin chi tiết của bạn phải khớp với ID của bạn (thẻ Aadhar, hộ chiếu, giấy phép lái xe, v.v.,...)
                            sẽ được yêu cầu khi nhận phòng
                        </span>
                        <!--From Đăng ký-->
                        <div class="container-fluid">
                            <div class="row">    
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Tên</label>
                                    <input name="fullname" type="text" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0">
                                    <label class="form-label">Email</label>
                                    <input name="Email" type="email" class="form-control shadow-none">
                                </div>

                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Số điện thoại</label>
                                    <input name="Phone" type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Ảnh</label>
                                    <input type="file" name="Anh" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 p-0 mb-3">
                                    <label class="form-label">Địa chỉ</label>
                                    <!--<input type="text" class="form-control shadow-none">-->
                                    <textarea class="form-control shadow-none"  name="address" rows="1"></textarea>

                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Mã users</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Ngày sinh</label>
                                    <input type="date" name="Ngay_sinh" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">mật khẩu</label>
                                    <input name = "pass" type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Xác nhận mật khẩu</label>
                                    <input name="passxd" type="password" class="form-control shadow-none">
                                </div>

                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button name ="Add" class="btn btn-dark shadow-none" type="sunmit">Đăng Ký</button>
                        </div>
                            <!--  <div class="mb-3">
                                <label for="exampleFormControlTextareal" class="form-label">Mô tả</label>
                                <textarea class="form-control" id="exampleFromControlTextareal" rows="3"></textarea>
                            </div>-->

                       <!-- <form>
                            <div class="mb-3">
                                <label class="form-label">Địa chỉ Email</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Mật Khẩu</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <button type="submit" class="btn btn-dark shadow-none">Đăng Nhập</button>
                                <a href="javascrip: void(0)" class="">Quên mật khẩu?</a>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </form> -->
                        </div>
                    </div>
                        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>-->
                    </div>
                    
    
            </form>
</div>
