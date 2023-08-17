<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách Sạn RT - Tin Tức</title>
    <?php
        require('inc/link.php');
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <style>
        .box{
            border-top-color: var(--teal) !important;
        }
    </style>
</head>
<body class="bg-light">
    <?php 
        require('inc/header.php');

    ?>
<!--Tiện Nghi-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Tin Tức</h2>
    <p class="text-center">
            Khách sạn phù hợp để đón tiếp những khách hàng có ngân sách hạn chế <br>hoặc
            đang tìm kiếm một nơi nghỉ ngơi giản dị, 
            dễ dàng và tiện lợi.
    </p>
    
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3"> Nhà Đầu Tư</h3>
                <p>
                    xây dựng các khách sạn để có lợi nhuận về mặt tài chính.
                 <br>Nhà đầu tư khách sạn nghiên cứu thị trường để tìm hiểu nhu cầu 
                 <br>và điều kiện kinh tế trong khu vực và đưa ra quyết định đầu tư cho các dự án khách sạn.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/NhanVien/Quanly.png" class="w-100">

            </div>
        </div>
    </div>

   
    <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/SuKien/hotel.png" width="70px">
                        <h4 class="mt-3">50+ Phòng </h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/SuKien/khachhang.png" width="90px">
                        <h4 class="mt-3">200+ khách hàng</h4>
                    </div>
                </div>
        
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/SuKien/danhgia.png" width="90px">
                        <h4 class="mt-3">150+ đánh giá</h4>
                    </div>
                </div>
        
     
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/NhanVien/nhanvien.png" width="70px">
                        <h4 class="mt-3">20+ nhân viên </h4>
                    </div>
                </div>
            </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">ĐỘI QUẢN LÝ</h3>
    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">

            <?php
                $about_r = selectAll('nhan_vien');
                $path = ABOUT_IMG_PATH;

                while($row = mysqli_fetch_assoc($about_r)){
                    echo<<<data
                        <div class="swiper-slide bg-while text-center overflow-hidden rounded">
                            <img src="$path$row[Anh]"  class="w-100">
                            <h5 class="mt-2">$row[name]</h5>
                        </div>
                    data;
                }
            ?>


            <div class="swiper-slide bg-while text-center overflow-hidden rounded">
                    <img src="images/NhanVien/nvv/qu1.png"  class="w-100">
                    <h5 class="mt-2">Quản lý Tài Chính</h5>
                </div>
                <div class="swiper-slide bg-while text-center overflow-hidden rounded">
                    <img src="images/NhanVien/nvv/qu2.png"  class="w-100">
                    <h5 class="mt-2">Quản lý Nhân Sự</h5>
                </div>
                <div class="swiper-slide bg-while text-center overflow-hidden rounded">
                    <img src="images/NhanVien/nvv/qu3.png"  class="w-100">
                    <h5 class="mt-2">Quản lý Truyền Thông</h5>
                </div>
                <div class="swiper-slide bg-while text-center overflow-hidden rounded">
                    <img src="images/NhanVien/nvv/Quanl3.png"  class="w-100">
                    <h5 class="mt-2">Quản lý Dịch Vụ</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <?php require('inc/footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
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