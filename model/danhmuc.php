<?php
function insert_danhmuc($name){
    $sql="INSERT INTO categories(name)VALUES ('$name')";
    pdo_execute($sql);
}
function loadall_danhmuc() {
    $sql = "SELECT * FROM categories ORDER BY id DESC";
    echo $sql;
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function delete_danhmuc($id){
    $sql="DELETE FROM categories where id=".$_GET['id'];
    pdo_execute($sql);
}
function loadone_danhmuc($id){
    $sql="select * from categories where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$name){
    $sql = "update categories set name='".$name."' where id=".$id;
    pdo_execute($sql);
}

?>