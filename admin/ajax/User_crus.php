<?php 
  require('../inc/db_config.php');
  require('../inc/essential.php');
  adminLogin();


  if(isset($_POST['add_image'])){
    $frm_data = filteration($_POST);

    $img_r = uploadImage($_FILES['picture'], USER_FOLDER);
  
    if($img_r == 'inv_img'){
      echo $img_r;
    }
  
    else if($img_r == 'inv_size'){
      echo $img_r;
    }
    else if($img_r == 'upd_failed'){
      echo $img_r;
    }
    else{
      $q = "INSERT INTO ";
      $values = [$img_r];
      $res = insert($q, $values, 's');
      echo $res;
    }
  }

  if(isset($_POST['get_member'])){
   $res = selectAll('team_details');

   while($row = mysqli_fetch_assoc($res)){
    $path = USER_IMG_PATH;
    echo <<<data
      <div class="col-md-2 mb-3">
        <div class="card bg-dark text-while">
          <img src="$path$row[images]" alt="" class="card-img">
          <div class="card-img-overlay text-end">
            <button class="btn btn-danger btn-sm shadow-none">
            <i class="bi bi-trash3-fill"></i> Xóa
            </button>
          </div>
          <p class="card-text text-center px-3 py-2">$row[name]</p>
        </div>
      </div>
      data;
   }

  }
  if(isset($_POST['rem_image'])){
    $frm_data = fileteration($_POST);
    $values = [$frm_data['rem_image']];

    $pre_q = "SELECT *FROM ";

    $res = select($q,$values,'i');
    $img = mysqli_fetch_assoc($res);

    if(deleteImage($img['image'],USER_FOLDER)){
      $q = "DELETE FROM ";
      $res = delete($q,$values,'i');
      echo $res;
    }
    else{
      echo 0;
    }

  }

?>



<!-- <script>
  // Tạo đối tượng WebSocket với URL của máy chủ WebSocket
const socket = new WebSocket('ws://localhost:3000/admin/ajax/setting_crus.php/websocket');

// Xử lý sự kiện khi mở kết nối WebSocket
socket.addEventListener('open', function (event) {
    console.log('Kết nối WebSocket đã được mở');
});

// Xử lý sự kiện khi nhận được tin nhắn từ máy chủ WebSocket
socket.addEventListener('message', function (event) {
    console.log('Đã nhận thông điệp từ máy chủ WebSocket:', event.data);
});

// Xử lý sự kiện khi đóng kết nối WebSocket
socket.addEventListener('close', function (event) {
    console.log('Kết nối WebSocket đã bị đóng');
});

// Xử lý lỗi khi kết nối WebSocket gặp vấn đề
socket.addEventListener('error', function (event) {
    console.error('Xảy ra lỗi kết nối WebSocket:', event);
});

</script> -->
