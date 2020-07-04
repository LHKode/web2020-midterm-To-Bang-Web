<html>
<?php
include_once('DataProvider.php');
?>
<?php
if(isset($_REQUEST['btnthem'])){
    $tenmh=$_POST['txtten'];
    $sotc=$_POST['sotc'];
    $qr="INSERT INTO `monhoc` (`MaMH`, `TenMH`, `SoTC`) VALUES (NULL, '$tenmh', '$sotc');";
    DataProvider::ExecuteQuery($qr);
    header("location:monhoc.php");
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
<form action="" method="post">
<h3 class="text-center">THEM MON HOC</h3>
    <table class="table-bordered text-center" style="margin:0 auto;width:50%">
        <tr>
            
            <td>Ten mon hoc</td>
            <td><input name="txtten" type="text"></td>
        </tr>
        
        
        <tr>
        <td>So TC</td>
        <td><input name="sotc" type="number"></td>
        </tr>
        <tr>
            <td colspan="2"><button  name="btnthem" type="submit">Them</button></td>
        </tr>
    </table>
</form>


</body>
</html>