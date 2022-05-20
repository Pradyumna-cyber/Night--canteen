<html>
	<?php
		$conn = new mysqli("localhost","root","", "Night_canteen");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	
	$sql = "SELECT * FROM temp_session";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_row($result);
	$Reg_no = $row[0];
	$Hostel = $row[1];
	$Menu=$_POST["itembook"];
	$status = "Waiting";
	
	
	$sqlt = "SELECT * from book_id";
	$result=mysqli_query($conn,$sqlt);
	$row=mysqli_fetch_row($result);
	$t = $row[0];
	$sql = "INSERT INTO user_menu_book VALUES ('$Reg_no', '$Hostel','$Menu', '$status', '$t')";
	mysqli_query($conn, $sql);
	$t = $t + 1;
	$sqlt = "DELETE from book_id";
	mysqli_query($conn,$sqlt);
	$sqlt = "INSERT INTO book_id VALUES ('$t')";
	mysqli_query($conn,$sqlt);
	header("Location: book_item_2veg2.php");
	?>
</html>