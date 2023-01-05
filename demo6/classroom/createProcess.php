<?php
    //Kết nối với DB
    $connect = mysqli_connect('localhost', 'root', '', 'n01k13');
    //Lấy dữ liệu từ form
    $name = $_POST['name'];
    $count = $_POST['count'];
    //Viết query để lưu dữ liệu
    $sql = "INSERT INTO classroom(name, count) VALUES ('$name', '$count')";
    //Chạy query
    mysqli_query($connect, $sql);
    //Quay lại trang danh sach (index)
    header('Location:index.php');
?>