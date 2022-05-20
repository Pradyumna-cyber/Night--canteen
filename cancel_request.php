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
				$sql1 = "DELETE FROM user_menu_book WHERE book_id='$bid'";
				mysqli_query($conn,$sql1);
				header("Location: cancel_request1.php");
				break;
			}
		}
	?>
</body>