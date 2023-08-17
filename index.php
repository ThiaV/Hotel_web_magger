<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách Sạn RT - Trang Chủ</title>
   
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    /> 
    <?php
        require('inc/link.php');
    ?>
    <style>
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }
        @media  screen and (max-width: 575px){
            .availability-form{
                margin-top: 25px;
                padding: 0px 35px;

            }
        }

    </style>
</head>
<body class="bg-light">
    <?php 
        require('inc/header.php');

    ?>
    <!--Nen-->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <!-- <div class="swiper-slide">
                    <img src="images/nen/p12.png" class="w-100 d-block"/>
                </div> -->
                <div class="swiper-slide">
                    <img src="images/nen/banner-1.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/nen/banner-2.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/nen/banner-3.png" class="w-100 d-block"/>
                </div>
            </div>
        </div>
       <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> 
        <div class="swiper-pagination"></div>-->
    </div>

    <!--Check form-->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">ĐẶT PHÒNG</h5>
            <form action="">
                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Ngày Nhận</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Ngày Trả</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
        
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight:500;">Người Lớn</label>
                        <select class="form-select">
                            <option selected>Chọn số lượng</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight:500;">Trẻ Em</label>
                        <select class="form-select">
                            <option selected>Chọn số lượng</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="col-lg-1 mb-lg-3 mt-2">
                        <button type="submit" class="btn text-while shadow-none custom-bg">
                            Đặt phòng
                        </button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
<!--Phòng-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Phòng</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">                
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
                <img src="images/p2.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Phòng Đơn</h5>
                        <h6  class="mb-4">300k VNĐ mỗi đêm</h6>
                        <div class="features mb-4">
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
                        <div class="facilities mb-4">
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
                        <div class="guests mb-4">
                            <h6 class="mb-1">khách</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                5 người lón
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                4 trẻ em
                            </span>
                           
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Xếp hạng</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                           <a href="book.php" class="btn btn-sm text-while custom-bg shadow-none">Đặt Phòng</a>
                           <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">                
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
                <img src="images/p2.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Phòng Đơn</h5>
                        <h6  class="mb-4">300k VNĐ mỗi đêm</h6>
                        <div class="features mb-4">
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
                        <div class="facilities mb-4">
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
                        <div class="guests mb-4">
                            <h6 class="mb-1">khách</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                5 người lón
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                4 trẻ em
                            </span>
                           
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Xếp hạng</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        
                        <div class="d-flex justify-content-evenly mb-2">
                           <a href="book.php" class="btn btn-sm text-while custom-bg shadow-none">Đặt Phòng</a>
                           <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">                
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
                <img src="images/p2.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Phòng Đơn</h5>
                        <h6  class="mb-4">300k VNĐ mỗi đêm</h6>
                        <div class="features mb-4">
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
                        <div class="facilities mb-4">
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
                        <div class="guests mb-4">
                            <h6 class="mb-1">khách</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                5 người lón
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                4 trẻ em
                            </span>
                           
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Xếp hạng</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                           <a href="book.php" class="btn btn-sm text-while custom-bg shadow-none">Đặt Phòng</a>
                           <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Nhiều Phòng hơn>>></a>
            </div>
        </div>
    </div>
<!--Tiện Nghi-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TIỆN NGHI</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center rounded shadow py-4 my-3">
                <img src="images/wifi.png" alt="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center rounded shadow py-4 my-3">
                <img src="images/wifi.png" alt="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center rounded shadow py-4 my-3">
                <img src="images/wifi.png" alt="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center rounded shadow py-4 my-3">
                <img src="images/wifi.png" alt="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Nhiều hơn>>></a>
            </div>
        </div>
    </div>
<!--Đánh Giá-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Nhân xét</h2>
    
    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
              
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/star.png" width="30px">
                        <h6 class="m-0 ms-2">Người Dùng Ngẫu Nhiên</h6>
                    </div>
                    <p>
                        Chơi
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">

                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/star.png" width="30px">
                        <h6 class="m-0 ms-2">Người Dùng 1</h6>
                    </div>
                    <p>
                        Chơi
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">

                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/star.png" width="30px">
                        <h6 class="m-0 ms-2">Người Dùng 2</h6>
                    </div>
                    <p>
                        Chơi
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">

                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/star.png" width="30px">
                        <h6 class="m-0 ms-2">Người Dùng 3</h6>
                    </div>
                    <p>
                        Chơi
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                        
                </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
         
    </div>
<!--Liên Hệ-->


        <?php
            $contact_q = "SELECT * FROM `lien_he` WHERE id = ?";
            $values = [1];
            $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
          
        ?>
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Liên Hệ</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" src="<?php echo $contact_r['iframe']?>" height="320px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Gọi chúng tôi</h5>
                    
                    <a href="Số Điện Thoại: <?php echo $contact_r['ph1']?>" class="d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i><?php echo $contact_r['ph1']?>
                    </a>
                    <br>
                    <?php
                        if($contact_r['ph2'] != ''){
                            echo <<<data
                                <a href="Số Điện Thoại: $contact_r[ph2] " class="d-inline-block mb-2 text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i>$contact_r[ph2]
                                </a>
                            data;
                        }
                    ?>
                  
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Theo dõi chúng tôi</h5>
                    <?php 
                        if($contact_r['tw']!=''){
                            echo<<<data
                                <a href="$contact_r[tw]" class="d-inline-block mb-3">
                                    <span class="badge bg-light text-dark fs-6 p-2">
                                        <i class="bi bi-twitter me-1"></i>
                                        Twitter
                                    </span>
                                </a>
                            data;
                        }
                    ?>
                  
                    <br>
                    <a href="<?php echo $contact_r['fb']?>" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook"></i>
                                Facebook
                        </span>
                    </a>
                    <br>
                    <a href="<?php echo $contact_r['insta']?>" class="d-inline-block ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram"></i>
                            Instagram
                        </span>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
    <?php
        require('inc/footer.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay:{
                deplay: 3500,
                disableOnInteraction: false

            },
        
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "2",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints:{
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }


            }
        });
    </script>
  
</body>
</html>