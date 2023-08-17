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
    <link rel="stylesheet" href="css/style_1.css">
</head>

</body>
<?php require('inc/header.php');?>

<div class="container-fluid" id= "main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">




        <section class="rooms">
          <div class="container top">
            <div class="heading">
              <h1>KHÁM PHÁ</h1>
              <h2>Phòng</h2>
              <p>Kiểu cổ điện
              </p>
            </div>
            <?php
            $select = mysqli_query($conn, "SELECT * FROM phong");   
            ?>
            <div class="product-display">
            <table class="product-display-table">
              <thead>
              <tr>
                  <th>Ảnh</th>
                  <th>Tên Phòng</th>
                  <th>Giá</th>
                  <th>Mô TẢ</th>
                  <th>Hoạt động</th>
              </tr>
              </thead>
              <?php while($row = mysqli_fetch_assoc($select)){ ?>
              <tr>
                  <td><img src="../admin/view/uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                  <td><?php echo $row['TenPhong']; ?></td>
                  <td><?php echo $row['Gia']; ?> vnđ/1đêm</td>
                  <td><?php echo $row['MoTa'];?></td>
                  <td>
                    <a href="book.php?del=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-check"></i> Dat Phong</a>
                    <a href=""><i class=" fas fa-calse"></i>Phong da co nguoi dat</a>
                  </td>
              </tr>
            <?php } ?>
            </table>
        </div>

        </section>
        </div>
    </div>
</div>
  
  <script>
    $('.owl-carousel1').owlCarousel({
      loop: true,
      margin: 40,
      nav: true,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2,
          margin: 10,
        },
        1000: {
          items: 3
        }
      }
    })

    let preveiwContaine = document.querySelector('.products-preview');
    let previewBo = preveiwContaine.querySelectorAll('.preview');

    document.querySelectorAll('.products-container .product').forEach(product =>{
      product.onclick = () =>{
        preveiwContaine.style.display = 'flex';
        let name = product.getAttribute('data-name');
        previewBo.forEach(preview =>{
        let target = preview.getAttribute('data-target');
        if(name == target){
          preview.classList.add('active');
          }
        });
      };
    });

    previewBo.forEach(close =>{
      close.querySelector('.fa-times').onclick = () =>{
      close.classList.remove('active');
      preveiwContaine.style.display = 'none';
      };
    });
  </script>