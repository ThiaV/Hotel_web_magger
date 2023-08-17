<?php

    $hname = 'localhost:3307';
    $uname = 'root';
    $pass = '';
    $db = 'hotel_crt';


    $conn =  mysqli_connect($hname, $uname, $pass, $db); 

    // try {
    // $conn = new PDO("mysql:host=$servername;dbname=qlkhachsan", $username, $password);
    //     // set the PDO error mode to exception
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // #echo "Connected successfully";
    // } catch(PDOException $e) {
    // #echo "Connection failed: " . $e->getMessage();
    // }
  
    
    //Hàm lọc 
    function fileteration($data){
        foreach($data as $key => $values){
            //trim dùng để loại khoảng trống or ký được xác định
            // trim()
            // //`stripslashes()`  sử dụng để loại bỏ các dấu backslashes
            // stripslashes()
            // // htmlspecialchars() sử dụng để chuyển đổi các ký tự đặc biệt trong chuỗi sang các entity HTML tương ứng
            // //tránh xảy ra các lỗ hổng bảo mật liên quan đến mã độc JavaScript hoặc SQL injection.
            // htmlspecialchars()
            // //Hàm `strip_tags()` trong PHP được sử dụng để loại bỏ các thẻ HTML và PHP từ một chuỗi.
            // // để ngăn chặn các cuộc tấn công Cross-site scripting (XSS).
            // strip_tags()


            $data[$key] = trim($values);
            $data[$key] = stripslashes($values);
            $data[$key] = htmlspecialchars($values);
            $data[$key] = strip_tags($values);



        }
        return $data;
    }
    function selectAll($table){
        $conn = $GLOBALS['conn'];
        $res = mysqli_query($conn, "SELECT * FROM $table");
        return $res;
    }

    function select($sql, $values, $datatypes){
        $conn = $GLOBALS['conn'];
        if($stmt = mysqli_prepare($conn, $sql))
        {
            mysqli_stmt_bind_param($stmt, $datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
               $res  = mysqli_stmt_get_result($stmt);
               mysqli_stmt_close($stmt);
               return $res;
            }
            else{ 
                mysqli_stmt_close($stmt);
                die('không thể thực hiện');
            }
           
        }
        else{
            die(''. mysqli_error($conn));
        }
    }

    function update($sql, $values, $datatypes){
        $conn = $GLOBALS['conn'];
        if($stmt = mysqli_prepare($conn, $sql))
        {
            mysqli_stmt_bind_param($stmt, $datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
               $res  = mysqli_stmt_affected_rows($stmt);
               mysqli_stmt_close($stmt);
               return $res;
            }
            else{ 
                mysqli_stmt_close($stmt);
                die("Query không thể thực hiện");
            }
           
        }
        else{
            die("Query không thể chuẩn bị". mysqli_error($conn));
        }
    }

    function insert($sql, $values, $datatypes){
        $conn = $GLOBALS['conn'];
        if($stmt = mysqli_prepare($conn, $sql))
        {
            mysqli_stmt_bind_param($stmt, $datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
               $res  = mysqli_stmt_affected_rows($stmt);
               mysqli_stmt_close($stmt);
               return $res;
            }
            else{ 
                mysqli_stmt_close($stmt);
                die("Query không thể thực hiện");
            }
           
        }
        else{
            die("Query không thể chuẩn bị". mysqli_error($conn));
        }
    }

    
    
?>


