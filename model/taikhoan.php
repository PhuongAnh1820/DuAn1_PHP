<?php 
function insert_taikhoan($username,$password,$email,$phone){
    $sql = "INSERT INTO users (username,password,email,phone) VALUES ('$username','$password','$email','$phone')";
           pdo_execute($sql);
}
function checkuser($username,$password){
    $sql="select * from users where username='".$username."' AND  password='".$password."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
?>