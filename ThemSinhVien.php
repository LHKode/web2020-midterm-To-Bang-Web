<html>
<?php
include_once('DataProvider.php');
?>
<?php
   
    if(isset($_REQUEST['btnthem'])){
        $Tensv=$_REQUEST['txtten'];
        $Ngay=$_REQUEST['txtnam'];
        $email=$_REQUEST['txtemail'];
        $malop1=$_REQUEST['chonmalop'];
        $qrnhap="INSERT INTO sinhvien(HoTen,NgaySinh,Email,MaLop) VALUE('$Tensv','$Ngay','$email','$malop1')";
        DataProvider::ExecuteQuery($qrnhap);
        header("location:locsinhvien.php");
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
<form action="" method="POST" >
<h3 class="text-center">SỬA SINH VIÊN</h3>
    <table class="table-bordered text-center" style="margin:0 auto;width:50%">
       
        <tr>
            
            <td>Tên Sinh Viên</td>
            <td><input class="form-control" name="txtten" type="text" value="" ></td>
        </tr>
        
        
        <tr>
            <td>Ngày sinh</td>
            <td><input class="form-control" name="txtnam"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input class="form-control" name="txtemail" type="text"></td>
        </tr>
        <tr>
            <td>Mã Lớp</td>
            <td>
                <select name="chonmalop" id="chonmalop">
                    <?php
                        $qr=DataProvider::ExecuteQuery("SELECT*FROM lop");
                        while($row_lop=mysqli_fetch_array($qr)){

                        
                    ?>
                        <option  value="<?php echo $row_lop['MaLop'] ?>"><?php echo $row_lop['TenLop'] ?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><button class="btn btn-primary"  name="btnthem" type="submit">Sửa</button></td>
        </tr>
    </table>
</for