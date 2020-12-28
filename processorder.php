<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "ude";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


$sptype = $_POST['sptype'];
$spcpu = $_POST['spcpu'];
$spdisplaysize = $_POST['spdisplaysize'];
$spdisplaytype = $_POST['spdisplaytype'];
$os = $_POST['os'];
$frontcam = $_POST['frontcam'];

$rearcam = $_POST['rearcam'];
$speaker = $_POST['speaker'];
$biometric = $_POST['biometric'];
$ram = $_POST['ram'];
$storage = $_POST['storage'];
$battery = $_POST['battery'];

$color = $_POST['color'];
$degign = $_POST['design'];
$bodytype = $_POST['bodytype'];


  
  
  if($conn->connect_error){
    echo "$conn->connect_error";
    
  } else {
    $stmt = $conn->prepare("insert into orders (sptype, spcpu, spdisplaysize, spdisplaytype, os, frontcam, rearcam, speaker, biometric, ram, storage, battery, color, degign, bodytype) values(?, ?, ?, ?,?,?, ?, ?, ?, ?,?,?,?, ?, ?)");
    $stmt->bind_param("sssssiissssssss", $sptype, $spcpu, $spdisplaysize, $spdisplaytype, $os, $frontcam, $rearcam, $speaker, $biometric, $ram, $storage, $battery, $color, $degign, $bodytype);
    $execval = $stmt->execute();
    
    

     echo "<h1> Successfully Ordered! Thank you for purchasing mobile.</h1>";
     echo( "<button onclick= \"location.href='custo.php'\">Customize</button>"); 
    
   
    $stmt->close();
    $conn->close();
  }
  
  
?>

