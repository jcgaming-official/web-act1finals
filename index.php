<?php
require_once("db_connection.php");

if (isset($_POST['username']) && isset($_POST['password'])) {
   
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Successfully logged in";
    } else {
        echo "Check your username and password";
    }
}
?>
