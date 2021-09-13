<?php
    session_start();
    $t = $_SESSION["email"];
    
    echo $t;
?>
<html>
<head>
    <title>Home new</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class= "cover">
        <div class="bar">
            <img src ="img/Logo.png" class ="logo">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="doctor.html">Doctor</a></li>
                <li><a href="ambulance.html">Ambulance</a></li>
                <li><a href="pharma.php">Pharmacy</a></li>
                <li><a href="test.html">Medical Test</a></li>
                <li><a href="login.html"><img src ="img/profile.png" class ="logout"> Logout </a></li>
            </ul>
        </div>
        <div class="text">
            <h1>WELCOME TO MEDHELP</h1>
            <p>One stop shop to meet all your medical needs.</p><br><br><br><br>
            <a href="doctor.html">
            <input type="submit" name="submit1" value ="Take Appointment with Doctor"><br><br>
            </a>
            <a href="ambulance.html">
            <input type="submit" name="submit2" value ="Hire an Ambulance"><br><br>
            </a>
            <a href="pharma.php">
            <input type="submit" name="submit3" value ="Buy Medicine"><br><br>
            </a>
            <a href="test.html">
            <input type="submit" name="submit4" value ="Do Medical tests"><br><br>
            </a>
        </div>
    </div>
   
</body>
</html>