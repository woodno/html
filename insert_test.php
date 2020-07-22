<html>
<body>
<h1>Insert test</h1>
Call with for example <a href='http://localhost/insert_test.php?yaw=111&pitch=222&roll=333'>http://localhost/insert_test.php?yaw=111&pitch=222&roll=333</a> 
<p>

<?php
$servername = "localhost";
$username = "sense_pi_user";
$password = "Sig201283!!";
$dbname = "sense_pi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sense_hat_data (yaw,pitch,roll)
VALUES (".$_REQUEST['yaw'].",".$_REQUEST['pitch'].",".$_REQUEST['roll'].")";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</p>
</body>
</html>
