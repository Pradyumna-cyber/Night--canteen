<html>
<?php
	$conn = new mysqli("localhost","root","", "Night_canteen");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$num = $_POST["noofitem"];
	$r = $_POST["item"];
	$sql = "UPDATE mh2_veg SET Available_quantity = Available_quantity+$num WHERE Menu='$r'";
	if(mysqli_query($conn,$sql))
	{
		header("Location: admin_item_added1.php");
	}
?>
</html>