<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
include '_dbconnect.php'; 
    $email = $_POST['email'];
    $pass =  $_POST['password'];

    $sql = "SELECT * FROM admin WHERE Email='$email' AND Password='$pass' ";
      
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    echo $num;
    if($num == 1){
        header("location: home.php");
    }
    $con->close();
}
?>
<html>
<head>
    <title>MedHelp</title>
    <link rel="stylesheet" type="text/css" href="Admin_login.css">
</head>
<body>
    <img src = "img/Logo.png" class = "Logo">
    <div class = "form">
    <img src = "img/profile.png" class = "profile">
    <h1>Login Admin</h1>
        <form action="/MedHelp/Admin_login.php" method="POST">
        <p>Email ID</p>
        <input type="text" name="email" placeholder="Enter email ID">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="login" value ="Login">
        <input type="submit" name="admin" value ="Login as User" onClick="javascript: form.action='login.php';">
        <input type="submit" name="cuser" value ="Create Admin Account" onClick="javascript: form.action='Admin_Reg.php';">
        <p>Don't have an Account? <ul><li><a href="Reg.php">Sign up hare</a></li></ul></p>;
        </form>
    </div>
    
</body>
</html>