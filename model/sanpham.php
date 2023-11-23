

<?php 

function insert_sanpham($name,$price,$image_sp,$description,$author,$quantity,$luotmua,$iddm){
    $sql = "INSERT INTO books(name,price,image,description,author,quantity,luotmua,iddm) VALUES ('$name','$price','$image_sp','$description','$author','$quantity','$luotmua','$iddm')";
           pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="DELETE FROM books where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham(){
    $sql="select * from books order by id desc";
     $listsanpham=pdo_query($sql);
     return $listsanpham;
}
function loadall_sanpham_home(){
    $sql="select * from books";
    $listsanpham=pdo_query($sql);
    return $listsanpham;

}
function loadone_sanpham($id){
    $sql="select * from books where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_sanpham($id,$name, $price, $image, $description, $author, $quantity, $luotmua, $iddm){
    if ($image != "") {
        $sql = "update books set iddm = '".$iddm."', name = '".$name."',price = '".$price."', image= '".$image."',description= '".$description."', author = '".$author."',quantity='".$quantity."',luotmua = '".$luotmua."' where id = ".$id;
    } else {
        $sql = "update books set iddm = '".$iddm."', name = '".$name."',price = '".$price."',description= '".$description."', author = '".$author."',quantity='".$quantity."',luotmua = '".$luotmua."' where id = ".$id;
    }

    pdo_execute($sql);
}
?>