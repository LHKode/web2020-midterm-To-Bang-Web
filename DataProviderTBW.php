<?php
class DataProvider 
{
	public static function ExecuteQuery($sql)
	{
		try{
			$connection = mysqli_connect("localhost","root","", "qlsv_to_bang_web");//or 				die ("couldn't connect to localhost");				
			mysqli_query($connection, "set names 'utf8'");		
			$result = mysqli_query($connection, $sql);	
			if($result)echo "goood";	
			mysqli_close($connection);		
			return $result;
		}catch(Exception $ex)
		{
			return null;
		}
	}
}
?>