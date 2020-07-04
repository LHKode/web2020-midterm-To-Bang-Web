<?php include_once "DataProvider.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e9a3bfa470.js" crossorigin="anonymous"></script>
</head>

<body>

    <table class="table table-bordered">
        <?php $datalop=DataProvider::ExecuteQuery('SELECT * FROM lop');?>
        <th>Mã lớp</th>
        <th>Tên lớp</th>
        <th>Mã khoa</th>
        <th><a href="ThemLop.php">Thêm</a></th>
        <tbody>
            <?php
                while($datalop_row=mysqli_fetch_array($datalop)){

            ?>
            <tr>
                <td><?php echo $datalop_row['MaLop'] ?></td>
                <td><?php echo $datalop_row['TenLop'] ?></td>
                <td><?php echo $datalop_row['MaKhoa'] ?></td>
                <td><a href="SuaLop.php?MaLop=<?php echo $datalop_row['MaLop']?>">Sửa</a>-
                    <a href="XoaLop.php?MaLop=<?php echo $datalop_row['MaLop']?>">Xóa</a>
                </td>
            </tr>
                    <?php
                }   
                    ?>
        </tbody>
    </table>
</body>

</html>