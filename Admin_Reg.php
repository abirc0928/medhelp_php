<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
include '_dbconnect.php'; 
    $name = $_POST['name'];
    $id= $_POST['id'];
    $pass = $_POST['pass'];
    $email= $_POST['email'];
    $add= $_POST['add'];
    $pn = $_POST['phone'];
    $dob= $_POST['dob'];
    $sql = "INSERT INTO `admin` (`Admin_name`, `Admin_id`, `Password`, `Email`, `Address`, `Phone`, `DOB`)
     VALUES ('$name', '$id', '$pass', '$email', '$add', '$pn', '$dob');";
    $result = mysqli_query($con,$sql);
    if($result == true){
        header("location: Admin_login.php");
    }
    $con->close();
}

?>
<html>
<head>
    <title>MedHelp</title>
    <link rel="stylesheet" type="text/css" href="Admin_Reg.css">
</head>
<body>
    <img src = "img/Logo.png" class = "Logo">
    <div class = "form">
    <img src = "img/profile.png" class = "profile">
    <h1>Registration Admin</h1>
        <form action="/MedHelp/Admin_Reg.php" method="POST">
        <p>Name</p>
        <input type="text" name="name" placeholder="Enter Name">
        <p>ID</p>
        <input type="text" name="id" placeholder="Enter ID">
        <p>Password</p>
        <input type="password" name="pass" placeholder="Enter Password">
        <p>Email</p>
        <input type="text" name="email" placeholder="Enter Email">
        <p>Address</p>
        <input type="text" name="add" placeholder="Enter Address">
        <p>Phone Number</p>
        <input type="text" name="pn" placeholder="Enter Phone Number">
        <p>Date of Birth</p>
        <input type="date" name="dob" placeholder="Enter Birth-date">
        <input type="submit" name="login" value ="Submit">
        <input type="submit" name="back" value ="Return to Login" onClick="javascript: form.action='Admin_login.php';">
        <p>Have an Account? <ul><li><a href="login.php">log in</a></li></ul></p>;
        </form>
    </div>
    
    
</body>
</html>