<?php
$servername = "192.168.254.150";
$username = "root";
$password = "root";
$dbname = "quieta_act1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
