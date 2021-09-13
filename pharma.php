<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
session_start();
$t = $_SESSION["email"];

include '_dbconnect.php'; 
    $m_name = $_POST['m_name'];
    $m_power = $_POST['m_power'];
    $m_quentity =  $_POST['m_quentity'];
    
    $sql1 = "SELECT Medicine_quantity FROM pharmacy WHERE Medicine_name = '$m_name' and Power_Level = '$m_power' and Medicine_quantity >= '$m_quentity';";
    $result1 = mysqli_query($con,$sql1);
    $num1 = mysqli_num_rows($result1);
    echo $num1;

    if($num1 > 0){
        $sql = "INSERT INTO `orderd_table` (`O_Medicine_name`, `O_Power_level`, `O_Quantity`, `O_user_id`)
        VALUES ('$m_name', '$m_power', '$m_quentity', '$t'); ";
        $result = mysqli_query($con,$sql);
        while($row = $result1->fetch_assoc()){
            $temp = $row["Medicine_quantity"] ;
            echo $temp;
            $Update_quentity = $temp - $m_quentity;
            echo $Update_quentity;
            $sql2 = "UPDATE pharmacy SET Medicine_quantity  = '$Update_quentity' WHERE  Medicine_name = '$m_name';";
            $result2 = mysqli_query($con,$sql2);
        }
    }

    $con->close();
}
   
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
            <form action="/MedHelp/pharma.php" method="POST">
                <p>For every patient's need.</p><br><br><br><br>
                <div class="doc">
                <p>Medicine Name</p>
                <br><input type="text" name="m_name" placeholder="Enter Medicine Name">
                </div>
                <div class="doc2">
                <br><p>Power Level</p>
                <br><input type="text" name="m_power" placeholder="Enter Power Level">
                </div>
                <div class="doc3">
                <br><p>Quantity</p>
                <br><input type="text" name="m_quentity" placeholder="Enter Quantity">
                </div>           
                <br><br>
                <input type="submit" name="fd" value ="Order Now">
            </form>
        </div>
    </div>
   
</body>
</html>