<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lits</title>
</head>
<body>
    <?php
        //Kết nối với DB
        $connect = mysqli_connect('localhost', 'root', '', 'n01k13');
        //Query để lấy dữ liệu từ DB về
        $sql = "SELECT * FROM classroom";
        //Chạy query để lấy dữ liệu
        $result = mysqli_query($connect, $sql);
    ?>
    <a href="create.php">Add a class</a>
    <table border="1px" cellpadding="0" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Count</th>
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
                </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</body>
</html>