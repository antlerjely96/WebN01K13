<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form method="post" action="updateProcess.php">
        <?php
            //Kết nối DB
            include_once 'connect.php';
            //Lấy id
            $id = $_GET['id'];
            //Viết query để lấy dữ liệu
            $sql = "SELECT * FROM classroom WHERE id = '$id'";
            //Chạy query
            $result = mysqli_query($connect, $sql);
            //Đóng kết nối
            include_once 'close.php';
            foreach ($result as $each){
        ?>
            ID: <input type="text" name="id" value="<?php echo $each['id']?>" readonly><br>
            Name: <input type="text" name="name" value="<?php echo $each['name']?>"><br>
            Count: <input type="text" name="count" value="<?php echo $each['count']?>"><br>
        <?php
            }
        ?>
        <button>Update</button>
    </form>
</body>
</html>