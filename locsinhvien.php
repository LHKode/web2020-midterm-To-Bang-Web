<html>
<?php
session_start();
include_once('DataProvider.php');
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
<script>
    
        function laysvtheoloai(){
            $.ajax({
                url: 'xuli.php',
                type: 'post',
                data: {
                    'loaisv': $('#loaisv').val()
                },
                success: function(data){
                    $('#dssv').html(data);

                },
                error: function(){
                    alert("Lỗi xử lý");
                }
            });
        }
        
        $(function(){
            laysvtheoloai();
            $('#loaisv').change(function(){
                laysvtheoloai();
            });
        })
    
</script>
<body>
<div>
Loai sv:

<select name="loaisv" id="loaisv">
    <?php
    
    $result_loai=DataProvider::ExecuteQuery('SELECT * FROM lop');
    while($row_loai=mysqli_fetch_array($result_loai)){
    ?>
    <option value="<?php echo $row_loai['MaLop'] ?>"><?php echo $row_loai['TenLop'] ?></option>
    <?php
    }
    
    ?>
</select>

</div>
<div id="dssv">

</div>

</body>
</html>