<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Menu</title>
    <style>
        body {
            margin: 0;
            background: #f2f2f2;
        }
       
        .input {
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
	}
        table {
            font-size: 22px;
        }

        #td1 {
            background-color: rgba(09, 41, 98, 0.9);
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
            height: 450px;
            padding: 40px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19);
            
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
            background-color: rgba(09, 41, 98, 0.9);
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
</head>

<body>
    <table style="width: 100%;">
        <tr>
            <td id="td1" style="padding: 10px; font-size: 48px;  ">The <p style="color: #e6b800; display: inline;"><img src="mess.jpeg" width="240" height="80"></p> Mess</td>
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
   <div class="basic_box">
   <form  action="admin_add_menu_veg2.php" method="post">
    <table >
    <tr>
					<p style="margin-left: 40%; font-size: 26px;  text-decoration: underline;"><b>Add Menu</b></p>
				
				<tr>
			 <input type="text" placeholder="Enter menu" name="m1" class="input"  style="margin-left: 25%;"></tr><br><br>
            <tr>
			<input type="text" placeholder="quantity" name="q1" class="input" style="margin-left: 25%;"></tr><br><br>
            <tr>
			<input type="text" placeholder="price" name="p1" class="input" style="margin-left: 25%;"></tr><br>
           
  
			</table>
            <input  style="margin-left: 45%; text-decoration: none;  font-size: 15px;" type="submit" value="Add" >
            </form>
   </div>
  
</body>

</html>