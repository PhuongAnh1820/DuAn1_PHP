<link rel="stylesheet" href="./css/quantri.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div>
    <h3 style="text-align: center;font-weight: bold;">DANH SÁCH THỂ LOẠI
</div>
<div class="tb">
<table border="1" cellspacing=0>
    <tr style="background-color:#CFCFCF;text-align: center;font-size: 17px;font-weight: bold; margin-left:30px;">
        <td style="width: 100px;height: 60px;font-size: 17px;font-weight: bold;">Mã Thể Loại</td>
        <td style="width: 700px;">Tên Thể Loại</td>
        <td style="width:200px;">Sửa</td>
        <td style="width:200px;">Xóa</td>

    </tr>
</div>
    <?php
   if(isset($listdanhmuc)&& is_array($listdanhmuc)){
    foreach ($listdanhmuc as $danhmuc){
        extract($danhmuc);
        $suadm="index.php?act=suadm&id=".$id;
        $xoadm="index.php?act=xoadm&id=".$id;
        echo '  <tr>
        <td style="width: 100px;height: 60px;font-size: 17px;font-weight: bold;text-align:center;">' .$id. '</td>
        <td style="width: 700px;font-size:17px;color: black; text-align:center;">' .$name. '</td>
        <td style="text-align:center;height:50px"><a href="' . $suadm . '"><input type="button" value="Sửa" style="width: 70px; height: 30px; background-color: green; color: white;"></a></td>
            <td style="text-align:center;height:50px"><a href="' . $xoadm . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\');"><input type="button" value="Xóa"style="width: 70px; height: 30px; background-color: green; color: white;"></a></td>
                 </tr>';
    }
   }else{
    echo "Không có dữ liệu truyền vào ";
   }
    ?>
</table>
<br><br>
<a href="index.php?act=adddm"><input type="button" name="themmoi" value="THÊM MỚI"></a>

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