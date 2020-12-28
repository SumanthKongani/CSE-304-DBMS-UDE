<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "ude";
  // Database connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if($conn->connect_error){
    echo "$conn->connect_error";
    
  } else {
    $stmt = $conn->prepare("insert into contactus (name, email, subject, message) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    $execval = $stmt->execute();
    //echo $execval;
     echo "<h6>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h6>";
    $stmt->close();
    $conn->close();
  }
  
  
?>