<html>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "Night_canteen");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$bid = $_POST["book_id"];
		$sql = "SELECT * from user_menu_book";
		$result=mysqli_query($conn,$sql);
		while ($row=mysqli_fetch_row($result))
	   	{
			if($bid==$row[4])
			{
				$menu = $row[2];
				$sql1 = "SELECT * FROM mh2_veg WHERE Menu='$menu'";
				$result1 = mysqli_query($conn,$sql1);
				$r = mysqli_fetch_row($result1);
				if($r[1]>0)
				
				{
					$r[1] = $r[1] - 1;
					$sql2 = "UPDATE mh2_veg SET Available_quantity='$r[1]' WHERE Menu='$menu'";
					mysqli_query($conn, $sql2);
					$r[2] = $r[2] + 1;
					$sql2 = "UPDATE mh2_veg SET Booked_items='$r[2]' WHERE Menu='$menu'";
					mysqli_query($conn, $sql2);
					$sql2 = "UPDATE user_menu_book SET status='Confirmed' WHERE book_id='$bid'";
					mysqli_query($conn, $sql2);
					$sql2 = "INSERT INTO  confirmed_booking VALUES ('$row[0]','$row[1]','$row[2]','$row[4]')";
					mysqli_query($conn, $sql2);
					$sql2 = "DELETE FROM user_menu_book WHERE book_id='$bid'";
					mysqli_query($conn, $sql2);
					header("Location: confirm_menu_veg21.php");
				}
				else
				{
					header("Location: confirm_menu_veg22.php");
				}
			}
		}
	?>
</body>
</html>