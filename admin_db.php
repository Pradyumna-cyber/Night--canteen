<html>
<body>
    <?php
	$conn = new mysqli("localhost","root","", "night_canteen");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$user = $_POST["Mess"];
	$pass= $_POST["pwd"];
	$sql = "SELECT AdminID, Password from mess_log";
	if ($result=mysqli_query($conn,$sql))
  	{
  		while ($row=mysqli_fetch_row($result))
    	{
    		if($user==1002 && $pass==1002  )
    		{
    			header("Location: admin_view.php");
    			break;
    		}
    	}
  		mysqli_free_result($result);
	}
?>
</body>
</html>