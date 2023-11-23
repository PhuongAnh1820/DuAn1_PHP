<?php
session_start();
include 'connect.php';
include 'view/header.php';

include 'model/danhmuc.php';
include 'model/sanpham.php';
include 'model/taikhoan.php';
include 'global.php';

$dsdm = loadall_danhmuc();
$spnew = loadall_sanpham_home();
if (isset($_GET['act']) && $_GET['act'] != 0) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            include 'view/sanpham.php';
            break;
        case 'sanphamct':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $onesp=loadone_sanpham($id);
                include "view/sanphamct.php";
            }else{
                include "view/home.php";
            }
         
            break;
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
    include 'view/banner.php';
    include 'view/home.php';
}

include 'view/footer.php';
?>