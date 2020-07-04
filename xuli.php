
<?php
include_once('DataProvider.php');
?>
<div >
    <h3 class="text-center">DANH SACH SINH VIEN</h3>
    <table class="table table-bordered text-center" style="margin:0 auto;width:50%">
        <tr>
            <td>STT</td>
            <td>Ten sv</td>
            <td colspan="3"><a href="ThemSinhVien.php">Thêm</a></td>
            
        </tr>
        <?php
        
        if(isset($_REQUEST['loaisv'])){
            $loai=$_REQUEST['loaisv'];
            $qr="select * from sinhvien,lop where lop.MaLop=sinhvien.MaLop and sinhvien.MaLop=$loai";
        }
        else{
            $qr="select * from sinhvien";
        }
        $result=DataProvider::ExecuteQuery($qr);

        while($row=mysqli_fetch_array($result)){
        ?>
        <tr style="margin:20px !important">
            <td><?php echo $row['MaSV'] ?></td>
        
            <td><?php echo $row['HoTen'] ?></td>
            <td><a href="sinhvien.php?MaSV=<?php echo $row['MaSV'] ?>">Xem</a></td>
            <td><a href="suasinhvien.php?MaSV=<?php echo $row['MaSV'] ?>">Sửa</a></td>
            <td><a href="xoasinhvien.php?MaSV=<?php echo $row['MaSV'] ?>">Xóa</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>