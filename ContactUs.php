<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egway";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $query="INSERT INTO `contactus`(`Fname`, `Lname`, `Country`, `Email` , `Subject`) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['FromC']."','".$_POST['email']."','".$_POST['subject']."')";

if ($conn->query($query) === FALSE) {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
  
  $conn->close();

?>
