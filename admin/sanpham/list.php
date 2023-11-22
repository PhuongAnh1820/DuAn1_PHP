<link rel="stylesheet" href="./css/quantri.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div>
    <h3 style="text-align: center;font-weight: bold;">DANH SÁCH THỂ LOẠI
</div>
<div class="tb">
<table border="1" cellspacing=0>
    <tr style="background-color:#CFCFCF;text-align: center;font-size: 17px;font-weight: bold; margin-left:30px;">
        <td style="width: 300px; height:60px;">Tên sách</td>
        <td style="width:100px;">Giá</td>
        <td style="width:200px;">Ảnh sách</td>
        <td style="width:500px;">Đặc điểm</td>
        <td style="width:200px;">Tác giả</td>
        <td style="width:200px;">Số lượng tồn </td>
        <td style="width:50px;">Sửa</td>
        <td style="width:50px;">Xóa</td>

    </tr>
</div>
<?php
   
    foreach ($listsanpham as $sanpham){
        extract($sanpham);
        $suasp="index.php?act=suasp&id=".$id;
        $xoasp="index.php?act=xoasp&id=".$id;
        $hinhpath="../upload/".$image;
        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' height='80'>";
        }else{
            $hinh="Khong co hinh";
        }
        echo '  <tr>
        <td style="width: 300px; height:60px;">'.$name.'</td>
        <td style="width:100px;">'.$price.'</td>
        <td style="width:200px;">'.$hinh.'</td>
        <td style="width:500px;">'.$description.'</td>
        <td style="width:200px;">'.$author.'</td>
        <td style="width:200px;">'.$quantity.'</td>  
              <td style="text-align:center;height:50px"><a href="' . $suasp . '"><input type="button" value="Sửa" style="width: 70px; height: 30px; background-color: green; color: white;"></a></td>
            <td style="text-align:center;height:50px"><a href="' . $xoasp . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\');"><input type="button" value="Xóa"style="width: 70px; height: 30px; background-color: green; color: white;"></a></td>
                 </tr>';
    }
   
   ?>
   
</table>
<br><br>
<a href="index.php?act=addsanpham"><input type="button" name="themmoi" value="THÊM MỚI"></a>

<style>
    .tb{
        margin-left: 50px;
        margin-top:30px;
    }

    input[type="button"] {
 height: 40px;
    width: 150px;
    background-color: green;
    color: white;
}
</style>