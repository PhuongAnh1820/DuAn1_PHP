
<?php

include '../connect.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
include 'header.php';
include 'sidebar.php';
include 'home.php';
 
// Kiem tra
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        // Danh muc
        case 'adddm':
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $name=$_POST['name'];
                insert_danhmuc($name);
                $thongbao="Thêm thành công ! ";
            }
         
            include 'danhmuc/add.php';
            break;
        case 'listdanhmuc':
              $listdanhmuc=loadall_danhmuc();

              include 'danhmuc/list.php';
               break;
        case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id'])>0){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc=loadall_danhmuc();
            include 'danhmuc/list.php';
            break;

        case 'suadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){

              $dm=loadone_danhmuc($_GET['id']);
            }
            include 'danhmuc/update.php';
            break;
        case 'updatedm':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
                $name=$_POST['name'];
                $id=$_POST['id'];
                update_danhmuc($id,$name);
                $thongbao="Cật nhật thành công";

            }
            
            $listdanhmuc=loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
        // San pham
        case 'addsanpham':
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $iddm=$_POST['iddm'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $description=$_POST['description_sp'];
                $author=$_POST['author'];
                $quantity=$_POST['quantity'];

                $image_sp=$_FILES['image']['name'];
                $target_dir="../upload/";
                $target_file=$target_dir . basename($_FILES['image']['name']);
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
                
            }else{
            
            }
            
            insert_sanpham($name,$price,$image,$description,$author,$quantity,$iddm);
               $thongbao="Thêm thành công";
                
                
               }
            $listdanhmuc=loadall_danhmuc() ;
            include 'sanpham/add.php';
            break;

        case 'listsp':
            $listsanpham=loadall_sanpham();
            include 'sanpham/list.php';
            break;

        case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                 delete_sanpham($_GET['id']);
                }
              $listsanpham=loadall_sanpham('',0);
               
                    include 'sanpham/list.php';
                break;
     
            
    }
}

include 'footer.php';
?>