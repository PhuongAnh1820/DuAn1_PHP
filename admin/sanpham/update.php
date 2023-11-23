<?php 
if(is_array($sanpham)){
    extract($sanpham);

}
$hinhpath="../upload/".$image;
if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."' height='80'>";
}else{
    $hinh="Khong co hinh";
}
?>

<div>
<h3 style="text-align: center;margin-top: 50px;">CẬT NHẬT SẢN PHẨM</h3>
</div>

<div class="add" style="margin-left: 50px; margin-top: 50px;">
<form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
<p style="font-size: 18px;">Thể loại sách</p>
    <select name="iddm">
    <option value="0" selected>Tat ca</option>
    <?php 
             foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                if($iddm==$id) $s="selected"; else $s="";
                 echo '<option value="' . $id. '" '.$s.'>' . $name. '</option>';

                
            }
            ?>
       </select>
   
     <br><br>
<p style="font-size: 18px;">Tên Sách</p>
   <input type="text" name="name" value="<?=$name?>">
     <br><br>

     <p style="font-size: 18px;">Giá</p>
   <input type="number" name="price" value="<?=$price?>">
     <br><br>

     <p style="font-size: 18px;">Ảnh</p>
   <input type="file" name="image"><?=$hinh?>
     <br><br>

     <p style="font-size: 18px;">Đặc điểm</p>
   <input type="text" name="description" value="<?=$description?>">
     <br><br>

     <p style="font-size: 18px;">Tác giả</p>
   <input type="text" name="author" value="<?=$author?>">
     <br><br>

     <p style="font-size: 18px;">Số Lượng Tồn</p>
   <input type="number" name="quantity"  value="<?=$quantity?>">
     <br><br>

     <p style="font-size: 18px;">Lượt mua</p>
   <input type="number" name="luotmua" value="<?=$luotmua?>">
     <br><br>
     <input type="hidden" name="id" value="<?=$id?>">
   <input type="submit" name="capnhat" value="CAP NHAT">    
   <input type="reset" value="NHẬP LẠI">
   <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
</form>
<br>
<?php 
 if(isset($thongbao)&&($thongbao!="")){
    echo '<div style="color: blue; font-weight: bold;">' . $thongbao . '</div>';
 }
    ?>
</div>
<style>
input[type="button"] {
    width: 150px;
    background-color: green;
    color: white;
}
input[type="text"] {
    width: 700px;
    padding: 10px; /* Kích thước đệm bên trong input */
    border: 1px solid #ccc; /* Viền input */
    border-radius: 5px; /* Bo góc của input */
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); /* Đổ bóng */
    outline: none; /* Loại bỏ đường viền khi focus */
}

/* Một số hiệu ứng khi focus */
input[type="text"]:focus {
    border-color: #007BFF; /* Màu sắc viền khi focus */
    box-shadow: 2px 2px 10px rgba(0, 123, 255, 0.3); /* Đổ bóng khi focus */
}
/* Style cho nút "Thêm mới" */
input[type="submit"] {
    padding: 10px 20px;
    background-color: #28a745; /* Màu nền */
    color: white; /* Màu chữ */
    border: none; /* Loại bỏ viền */
    border-radius: 5px; /* Bo góc */
    cursor: pointer;
}

/* Hover effect cho nút "Thêm mới" */
input[type="submit"]:hover {
    background-color: #218838; /* Màu nền khi hover */
}

/* Style cho nút "Nhập lại" */
input[type="reset"] {
    padding: 10px 20px;
    background-color: #dc3545;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 10px; /* Cách lề với nút trước đó */
}

/* Hover effect cho nút "Nhập lại" */
input[type="reset"]:hover {
    background-color: #c82333;
}

/* Style cho nút "Danh sách" */
a[href="index.php?act=listdanhmuc"] input[type="button"] {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none; /* Loại bỏ gạch chân khi nút là một liên kết */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 10px; /* Cách lề với nút trước đó */
}

/* Hover effect cho nút "Danh sách" */
a[href="index.php?act=listdanhmuc"] input[type="button"]:hover {
    background-color: #0056b3;
}
</style>