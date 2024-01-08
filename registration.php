<?php
require_once("db_connection.php");

if (isset($_POST['newUsername']) && isset($_POST['newPassword'])) {

    $newUsername = $_POST['newUsername'];
    $newPassword = $_POST['newPassword'];


    $insertSql = "INSERT INTO users (username, password) VALUES ('$newUsername', '$newPassword')";
    
    if ($conn->query($insertSql) === TRUE) {

        header("Location: index.html");
        exit();
    } else {
        echo "Error: " . $insertSql . "<br>" . $conn->error;
    }
}
?>
