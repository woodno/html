<html>
<body>
<h1>Database con test</h1>
<?php
     $server = "localhost";
     $user = "sense_pi_user";
     $password = "Sig201283!!";
     $database = "sense_pi";

// Create connection
$conn = new mysqli($server, $user, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, yaw FROM sense_hat_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Yaw: " . $row["yaw"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</body>
</html>