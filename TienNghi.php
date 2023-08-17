<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách Sạn RT - Tiện Nghi</title>
    <?php
        require('inc/link.php');
    ?>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
   
    <style>
        .pop:hover{
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;

        }
    </style>
</head>
<body class="bg-light">
    <?php 
        require('inc/header.php');

    ?>
    <!--Nen-->
<!--Tiện Nghi-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Tiện Nghi</h2>
   
        <p class="text-center mt-3">
            nơi lưu trú tạm thời cho khách du lịch hoặc công tác, do vậy các tiện nghi 
            trong khách sạn đóng vai trò <br>quan trọng trong việc đảm bảo một kỳ nghỉ hoàn
             hảo cho khách hàng.
        </p>


    <div class="container">
        <div class="row"> 
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/wifi.png" width="40px">
                    </div>
                    <h5>
                        Wifi
                    </h5>
                    <p>
                        Wifi miễn phí, tốc độ cao.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/wifi.png" width="40px">
                    </div>
                    <h5>
                        Wifi
                    </h5>
                    <p>
                        Wifi miễn phí, tốc độ cao.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/wifi.png" width="40px">
                    </div>
                    <h5>
                        Wifi
                    </h5>
                    <p>
                        Wifi miễn phí, tốc độ cao.
                    </p>
                </div>
            </div>
           
    <?php
        require('inc/footer.php');
    ?>
  
    
</body>
</html>