<?php include_once "DataProvider.php" ?>
<?php
$MaLop=$_REQUEST['MaLop'];
$qr="DELETE FROM lop WHERE MaLop='$MaLop'";
DataProvider::ExecuteQuery($qr);
header('location:lop.php');
?>