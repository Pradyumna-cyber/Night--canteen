<!DOCTYPE html>
<html>
<head>
	<title>Admin Confirm Booking</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	p {
		font-size: 24px;
	}
	#td1
	{
		background-color: #203D70;
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
	}
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: #203D70;
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	a:hover {
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
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p>Booking Request has been confirmed!<br></p>
		<P><br>Click Next to get redirected to home.</P>
		<a href="admin_view.php" style="width: 10%; text-align: center; color: black; border: 3px solid #e6b800;">Next</a>
	</div>
</body>
</html>