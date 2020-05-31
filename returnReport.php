<?php
include 'autoLoader.php';

$servername = "localhost";
$username = "root";
$password = "root";
$db = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$myArray = array();

if ($result = $conn->query("SELECT * FROM products")) {
    
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

$result->close();
$conn->close();

?>