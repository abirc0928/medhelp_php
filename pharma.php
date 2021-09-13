<?php
    session_start();
    $t = $_SESSION["email"];
    echo $t;
?>
<html>
<head>
    <title>Pharmacy</title>
    <link rel="stylesheet" href="pharma.css">
</head>
<body>
    <div class= "cover">
    <div class="bar">
            <img src ="img/Logo.png" class ="logo">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="doctor.html">Doctor</a></li>
                <li><a href="ambulance.html">Ambulance</a></li>
                <li><a href="pharma.html">Pharmacy</a></li>
                <li><a href="test.html">Medical Test</a></li>
                <li><a href="login.html"><img src ="img/profile.png" class ="logout"> Logout </a></li>
            </ul>
        </div> 
        <div class="text">
            <br><br><br><br><br><br><h1>THE PHARMACY YOU CAN TRUST</h1><br>
            <p>For every patient's need.</p><br><br><br><br>
            <div class="doc">
            <p>Medicine Name</p>
            <br><input type="text" name="test" placeholder="Enter Medicine Name">
            </div>
            <div class="doc2">
            <br><p>Power Level</p>
            <br><input type="text" name="test" placeholder="Enter Power Level">
            </div>
            <div class="doc3">
            <br><p>Quantity</p>
            <br><input type="text" name="test" placeholder="Enter Quantity">
            </div>           
            <br><br>
            <input type="submit" name="fd" value ="Order Now">
            
        </div>
    </div>
   
</body>
</html>