<?php

    define('SITE_URL','');
    define('ABOUT_IMG_PATH',SITE_URL.'images/about/');
    define('USER_IMG_PATH',SITE_URL.'images/user/');


    define('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/Hotel/images/');
    define('ABOUT_FOLDER','images/about/');
    define('USER_FOLDER','user/');


    function adminLogin(){
        session_start();
        if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
            echo "
                <script>
                    window.location.href = 'index.php';
                </script>
            ";
            exit;
        }

    }


    function redirect($url){
        echo "
            <script>
                window.location.href = '$url';
            </script>
        ";
        exit;
    }


    function alert($type, $msg){
        $bs_class = ($type == "Thành công") ? "alert-success" : "alert-danger";
        
        echo <<<alert
        <div class="alert $bs_class alert-warning alert-dismissible fade show custom-alert" role="alert">
            <strong class = "me-3">$msg</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        alert;
        exit;
    }

    function uploadImage($image, $folder){
        $valid_mime = ['image/jpeg','image/png','image/webp'];
        $img_mime = $image['type'];

        if(!in_array($img_mime, $valid_mime)){
            return 'inv_img';
        }
        else if(($image['size']/(1024*1024))>2){
            return 'inv_size';
        }
        else{
            $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
            $rname = 'IMG_'.random_int(11111,99999)."$ext";

            $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;

           if(move_uploaded_file($image['tmp_name'],$img_path)){
            return $rname;
           }
           else{
            return 'upd_failed';
           }
        }
    }
?>