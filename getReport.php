<?php

include 'header.php';
include 'autoLoader.php';

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo '<h1 style="text-align: center;">History</h1>';



?>

<form action="returnReport.php" method="post">
<label for="start">Start Date:</label>
<input type="text" id="start" name="start"><br><br>
<label for="end">End Date:   </label>
<input type="text" id="end" name="end"><br><br>
<input type="submit" value="Submit">
</form>

