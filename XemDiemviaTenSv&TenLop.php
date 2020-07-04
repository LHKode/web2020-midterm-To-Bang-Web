<form>
Tên Lớp:
<select name="TenLop" class="form-control">
<?php
	$ten_lop_chon = $_REQUEST["tenLop"];
	include_once("DataProvider.php");
	$Ds_Lop = DataProvider::ExecuteQuery("SELECT MaLop, TenLop FROM lop");
	while($ten_lop = mysqli_fetch_array($Ds_Lop))
	{
		$lop_chon = $ten_lop_chon == $ten_lop['MaLop'] ? "selected" : "";
		echo "<option value='{$ten_lop['MaLop']}' {$chon}>{$ten_lop['TenLop']}</option>";
	}
?>
</select>

<div class="row mb-1">
	<div class="col-3 text-right">
		Tên sinh viên:
	</div>
	<div class="col-9">
		<textarea name="TenSV" rows="5" class="form-control">
		</textarea>
	</div>
</div>

<button>Tìm kiếm</button>
</form>
<br>
<?php
include_once("DataProvider.php");
try{
	$sql = "SELECT Diem FROM ketqua";
	if(isset($ten_lop_chon))
	{
		$sql .= " WHERE MaLop = ".$ten_lop_chon;
	}
	$result = DataProvider::ExecuteQuery($sql);
	while($row = mysqli_fetch_array($result))
	{
		echo "{$row[0]} - {$row['TenLop']}<br>";
	}
} catch(Exception $ex){
	echo "Không thể mở CSDL";
}
?>
<h4>End of ...</h4>