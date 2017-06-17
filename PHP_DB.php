<?php
$servername = "localhost";
$username = "root";
$password = "root";

$conn = new mysqli($servername, $username, $password);

if (!$conn) {
    die ("Connection failed: " . $mysqli_connect_error);
}
echo "Connected successfully" . "<br>";

$sql = "create database myDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database " . mysqli_error($conn);
}

$conn->close();
echo "<br> Closed";
