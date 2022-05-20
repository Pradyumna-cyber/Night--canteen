<!DOCTYPE html>
<html>
<head>
	<title>Admin Remove Items</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	td {
		text-align: center;
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
<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">The <p style="color: #e6b800; display: inline;"><img src="mess.jpeg" width="240" height="80"></p> Mess</td>
		</tr>
	</table>
	<ul>
	<li><a href="admin_view.php" class="active">Item Info</a></li>
		<li><a href="add_menu&price.php">Add Menu</a></li>
		<li><a href="add_item_admin2.php">Add Item</a></li>
		<li><a href="remove_item_admin2.php">Remove Item</a></li>
		<li><a href="admin_book_status_2veg.php">Booking Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
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
		  	<table class="basic_box">
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Remove item</p></th>
				</tr>
				<tr>
					<th> Menu</th>
					<th>Available_quantity</th>
					<th>Booked_items</th>
					<th>Price</th>
				</tr>
			<?php 
			while ($row=mysqli_fetch_row($result))
    		{	?>	
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[3]; 
			} ?></td>
				</tr>
			</table>
			<br><br>
			<form class="basic_box" action="admin_item_remove.php" method="post">
			<table>
				<tr>
					<td style="text-align: left;"><b>Select item type:</td>
					<td style="text-align: left;">
						<select name="item" required>
						<option value="">Select</option>
						<option value="Paneer Curry Paratha">Paneer Curry Paratha </option>
							<option value="Paneer Curry Dosa"> Paneer Curry Dosa</option>
							<option value="Paneer Curry">Paneer Curry</option>
							<option value="Plain Dosa">Plain Dosa</option>
							<option value="Onion Dosa">Onion Dosa</option>
							<option value="Masala Dosa">Masala Curry</option>
							<option value="Veg Maggi">Veg Maggi</option>
							<option value="French Fries">French Fries</option>
							<option value="Gulaab Jamun">Sweet</option>

							<option value="Tea">Tea</option>
							<option value="Coffee">Coffee</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Enter number of item to remove:</td>
					<td style="text-align: left;"><input type="number" min="0" name="noofitem" id="item" required></td>
				</tr>
			</table><br>
			<input style="margin-left: 43%;" type="submit" value="Submit">
			</form>
	</div>
</body>
</html>