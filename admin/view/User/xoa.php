<?php
    require '../../inc/db_config.php';

?>
<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
?>
<?php
    $sql = mysqli_query($conn,"DELETE FROM user_tk WHERE id = ?");
    // $query = mysqli_query($conn,$sql);
    header("location: danhsach.php");
?>