<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egway";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$query= "UPDATE `users` SET `status`='0' WHERE `natid`= ".$_POST['i']."";
$result= $conn->query($query);
echo "Updated successfully";

?>