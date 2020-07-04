<?php include_once "DataProvider.php" ?>
<?php
$MaLop=$_REQUEST['MaSV'];
$qr="DELETE FROM sinhvien WHERE MaSV='$MaLop'";
DataProvider::ExecuteQuery($qr);
header('location:locsinhvien.php');
?>