<?php
    //Kết nối DB
    include_once 'connect.php';
    //Lấy dữ liệu cần update
    $id = $_POST['id'];
    $name = $_POST['name'];
    $count = $_POST['count'];
    //Viết query
    $sql = "UPDATE classroom SET name = '$name', count = '$count' WHERE id = '$id'";
    //Chạy query
    mysqli_query($connect, $sql);
    //Đóng kết nối
    include_once 'close.php';
    //Quay về trang danh sách
    header('Location:index.php');
?>