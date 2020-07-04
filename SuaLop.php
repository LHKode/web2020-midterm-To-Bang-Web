<?php include_once "DataProvider.php" ?>
<?php $Malop=$_REQUEST['MaLop'] ?>
<?php if(isset($_REQUEST['SuaLop'])){
    $TenLop=$_REQUEST['TenLop'];
    $MaKhoa=$_REQUEST['MaKhoa'];
    $qrnhap="UPDATE lop SET TenLop='$TenLop', MaKhoa='$MaKhoa' WHERE MaLop='$Malop'";
    DataProvider::ExecuteQuery($qrnhap);
    header('location:lop.php');
} ?>
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
    <form action="" method="post">
        <table class="table table-bordered">
            <?php
                $ThongTinLop=DataProvider::ExecuteQuery("SELECT * FROM lop WHERE MaLop='$Malop'");
                $ThongTinLop_row=mysqli_fetch_array($ThongTinLop);
            ?>
            <tr>
                <td>Tên Lớp:</td>
                <td><input type="text" class="form-control" name="TenLop" value="<?php echo $ThongTinLop_row['TenLop'] ?>"></td>
            </tr>
            <tr>
                <td>Mã Khoa:</td>
                <td>
                <select name="Khoa">
                    <?php $KhoaSoHuu=DataProvider::ExecuteQuery("SELECT * FROM khoa k,lop l WHERE k.MaKhoa=l.MaKhoa AND MaLop='$Malop'");
                            $KhoaSoHuu_row=mysqli_fetch_array($KhoaSoHuu);
                    ?>
                <?php $dsKhoa=DataProvider::ExecuteQuery('SELECT * FROM khoa');
                while($dsKhoa_row=mysqli_fetch_array($dsKhoa)){
                    
                ?>
                    <option 
                    value="<?php echo $dsKhoa_row['MaKhoa'] ?>"
                    <?php if($dsKhoa_row['MaKhoa']==$KhoaSoHuu_row['MaKhoa']) echo 'selected' ?> 
                    >
                    <?php echo $dsKhoa_row['TenKhoa'] ?></option>
                <?php 
                }?>
                </select></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name='SuaLop' class="btn btn-primary" value="Sửa"></td>
            </tr>
        </table>
    </form>
</body>
</html>