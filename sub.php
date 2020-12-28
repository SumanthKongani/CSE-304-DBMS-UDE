<?php
$email = $_POST['email'];
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "ude";
  // Database connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if($conn->connect_error){
    echo "$conn->connect_error";
    
  } else {
    $stmt = $conn->prepare("insert into subscribe (email) values(?)");
    $stmt->bind_param("s", $email);
    $execval = $stmt->execute();
    echo "<h6>Subscribed</h6>";

    $stmt->close();
    $conn->close();
  }
  
  
?>