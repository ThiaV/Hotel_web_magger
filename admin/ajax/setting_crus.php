<?php 
  require('../inc/db_config.php');
  require('../inc/essential.php');
  adminLogin();

  if(isset($_POST['get_general'])){
    $q = "SELECT * FROM cai_dat WHERE id = ?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);

    $json_data = json_encode($data);
    echo $json_data;

  }
  if(isset($_POST['upd_general'])){
   $frm_data = fileteration($_POST);

   $q = "UPDATE `cai_dat` SET `site_title`= ?,`site_about`= ? WHERE id = ?";
   $values = [$frm_data['site_title'], $frm_data['site_about'],1];
   $res = update($q, $values, 'ssi');
   echo $res;
  }

  if(isset($_POST['upd_shutdown'])){
    $frm_data = ($_POST['upd_shutdown'] == 0) ? 1 : 0;

    $q = "UPDATE `cai_dat` SET `shutdown`= ? WHERE id = ?";
    $values = [$frm_data,1];
    $res = update($q, $values, 'ii');
    echo $res;
  }


  if(isset($_POST['get_contacts'])){
    $q = "SELECT * FROM contacts WHERE id =?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);

    $json_data = json_encode($data);
    echo $json_data;

  }

  if(isset($_POST['add_member'])){
    $frm_data = fileteration($_POST);

    $img_r = uploadImage($_FILES['picture'], ABOUT_FOLDER);
  
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
      $q = "INSERT INTO `nhan_vien`(`name`, `Anh`) VALUES (?,?)";
      $values = [$frm_data['name'],$img_r];
      $res = insert($q, $values, 'ss');
      echo $res;
    }
  }


?>