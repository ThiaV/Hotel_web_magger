<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách Sạn CRT - Liên Hệ</title>
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
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Liên Hệ</h2>
   
        <p class="text-center mt-3">
        Bạn có thể gửi email hoặc gọi điện thoại trực tiếp đến khách sạn để liên hệ và đặt phòng hoặc <br>
        hỏi thông tin thêm về dịch vụ, tiện nghi của khách sạn.
        </p>

    <?php
        $contact_q = "SELECT *FROM lien_he WHERE id=?";
        $values = [1];
        $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
    ?>
    <div class="container">
        <div class="row"> 
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" src="<?php echo $contact_r['iframe']?>" height="320px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Địa chỉ</h5>
                    <a href="<?php echo $contact_r['gmap']?>" target="_blan" class="d-inline-block text-decoration-none text-dark mb-2">
                       
                        <i class="bi bi-geo-alt-fill"></i> Cần Thơ<br><?php echo $contact_r['address']?>
                    </a>
                    <h5 class="mt-4">Gọi chúng tôi</h5>
                    <a href="Số Điện Thoại: <?php echo $contact_r['ph1']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> <?php echo $contact_r['ph1']?>
                    </a>
                    <br>
                    <a href="Số Điện Thoại: <?php echo $contact_r['ph2']?>" class="d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> <?php echo $contact_r['ph2']?>
                    </a>
                    <br>
    
                    <h5 class="mt-4">Email</h5>
                    <a href="<?php echo $contact_r['email']?>"  class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i><?php echo $contact_r['email']?>
                    </a>
        
                    <h5 class="mt-4">Theo dõi chúng tôi</h5>
                    <a href="" class="d-inline-block  text-dark fs-5 me-2">
                       
                        <i class="bi bi-twitter me-1"></i>

                    </a>
                    
                    <a href="" class="d-inline-block  text-dark fs-5 me-2">
                        
                            <i class="bi bi-facebook"></i>
                       
                    </a>
                
                    <a href="" class="d-inline-block text-dark fs-5">
                            <i class="bi bi-instagram"></i>
                          
                    </a>
                        
                    
                </div>

            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 ">
                  <form method="POST">
                    <h5>Gửi Tin nhắn</h5>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Tên</label>
                        <input name="name" required type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Email</label>
                        <input  name="email" required type="email" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Vấn đề</label>
                        <input  name="van_de" required type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Nhắn tin</label>
                        <textarea name="tin_nhan" required class="form-control shadow-none"  rows="5" style="resize: none;"></textarea>

                    </div>
                    <button type="submit"  name="seen" class="btn text-white custom-bg mt-3">Gửi</button>

                  </form>
                </div>
            </div>
          
    <?php
        if(isset($_POST['seen']))
        {
            $frm_data = fileteration($_POST);
            
            $q = "INSERT INTO `tn_user`(`name`, `email`, `van_de`, `tin_nhan`) VALUES (?,?,?,?)";

            $values = [$frm_data['name'],$frm_data['email'],$frm_data['van_de'],$frm_data['tin_nhan']];

            $res = insert($q,$values,'ii');
            if($res==1){
                alert('Thành công','Tin nhắn đã được gửi!');
            }
            else{
                alert('Thất bại', 'Tin nhắn không gửi được!');
            }
        }
    ?>       
    
            

    <?php
        require('inc/footer.php');
    ?>
  
    
</body>
</html>