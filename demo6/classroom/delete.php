<?php
    //Kết nối DB
    include_once 'connect.php';
    //Lấy id
    $id = $_GET['id'];
    //Viết query
    $sql = "DELETE FROM classroom WHERE id = '$id'";
    //Chạy query
    mysqli_query($connect, $sql);
    //Đóng kết nối
    include_once 'close.php';
    //Quay về trang danh sách
    header('Location:index.php');
?>