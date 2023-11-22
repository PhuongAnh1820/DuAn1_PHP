

<?php 

function insert_sanpham($name,$price,$image_sp,$description,$author,$quanity,$luotmua,$iddm){
    $sql = "INSERT INTO books(name,price,image,description,author,quanity,luotmua,iddm) VALUES ('$name','$price','$image_sp','$description','$author','$quanity','$luotmua','$iddm')";
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
function loadone_sanpham($id){
    $sql="select * from books where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
?>