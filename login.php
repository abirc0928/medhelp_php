<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
include '_dbconnect.php'; 
    $email = $_POST['email'];
    $pass =  $_POST['password'];
    $_SESSION["email"] = $email;
    $sql = "SELECT * FROM user WHERE Email='$email' AND Password='$pass'";
    
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        header("location: home.php");
    }
    $con->close();
}
?>
<html>
<head>
    <title>MedHelp</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <img src = "img/Logo.png" class = "Logo">
    <div class = "form">
    <img src = "img/profile.png" class = "profile">
    <h1>Login User</h1>
        <form action="/MedHelp/login.php" method="POST">
        <p>Email ID</p>
        <input type="text" name="email" placeholder="Enter email ID">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="login" value ="Login">
        <input type="submit" name="admin" value ="Login as Admin" onClick="javascript: form.action='Admin_login.php';">
        <input type="submit" name="cadmin" value ="Create User Account" onClick="javascript: form.action='Reg.php';">
        <p>Don't have an Account? <ul><li><a href="Reg.php">Sign up hare</a></li></ul></p>;
        </form>
    </div>
     
</body>
</html>