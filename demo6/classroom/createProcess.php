<?php
    //Kết nối với DB
    include_once 'connect.php';
    //Lấy dữ liệu từ form
    $name = $_POST['name'];
    $count = $_POST['count'];
    //Viết query để lưu dữ liệu
    $sql = "INSERT INTO classroom(name, count) VALUES ('$name', '$count')";
    //Chạy query
    mysqli_query($connect, $sql);
    //Đóng kết nối
    include_once 'close.php';
    //Quay lại trang danh sach (index)
    header('Location:index.php');
?>