<?php
require('inc/essential.php');
require('inc/db_config.php');

session_start();
if (isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true) {
    redirect('dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang CRT_ADMIN</title>
    <?php
    require('inc/link.php');
    ?>
    <style>
        .login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>

<body class="bg-light">

    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form action="some" method="POST">
            <h4 class="bg-dark text-white py-3">ADMIN ĐĂNG NHẬP</h4>
            <div class="p-4">
                <div class="mb-3">

                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Tên Đăng Nhập">
                </div>
                <div class="mb-4">
                    <input name="admin_passwd" required type="password" class="form-control shadow-none text-center" placeholder="Mật Khẩu">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">Đăng Nhập</button>
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['login'])) {
        $frm_data = fileteration($_POST);

        $sql = "SELECT * FROM admin_tk WHERE admin_ten =? AND admin_pass =?";
        $values = [$frm_data['admin_name'], $frm_data['admin_passwd']];

        $res = select($sql, $values, "ss");
        if ($res->num_rows == 1) {
            $row = mysqli_fetch_assoc($res);
            $_SESSION['adminLogin'] = true;
            $_SESSION['adminId'] = $row['ma_admin'];
            redirect('dashboard.php');
        } else {
            alert('Lỗi', 'Đăng nhập không thành công!');
        }
    }
    ?>

    <?php require('inc/scripts.php'); ?>
</body>

</html>