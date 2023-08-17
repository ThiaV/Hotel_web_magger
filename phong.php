<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách Sạn CRT - Phòng</title>
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
    <!--Nen-->
<!--Tiện Nghi-->
    <div class="my-5 px-4">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Phòng</h2>
        <div class="h-line bg-dark">

        </div>
    </div>
   
        

    <div class="container">
        <div class="row"> 
            <!--Kiểm tra-->
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4>BỘ LỌC</h4>
                        <button class="navbar-toggler" type="button" 
                        data-bs-toggle="collapse" data-bs-target="#filterDropdown" 
                        aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        
                            <span class="navbar-toggler-icon"></span>
                        
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">

                
                            <div class="border bg-light p-3 rounded mb-3"> 
                                <h5 class="mb-3" style="font-size: 18px;">Sẵn sàng kiểm tra</h5>
                                <label class="form-label">Ngày Nhận</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Ngày Trả</label>
                                <input type="date" class="form-control shadow-none">    
                               
                            
                            </div>
                            <div class="border bg-light p-3 rounded mb-3"> 
                                <h5 class="mb-3" style="font-size: 18px;">Tiện Nghi</h5>
                                
                                
                                <div class="mb-2">
                                    <input type="checkbox" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Cơ Sở 1</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Cơ Sở 2</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Cơ Sở 3</label>
                                </div>
    
                              
                            
                            </div>
                            <div class="border bg-light p-3 rounded mb-3"> 
                                <h5 class="mb-3" style="font-size: 18px;">khách</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class ="form-label">Người Lớn</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Trẻ em</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>

                                </div>
                               
                                
        
    
                              
                            
                            </div>



                        </div>
                    </div>
                </nav>
            </div>
            <!--Phòng--->
            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/p2.png" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">Phòng Đơn</h5>
                            <div class="features mb-3">
                                    <h6 class="mb-1">Đặc trưng</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        2 Phòng
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        1 Phòng Tắm
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        1 Ban Công
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        3 Sofa
                                    </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Cơ sở Tiện Nghi</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    TV
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Tủ
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Bàn Ghế
                                </span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">khách</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    5 người lón
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    4 trẻ em
                                </span>
                           
                             </div>
                        </div>
            
                        <div class="col-md-2 text-center">

                            <h6 class="mb-4">300k MỖI ĐÊM</h6>
                            <a href="#" class="btn btn-sm text-while w-100 custom-bg shadow-none mb-2">Đặt Phòng </a>
                            <a href="#" class="btn btn-sm btn-outline-dark w-100 shadow-none">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                            <div class="row g-0 p-3 align-items-center">
                                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                    <img src="images/p3.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                    <h5 class="mb-1">Phòng Đơn</h5>
                                    <div class="features mb-3">
                                            <h6 class="mb-1">Đặc trưng</h6>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                                2 Phòng
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                                1 Phòng Tắm
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                                1 Ban Công
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                                3 Sofa
                                            </span>
                                    </div>
                                    <div class="facilities mb-3">
                                        <h6 class="mb-1">Cơ sở Tiện Nghi</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            Wifi
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            TV
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            Tủ
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            Bàn Ghế
                                        </span>
                                    </div>
                                    <div class="guests">
                                        <h6 class="mb-1">khách</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            5 người lón
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            4 trẻ em
                                        </span>
                                
                                    </div>
                                </div>
                    
                                <div class="col-md-2 text-center">

                                    <h6 class="mb-4">300k MỖI ĐÊM</h6>
                                    <a href="#" class="btn btn-sm text-while w-100 custom-bg shadow-none mb-2">Đặt Phòng</a>
                                    <a href="#" class="btn btn-sm btn-outline-dark w-100 shadow-none">Chi tiết</a>
                                </div>
                            </div>
                </div>

                <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/p5.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-1">Phòng Đơn</h5>
                                <div class="features mb-3">
                                        <h6 class="mb-1">Đặc trưng</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            2 Phòng
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            1 Phòng Tắm
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            1 Ban Công
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            3 Sofa
                                        </span>
                                </div>
                                <div class="facilities mb-3">
                                    <h6 class="mb-1">Cơ sở Tiện Nghi</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        Wifi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        TV
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        Tủ
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        Bàn Ghế
                                    </span>
                                </div>
                                <div class="guests">
                                    <h6 class="mb-1">khách</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        5 người lón
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        4 trẻ em
                                    </span>
                            
                                </div>
                            </div>
                
                            <div class="col-md-2 text-center">

                                <h6 class="mb-4">300k MỖI ĐÊM</h6>
                                <a href="#" class="btn btn-sm text-while w-100 custom-bg shadow-none mb-2">Đặt Phòng</a>
                                <a href="#" class="btn btn-sm btn-outline-dark w-100 shadow-none">Chi tiết</a>
                            </div>
                        </div>
                </div>
            </div>



        </div>
    </div>
          
           
    <?php
        require('inc/footer.php');
    ?>
  
    
</body>
</html>