<html>
<?php
include_once('DataProvider.php');
$makhoa=$_GET['MaKhoa'];
?>
<?php
if(isset($_REQUEST['btnsua'])){
    $tenkhoa=$_POST['ten'];
    $namthanhlap=$_POST['nam'];
    $qr="UPDATE khoa SET TenKhoa='$tenkhoa', NamThanhLap='$namthanhlap' where MaKhoa=$makhoa;";
    echo $qr;
    DataProvider::ExecuteQuery($qr);
    header("location:khoa.php");
}
?>
<head>
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
<style>
    table tr{
        padding: 50px ;
    }
</style>
<body>
<form method="POST">
<h3 class="text-center">SUA KHOA</h3>
    <table class="table-bordered text-center" style="margin:0 auto;width:50%">
        <tr>
            <td>Ma khoa</td>
            <td>Ten khoa</td>
            <td>Nam thanh lap</td>
        </tr>
        <?php
        
        $qr="select * from khoa where MaKhoa=$makhoa";
        $result=DataProvider::ExecuteQuery($qr);
        
        while($row=mysqli_fetch_array($result)){
        ?>
        <tr style="margin:20px !important">
            <td><?php echo $row['MaKhoa'] ?></td>
        
            <td><input name="ten" value="<?php echo $row['TenKhoa'] ?>"></td>
            <td><input name="nam" value="<?php echo $row['NamThanhLap'] ?>"></td>
        </tr>
        <?php
        }
        ?>
        <tr>
        <td colspan="3"><button name="btnsua" class="btn btn-primary">Sua</button></td>
        </tr>
    </table>

</form>
</body>
</html>