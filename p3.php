<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page-Mess</title>
    <link rel="stylesheet"  href="p1.css">
    <link rel="icon" href="vitap.jpeg">
    <style>
        #t1 {
    position: absolute;
    width: 232px;
    height: 50px;
    left: 130px;
    top: 300px;
    text-align: center;
    background: #FFFFFF;
    border: 1px solid #000000;
    box-sizing: border-box;
    border-radius: 13px;
}
        #hs {
    position: absolute;
    width: 232px;
    height: 50px;
    left: 130px;
    top: 360px;
    text-align: center;
    background: #FFFFFF;
    border: 1px solid #000000;
    box-sizing: border-box;
    border-radius: 13px;
}
#hs1 {
    position: absolute;
    width: 232px;
    height: 50px;
    left: 130px;
    top: 420px;
    text-align: center;
    background: #FFFFFF;
    border: 1px solid #000000;
    box-sizing: border-box;
    border-radius: 13px;
}
    </style>
</head>
<body>
    <rect id="r1">
    <img src="vitap.jpeg" id="img">
    
    <form action="admin_db.php" method="post">
    <p id="text2">Mess Login</p>
    <input type="text" id="t1" name ="Mess" placeholder="Enter Mess ID" required>
    <input type="password" id="hs" name ="pwd" placeholder="Enter Password" required>
   
<button id="sub" type="submit" value="Login">Submit</button>
</form>
    </rect>
</body>
</html>