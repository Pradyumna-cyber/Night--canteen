<html>
<body>
	<?php
	$conn = new mysqli("localhost","root","", "Night_canteen");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$menu = $_POST["m1"];
	$qty = $_POST["q1"];
	$price = $_POST["p1"];
	$sql = "INSERT INTO mh2_veg (Menu, Available_quantity, Booked_items, Price) 
	VALUES('$menu', '$qty','$NULL', '$price')";
	if($conn->query($sql)==TRUE)
	{
		header("Location: admin_view.php");
	}
	else
	{
		header("Location: menu_notadded2veg.php");
	}
?>
</body>
</html>