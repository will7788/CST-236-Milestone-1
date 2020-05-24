<?php
include 'header.php';
include 'autoLoader.php';

$servername = "localhost";
$username = "root";
$password = "root";
$db = "eCommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO order_history VALUES ('".$_POST["name"]."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
$conn->close();

echo "Your items have been purchased!";

?>



</body>
</html>