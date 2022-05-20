<!DOCTYPE html>
<html>
<head>
	<title>Book items</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	td {
		text-align: center;
	}
	th {
		font-weight: bold;
		padding-left: 15px;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: rgba(09,41,98,0.9);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}

	li a.active {
	  	background-color: #e6b800;
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
	}
</style>
<body>
<?php
		$conn = new mysqli("localhost","root","", "Night_canteen");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result); ?>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">The <p style="color: #e6b800; display: inline;"><img src="mess.jpeg" width="240" height="80"></p> Mess</td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[0]; ?></td>
		</tr>
	</table>
	<ul>
	<li><a href="user_view.php" class="active">Item Info</a></li>
		<li><a href="book_item_2veg.php">Book A Item</a></li>
		<li><a href="user_confirmed_bookings.php">Confirmed bookings</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			$conn = new mysqli("localhost","root","", "Night_canteen");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from mh2_veg";
			$result=mysqli_query($conn,$sql); ?>
			<div class="basic_box">
		  	<table>
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Book Items</p></th>
				</tr>
				<tr name=menu>
					<th>Menu</th>
					<th>Available_quantity</th>
					<th>Price</th>
				</tr>
			<?php 
			while ($row=mysqli_fetch_row($result))
    		{	?>	
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[3]; 
			} ?></td>
				</tr>
			</table>
			<br><br><br>
			<form action="book_item_2veg1.php" method="post">
			<table>
				<tr>
					<td style="text-align: left;"><b>Select Item:</td>
					<td style="text-align: left;">
						<form class="basic_box" action="book_item_2veg1.php" method="post">
                            <input type="text" name="itembook" namespace="Enter menu">
                           
                        </form>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Select Quantity to book:</td>
					<td style="text-align: left;">
                    <input type="number" min="1" max="1" name="noofitem"  required></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>
			<span style="margin-left: 43%"><input align="center" type="submit" value="Submit"></span>
			</form>
			<br><br>
		</div>
	</div>
</body>
</html>