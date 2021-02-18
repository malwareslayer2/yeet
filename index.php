<?php
$servername = "172.18.0.3";
$username = "root";
$password = "toor";
$dbname = "trucorpdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, kantor FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " .
$row["kantor"]. "<br>";
	}
} else {
	echo "0 results";
}
$conn->close();
?>
