<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>
<body>
    <?php
        //Kết nối với DB
        include_once 'connect.php';
        //Query để lấy dữ liệu từ DB về
        $sql = "SELECT * FROM classroom";
        //Chạy query để lấy dữ liệu
        $result = mysqli_query($connect, $sql);
        //Đóng kết nối
        include_once 'close.php';
    ?>
    <a href="create.php">Add a class</a>
    <table border="1px" cellpadding="0" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Count</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($result as $value){
        ?>
                <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['count']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $value['id']; ?>">Update</a>
                    </td>
                    <td>
                        <a href="delete.php?id=<?php echo $value['id']; ?>">Delete</a>
                    </td>
                </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</body>
</html>