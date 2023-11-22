<?php
session_start();
include 'connect.php';
include 'view/header.php';
include 'view/banner.php';
include 'model/danhmuc.php';
include 'model/taikhoan.php';

$listdanhmuc = loadall_danhmuc();
if (isset($_GET['act']) && $_GET['act'] != 0) {
    $act = $_GET['act'];
    switch ($act) {

        case 'dangky':
            if (isset($_POST['dangky'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $repeatPassword = $_POST['repeat-password'];

                if ($password !== $repeatPassword) {
                    $thongbao = "Mật khẩu không khớp. Vui lòng nhập lại.";
                } else {
                    insert_taikhoan($username, $password, $email, $phone);
                    $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập";
                }
            }
            include 'view/taikhoan/dangki.php';
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $checkuser = checkuser($username, $password);
                if (is_array($checkuser)) {
                    $_SESSION['username'] = $checkuser;
                    header('Location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng nhập lại hoặc đăng ký";
                }
            }
            include "view/taikhoan/dangnhap.php";
            break;
        case 'thoat':
            session_unset();
            header('Location:index.php');
            include 'index.php';
        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}

include 'view/footer.php';
