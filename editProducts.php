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
echo "Connected successfully";

echo '<h1 style="text-align: center;"> Edit Products</h1>';

echo '<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Products</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>';
echo '<div class="active-cyan-4 mb-4" style="max-width: 20rem; text-align: center;">
  <input class="form-control" type="text" placeholder="Search" aria-label="Search"> <br>
  <button type="button" class="btn btn-dark">Search</button>
</div> <br>';
echo '<table class="table">
<tbody>';
for ($j = 0; $j < 4; $j++) {
    echo '<tr>';
    for ($i = 0; $i < 3; $i++) {
        echo '<td><div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Secondary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
    <button type="button" class="btn btn-dark">Edit</button>
    <button type="button" class="btn btn-dark">Remove</button>
  </div>
</div></td>';
    }
    echo '</tr>';
}
echo '</tbody>
</table>
</body>';

?>



</body>
</html>